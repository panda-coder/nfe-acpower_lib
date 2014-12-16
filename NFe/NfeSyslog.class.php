<?php

	class NfeSyslog_Service{
		private $php_file;
		private $path_file;
		
		private $printer_exe_path;
		private $printer_exe;
		private $printer_temp_dir;
		
		
		private $processos;
		
		
		public function __construct($file, $path){ //Construtor da classe
		
			$this->php_file = $file; //Arquivo de servi�o
			$this->path_file = $path; //Caminho completo do arquivo de servi�o
			
		}//fim construtor classe
		
		
		public function setPrinterProgram($path, $exe, $temp_dir){
			$this->printer_exe_path = $path;
			$this->printer_exe = $exe;
			$this->printer_temp_dir = $temp_dir;
		}
		
		
		private function exec()	{
		
			$full_path_file = $this->path_file . DIRECTORY_SEPARATOR . $this->php_file;
		
			$cmd = "php -f \"$full_path_file\"";
		ECHO $cmd;
		
			if (substr(php_uname(), 0, 7) == "Windows")	{ //Caso o sistema operacional seja windows
				
				$WshShell = new COM("WScript.Shell");
				$oExec = $WshShell->Run("$cmd", 0, false);
								
			}else{
				
				exec($cmd . " > /dev/null &");
				
			}//fim do if (windows)
			
			
		}
		
		private function execPrinter(){
		
			
		
			$full_path_file = $this->printer_exe_path . DIRECTORY_SEPARATOR . $this->printer_exe;
		
			$cmd = "\"$full_path_file\" /s:$this->printer_temp_dir";
			echo $cmd;
		
		
			if (substr(php_uname(), 0, 7) == "Windows")	{ //Caso o sistema operacional seja windows
				//echo $cmd;
				
				//$WshShell = new COM("WScript.Shell");
				//$oExec = $WshShell->Run("$cmd", 0, false);
				
				//shell_exec($cmd);
			}else{
				
				exec($cmd . " > /dev/null &");
				
			}//fim do if (windows)
			
			
		}
		
		private function setProcessos($program = "php.exe"){
		
			//exec('WMIC PROCESS WHERE (Description="php.exe") get Processid, Caption, CommandLine ', $task_list);
			
			array_shift($task_list);
			array_pop($task_list);
			
			
			$aux_process = array();
			
			/*
			OLD
			foreach($task_list as $task){
			
				if (!empty($task)){
				
					$primeiro = strpos ( $task , '"');
					$ultimo = strrpos ( $task , '"');
					
					array_push( $aux_process, array("caption" => trim(substr($task, 0, $primeiro)), "commandline" => trim(substr($task, $primeiro, $ultimo - $primeiro + 1)),
					"processid" => trim(substr($task, $ultimo+1, strlen($task) - $ultimo))) );
				}
			
			
			}*/
			
			$wmi = new COM('winmgmts://');
			$processes = $wmi->ExecQuery("SELECT * FROM Win32_Process WHERE Description=\"$program\"");
			
			
			
			
			foreach($processes as $process){
				//echo $process->CommandLine . "<br />";
				//echo $process->ProcessId . "<br />";
				array_push( $aux_process, array("caption" => trim($process->Caption), "commandline" => trim($process->CommandLine),
				"processid" => trim($process->ProcessId )) );
			}
			
			$wmi = null;
			
			$this->processos = $aux_process;
		}
		
		
		public static function isRunningPid($pid, $program){
			$wmi = new COM('winmgmts://');
			$processes = $wmi->ExecQuery("SELECT * FROM Win32_Process WHERE Description like \"$program%\" 	AND ProcessId='$pid'");
			
			return count($processes)>0;
		}
		
		public static function KillPid($pid){
			//exec("taskkill /F /PID $pid");
			
			$wmi=new COM("winmgmts:{impersonationLevel=impersonate}!\\\\.\\root\\cimv2");
			$procs=$wmi->ExecQuery("SELECT * FROM Win32_Process WHERE ProcessId='".$pid."'");
			foreach($procs as $proc){
				$proc->Terminate();
			}
		}
		
		
		public function isRunning(){
			
			$this->setProcessos();
		
			$result = FALSE;
			
			//var_dump($this->processos_php);
	
			foreach($this->processos as $process){
				if (strpos($process["commandline"], "$this->php_file")){
					$result = TRUE;
				}
			}
			
			return $result;
		}
		
		
		
		
		private function getPID(){
			$this->setProcessos();
		
			$result = FALSE;
	
			foreach($this->processos as $process){
				if (strpos($process["commandline"], "$this->php_file")){
					return $process["processid"];
				}
			}
			
		}
		
		public function startService(){
		
			if ( !$this->isRunning() ){
				$this->exec();
			}
			
		}
		
		public function startPrinterService(){
		
			if ( !$this->isPrinterRunning() ){
				$this->execPrinter();
			}
			
		}
		
		public function stopService(){
			if ( $this->isRunning() ){
				$pid = $this->getPID();
				
				//echo $pid;
				//echo "taskkill /PID $pid";
				exec("taskkill /F /PID $pid");
			}
		}
		
		public function getCPU(){
			$wmi = new COM('winmgmts://');
			$cpu= $wmi->ExecQuery("SELECT * FROM CPU");
			
			foreach($cpu as $item){
				var_dump($item);
			}
			
			$wmi = null;
			
			return $cpu;
		}
		
		
		public function isPrinterRunning(){
			$this->setProcessos("$this->printer_exe");
			
			if ( !empty($this->processos) ){
			
				//var_dump($this->processos);
				
				return TRUE;
				
			}
			
			return FALSE;
		}
		
		
		private function getPrinterPID(){
			$this->setProcessos("$this->printer_exe");
		
			$result = FALSE;
	
			foreach($this->processos as $process){
				return $process["processid"];
			}
			
			return $result;
		}
		
		
		public function stopPrinterService(){
			if ( $this->isPrinterRunning() ){
				$pid = $this->getPrinterPID();
				
				//echo $pid;
				//echo "taskkill /PID $pid";
				exec("taskkill /F /PID $pid");
			}
		}
		
		
	}
?>