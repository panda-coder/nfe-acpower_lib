@echo off
:loop
@ping -w 5000 -n 1 1.1.1.1 
set %errorlevel%=0
net start | find "ApacheScriptcase7"
if errorlevel 1 goto loop
@ping -w 5000 -n 1 1.1.1.1 
php.exe "C:\Arquivos de programas\NetMake\v7\wwwroot\nfephp\acpower_lib\NFe\action_bat.php" on