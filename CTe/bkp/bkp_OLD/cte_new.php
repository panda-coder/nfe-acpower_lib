<?php

$str = 1;

/********************************************************************************/
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;
$dom->preserveWhiteSpace = false;

$CTe = $dom->createElement("CTe");
$CTe->setAttribute("xmlns", "NOME_DO_GERADOR");
$dom->appendChild($CTe);


//************************************* NIVEL 0 *****************************************/
//----------------------------------------- CTe
$infCte			= $dom->createElement("infCte");

$infCte->setAttribute("versao","1.04");
$infCte->setAttribute("Id","INFORMAR_ID_CTE");

$CTe->appendChild($infCte);
//----------------------------------------- CTe


//************************************* NIVEL 1 *****************************************/
//----------------------------------------- infCte
$ide			= $dom->createElement("ide");
$compl			= $dom->createElement("compl");
$emit			= $dom->createElement("emit");
$rem			= $dom->createElement("rem");
$exped			= $dom->createElement("exped");
$receb			= $dom->createElement("receb");
$dest			= $dom->createElement("dest");
$vPrest			= $dom->createElement("vPrest");
$imp			= $dom->createElement("imp");
$infCTeNorm		= $dom->createElement("infCTeNorm");
$infCteComp		= $dom->createElement("infCteComp");
$infCteAnu		= $dom->createElement("infCteAnu");

$infCte->appendChild($ide);
$infCte->appendChild($compl);
$infCte->appendChild($emit);
$infCte->appendChild($rem);
$infCte->appendChild($exped);
$infCte->appendChild($receb);
$infCte->appendChild($dest);
$infCte->appendChild($vPrest);
$infCte->appendChild($imp);
$infCte->appendChild($infCTeNorm);
$infCte->appendChild($infCteComp);
$infCte->appendChild($infCteAnu);
//----------------------------------------- infCte



//************************************* NIVEL 2 *****************************************/

//----------------------------------------- ide
$cUF			= $dom->createElement("cUF",$str);
$cCT			= $dom->createElement("cCT",$str);
$CFOP			= $dom->createElement("CFOP",$str);
$natOp			= $dom->createElement("natOp",$str);
$forPag			= $dom->createElement("forPag",$str);
$mod			= $dom->createElement("mod",$str);
$serie			= $dom->createElement("serie",$str);
$nCT			= $dom->createElement("nCT",$str);
$dhEmi			= $dom->createElement("dhEmi",$str);
$tpImp			= $dom->createElement("tpImp",$str);
$tpEmis			= $dom->createElement("tpEmis",$str);
$cDV			= $dom->createElement("cDV",$str);
$tpAmb			= $dom->createElement("tpAmb",$str);
$tpCTe			= $dom->createElement("tpCTe",$str);
$procEmi		= $dom->createElement("procEmi",$str);
$verProc		= $dom->createElement("verProc",$str);
$refCTE			= $dom->createElement("refCTE",$str);
$cMunEnv		= $dom->createElement("cMunEnv",$str);
$xMunEnv		= $dom->createElement("xMunEnv",$str);
$UFEnv			= $dom->createElement("UFEnv",$str);
$modal			= $dom->createElement("modal",$str);
$tpServ			= $dom->createElement("tpServ",$str);
$cMunIni		= $dom->createElement("cMunIni",$str);
$xMunIni		= $dom->createElement("xMunIni",$str);
$UFIni			= $dom->createElement("UFIni",$str);
$cMunFim		= $dom->createElement("cMunFim",$str);
$xMunFim		= $dom->createElement("xMunFim",$str);
$UFFim			= $dom->createElement("UFFim",$str);
$retira			= $dom->createElement("retira",$str);
$xDetRetira		= $dom->createElement("xDetRetira",$str);
$toma03			= $dom->createElement("toma03");
$toma4			= $dom->createElement("toma4");
$dhCont			= $dom->createElement("dhCont",$str);
$xJust			= $dom->createElement("xJust",$str);

$ide->appendChild($cUF);
$ide->appendChild($cCT);
$ide->appendChild($CFOP);
$ide->appendChild($natOp);
$ide->appendChild($forPag);
$ide->appendChild($mod);
$ide->appendChild($serie);
$ide->appendChild($nCT);
$ide->appendChild($dhEmi);
$ide->appendChild($tpImp);
$ide->appendChild($tpEmis);
$ide->appendChild($cDV);
$ide->appendChild($tpAmb);
$ide->appendChild($tpCTe);
$ide->appendChild($procEmi);
$ide->appendChild($verProc);
$ide->appendChild($refCTE);
$ide->appendChild($cMunEnv);
$ide->appendChild($xMunEnv);
$ide->appendChild($UFEnv);
$ide->appendChild($modal);
$ide->appendChild($tpServ);
$ide->appendChild($cMunIni);
$ide->appendChild($xMunIni);
$ide->appendChild($UFIni);
$ide->appendChild($cMunFim);
$ide->appendChild($xMunFim);
$ide->appendChild($UFFim);
$ide->appendChild($retira);
$ide->appendChild($xDetRetira);
$ide->appendChild($toma03);
$ide->appendChild($toma4);
$ide->appendChild($dhCont);
$ide->appendChild($xJust);
//----------------------------------------- ide



//----------------------------------------- compl
$xCaracAd		= $dom->createElement("xCaracAd",$str);
$xCaracSer		= $dom->createElement("xCaracSer",$str);
$xEmi			= $dom->createElement("xEmi",$str);
$fluxo			= $dom->createElement("fluxo");
$Entrega		= $dom->createElement("Entrega");
$origCalc		= $dom->createElement("origCalc",$str);
$destCalc		= $dom->createElement("destCalc",$str);
$xObs			= $dom->createElement("xObs",$str);
$ObsCont		= $dom->createElement("ObsCont");
$ObsFisco		= $dom->createElement("ObsFisco");

$compl->appendChild($xCaracAd);
$compl->appendChild($xCaracSer);
$compl->appendChild($xEmi);
$compl->appendChild($fluxo);
$compl->appendChild($Entrega);
$compl->appendChild($origCalc);
$compl->appendChild($destCalc);
$compl->appendChild($xObs);
$compl->appendChild($ObsCont);
$compl->appendChild($ObsFisco);
//----------------------------------------- compl


//----------------------------------------- emit
$CNPJ			= $dom->createElement("CNPJ",$str);
$IE				= $dom->createElement("IE",$str);
$xNome			= $dom->createElement("xNome",$str);
$xFant			= $dom->createElement("xFant",$str);
$enderEmit		= $dom->createElement("enderEmit");

$emit->appendChild($CNPJ);
$emit->appendChild($IE);
$emit->appendChild($xNome);
$emit->appendChild($xFant);
$emit->appendChild($enderEmit);
//----------------------------------------- emit


//----------------------------------------- rem
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$IE				= $dom->createElement("IE",$str);
$xNome			= $dom->createElement("xNome",$str);
$xFant			= $dom->createElement("xFant",$str);
$fone			= $dom->createElement("fone",$str);
$enderReme		= $dom->createElement("enderReme");
$email			= $dom->createElement("email",$str);
$infNF			= $dom->createElement("infNF");
$infNFe			= $dom->createElement("infNFe");
$infOutros		= $dom->createElement("infOutros");

$rem->appendChild($CNPJ);
$rem->appendChild($CPF);
$rem->appendChild($IE);
$rem->appendChild($xNome);
$rem->appendChild($xFant);
$rem->appendChild($fone);
$rem->appendChild($enderReme);
$rem->appendChild($email);
$rem->appendChild($infNF);
$rem->appendChild($infNFe);
$rem->appendChild($infOutros);
//----------------------------------------- rem


//----------------------------------------- exped
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$IE				= $dom->createElement("IE",$str);
$xNome			= $dom->createElement("xNome",$str);
$fone			= $dom->createElement("fone",$str);
$enderExped		= $dom->createElement("enderExped");
$email			= $dom->createElement("email",$str);

$exped->appendChild($CNPJ);
$exped->appendChild($CPF);
$exped->appendChild($IE);
$exped->appendChild($xNome);
$exped->appendChild($fone);
$exped->appendChild($enderExped);
$exped->appendChild($email);
//----------------------------------------- exped


//----------------------------------------- receb
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$IE				= $dom->createElement("IE",$str);
$xNome			= $dom->createElement("xNome",$str);
$fone			= $dom->createElement("fone",$str);
$enderReceb		= $dom->createElement("enderReceb");
$email 			= $dom->createElement("email",$str);

$receb->appendChild($CNPJ);
$receb->appendChild($CPF);
$receb->appendChild($IE);
$receb->appendChild($xNome);
$receb->appendChild($fone);
$receb->appendChild($enderReceb);
$receb->appendChild($email);
//----------------------------------------- receb


//----------------------------------------- dest
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$IE				= $dom->createElement("IE",$str);
$xNome			= $dom->createElement("xNome",$str);
$fone			= $dom->createElement("fone",$str);
$ISUF			= $dom->createElement("ISUF",$str);
$enderDest		= $dom->createElement("enderDest");
$email			= $dom->createElement("email",$str);
$locEnt			= $dom->createElement("locEnt");

$dest->appendChild($CNPJ);
$dest->appendChild($CPF);
$dest->appendChild($IE);
$dest->appendChild($xNome);
$dest->appendChild($fone);
$dest->appendChild($ISUF);
$dest->appendChild($enderDest);
$dest->appendChild($email);
$dest->appendChild($locEnt);
//----------------------------------------- dest


//----------------------------------------- vPrest
$vTPrest		= $dom->createElement("vTPrest",$str);
$vRec			= $dom->createElement("vRec",$str);
$Comp			= $dom->createElement("Comp");

$vPrest->appendChild($vTPrest);
$vPrest->appendChild($vRec);
$vPrest->appendChild($Comp);
//----------------------------------------- vPrest



//----------------------------------------- imp
$ICMS			= $dom->createElement("ICMS");
$infAdFisco 	= $dom->createElement("infAdFisco",$str);

$imp->appendChild($ICMS);
$imp->appendChild($infAdFisco );
//----------------------------------------- imp


//----------------------------------------- infCTeNorm
$infCarga		= $dom->createElement("infCarga");
$contQt			= $dom->createElement("contQt");
$docAnt			= $dom->createElement("docAnt");
$seg			= $dom->createElement("seg");
$infModal		= $dom->createElement("infModal");
$peri			= $dom->createElement("peri");
$veicNovos		= $dom->createElement("veicNovos");
$cobr			= $dom->createElement("cobr");
$infCteSub		= $dom->createElement("infCteSub");

$infCTeNorm->appendChild($infCarga);
$infCTeNorm->appendChild($contQt);
$infCTeNorm->appendChild($docAnt);
$infCTeNorm->appendChild($seg);
$infCTeNorm->appendChild($infModal);
$infCTeNorm->appendChild($peri);
$infCTeNorm->appendChild($veicNovos);
$infCTeNorm->appendChild($cobr);
$infCTeNorm->appendChild($infCteSub);
//----------------------------------------- infCTeNorm


//----------------------------------------- infCteComp
$chave			= $dom->createElement("chave",$str);
$vPresComp		= $dom->createElement("vPresComp");
$impComp		= $dom->createElement("impComp");

$infCteComp->appendChild($chave);
$infCteComp->appendChild($vPresComp);
$infCteComp->appendChild($impComp);
//----------------------------------------- infCteComp


//----------------------------------------- infCteAnu
$chCte			= $dom->createElement("chCte",$str);
$dEmi			= $dom->createElement("dEmi",$str);

$infCteAnu->appendChild($chCte);
$infCteAnu->appendChild($dEmi);
//----------------------------------------- infCteAnu






//************************************* NIVEL 3 *****************************************/
//----------------------------------------- toma03
$toma			= $dom->createElement("toma",$str);

$toma03->appendChild($toma);
//----------------------------------------- toma03

//----------------------------------------- toma4
$toma			= $dom->createElement("toma",$str);
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$IE				= $dom->createElement("IE",$str);
$xNome			= $dom->createElement("xNome",$str);
$xFant			= $dom->createElement("xFant",$str);
$fone			= $dom->createElement("fone",$str);
$enderToma		= $dom->createElement("enderToma");
$email			= $dom->createElement("email",$str);

$toma4->appendChild($toma);
$toma4->appendChild($CNPJ);
$toma4->appendChild($CPF);
$toma4->appendChild($IE);
$toma4->appendChild($xNome);
$toma4->appendChild($xFant);
$toma4->appendChild($fone);
$toma4->appendChild($enderToma);
$toma4->appendChild($email);
//----------------------------------------- toma4

//----------------------------------------- fluxo
$xOrig			= $dom->createElement("xOrig",$str);
$pass			= $dom->createElement("pass");
$xDest			= $dom->createElement("xDest",$str);
$xRota			= $dom->createElement("xRota",$str);

$fluxo->appendChild($xOrig);
$fluxo->appendChild($pass);
$fluxo->appendChild($xDest);
$fluxo->appendChild($xRota);
//----------------------------------------- fluxo

//----------------------------------------- Entrega
$semData		= $dom->createElement("semData");
$comData		= $dom->createElement("comData");
$noPeriodo		= $dom->createElement("noPeriodo");
$semHora		= $dom->createElement("semHora");
$comHora		= $dom->createElement("comHora");
$noInter		= $dom->createElement("noInter");
$xCampo			= $dom->createElement("xCampo",$str);
$xTexto			= $dom->createElement("xTexto",$str);

$Entrega->appendChild($semData);
$Entrega->appendChild($comData);
$Entrega->appendChild($noPeriodo);
$Entrega->appendChild($semHora);
$Entrega->appendChild($comHora);
$Entrega->appendChild($noInter);
$Entrega->appendChild($xCampo);
$Entrega->appendChild($xTexto);
//----------------------------------------- Entrega

//----------------------------------------- ObsCont
$xTexto			= $dom->createElement("xTexto",$str);

$ObsCont->setAttribute("xCampo",$str);
$ObsCont->appendChild($xTexto);
//----------------------------------------- ObsCont

//----------------------------------------- ObsFisco
$xTexto			= $dom->createElement("xTexto",$str);

$ObsFisco->setAttribute("xCampo",$str);
$ObsFisco->appendChild($xTexto);
//----------------------------------------- ObsFisco

//----------------------------------------- enderEmit
$xLgr			= $dom->createElement("xLgr",$str);
$nro			= $dom->createElement("nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$CEP			= $dom->createElement("CEP",$str);
$UF				= $dom->createElement("UF",$str);
$fone			= $dom->createElement("fone",$str);

$enderEmit->appendChild($xLgr);
$enderEmit->appendChild($nro);
$enderEmit->appendChild($xCpl);
$enderEmit->appendChild($xBairro);
$enderEmit->appendChild($cMun);
$enderEmit->appendChild($xMun);
$enderEmit->appendChild($CEP);
$enderEmit->appendChild($UF);
$enderEmit->appendChild($fone);
//----------------------------------------- enderEmit

//----------------------------------------- enderReme
$xLgr			= $dom->createElement("xLgr",$str);
$nro			= $dom->createElement("nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$CEP			= $dom->createElement("CEP",$str);
$UF				= $dom->createElement("UF",$str);
$cPais			= $dom->createElement("cPais",$str);
$xPais			= $dom->createElement("xPais",$str);

$enderReme->appendChild($xLgr);
$enderReme->appendChild($nro);
$enderReme->appendChild($xCpl);
$enderReme->appendChild($xBairro);
$enderReme->appendChild($cMun);
$enderReme->appendChild($xMun);
$enderReme->appendChild($CEP);
$enderReme->appendChild($UF);
$enderReme->appendChild($cPais);
$enderReme->appendChild($xPais);
//----------------------------------------- enderReme

//----------------------------------------- infNF
$nRoma			= $dom->createElement("nRoma",$str);
$nPed			= $dom->createElement("nPed",$str);
$mod			= $dom->createElement("mod",$str);
$serie			= $dom->createElement("serie",$str);
$nDoc			= $dom->createElement("nDoc",$str);
$dEmi			= $dom->createElement("dEmi",$str);
$vBC			= $dom->createElement("vBC",$str);
$vICMS			= $dom->createElement("vICMS",$str);
$vBCST			= $dom->createElement("vBCST",$str);
$vST			= $dom->createElement("vST",$str);
$vProd			= $dom->createElement("vProd",$str);
$vNF			= $dom->createElement("vNF",$str);
$nCFOP			= $dom->createElement("nCFOP",$str);
$nPeso			= $dom->createElement("nPeso",$str);
$PIN			= $dom->createElement("PIN",$str);
$locRet			= $dom->createElement("locRet");

$infNF->appendChild($nRoma);
$infNF->appendChild($nPed);
$infNF->appendChild($mod);
$infNF->appendChild($serie);
$infNF->appendChild($nDoc);
$infNF->appendChild($dEmi);
$infNF->appendChild($vBC);
$infNF->appendChild($vICMS);
$infNF->appendChild($vBCST);
$infNF->appendChild($vST);
$infNF->appendChild($vProd);
$infNF->appendChild($vNF);
$infNF->appendChild($nCFOP);
$infNF->appendChild($nPeso);
$infNF->appendChild($PIN);
$infNF->appendChild($locRet);
//----------------------------------------- infNF

//----------------------------------------- infNFe
$Chave			= $dom->createElement("Chave",$str);
$PIN			= $dom->createElement("PIN",$str);
$tpDoc			= $dom->createElement("tpDoc",$str);
$descOutros		= $dom->createElement("descOutros",$str);
$nDoc			= $dom->createElement("nDoc",$str);
$dEmi			= $dom->createElement("dEmi",$str);
$vDocFisc		= $dom->createElement("vDocFisc",$str);

$infNFe->appendChild($Chave);
$infNFe->appendChild($PIN);
$infNFe->appendChild($tpDoc);
$infNFe->appendChild($descOutros);
$infNFe->appendChild($nDoc);
$infNFe->appendChild($dEmi);
$infNFe->appendChild($vDocFisc);
//----------------------------------------- infNFe

//----------------------------------------- enderExped
$xLgr			= $dom->createElement("xLgr",$str);
$nro			= $dom->createElement("nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$CEP			= $dom->createElement("CEP",$str);
$UF				= $dom->createElement("UF",$str);
$cPais			= $dom->createElement("cPais",$str);
$xPais			= $dom->createElement("xPais",$str);

$enderExped->appendChild($xLgr);
$enderExped->appendChild($nro);
$enderExped->appendChild($xCpl);
$enderExped->appendChild($xBairro);
$enderExped->appendChild($cMun);
$enderExped->appendChild($xMun);
$enderExped->appendChild($CEP);
$enderExped->appendChild($UF);
$enderExped->appendChild($cPais);
$enderExped->appendChild($xPais);
//----------------------------------------- enderExped

//----------------------------------------- enderReceb
$xLgr			= $dom->createElement("xLgr",$str);
$nro			= $dom->createElement("nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$CEP			= $dom->createElement("CEP",$str);
$UF				= $dom->createElement("UF",$str);
$cPais			= $dom->createElement("cPais",$str);
$xPais			= $dom->createElement("xPais",$str);

$enderReceb->appendChild($xLgr);
$enderReceb->appendChild($nro);
$enderReceb->appendChild($xCpl);
$enderReceb->appendChild($xBairro);
$enderReceb->appendChild($cMun);
$enderReceb->appendChild($xMun);
$enderReceb->appendChild($CEP);
$enderReceb->appendChild($UF);
$enderReceb->appendChild($cPais);
$enderReceb->appendChild($xPais);
//----------------------------------------- enderReceb

//----------------------------------------- enderDest
$xLgr			= $dom->createElement("xLgr",$str);
$nro			= $dom->createElement("nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$CEP			= $dom->createElement("CEP",$str);
$UF				= $dom->createElement("UF",$str);
$cPais			= $dom->createElement("cPais",$str);
$xPais			= $dom->createElement("xPais",$str);

$enderDest->appendChild($xLgr);
$enderDest->appendChild($nro);
$enderDest->appendChild($xCpl);
$enderDest->appendChild($xBairro);
$enderDest->appendChild($cMun);
$enderDest->appendChild($xMun);
$enderDest->appendChild($CEP);
$enderDest->appendChild($UF);
$enderDest->appendChild($cPais);
$enderDest->appendChild($xPais);
//----------------------------------------- enderDest

//----------------------------------------- locEnt
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$xNome			= $dom->createElement("xNome",$str);
$xLgr			= $dom->createElement("xLgr",$str);
$nro			= $dom->createElement("nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$UF				= $dom->createElement("UF",$str);

$locEnt->appendChild($CNPJ);
$locEnt->appendChild($CPF);
$locEnt->appendChild($xNome);
$locEnt->appendChild($xLgr);
$locEnt->appendChild($nro);
$locEnt->appendChild($xCpl);
$locEnt->appendChild($xBairro);
$locEnt->appendChild($cMun);
$locEnt->appendChild($xMun);
$locEnt->appendChild($UF);
//----------------------------------------- locEnt

//----------------------------------------- Comp
$xNome			= $dom->createElement("xNome",$str);
$vComp			= $dom->createElement("vComp",$str);

$Comp->appendChild($xNome);
$Comp->appendChild($vComp);
//----------------------------------------- Comp

//----------------------------------------- ICMS
$ICMS00			= $dom->createElement("ICMS00");
$ICMS20			= $dom->createElement("ICMS20");
$ICMS45			= $dom->createElement("ICMS45");
$ICMS60			= $dom->createElement("ICMS60");
$ICMS90			= $dom->createElement("ICMS90");
$ICMSOutraUF	= $dom->createElement("ICMSOutraUF");
$ICMSSN			= $dom->createElement("ICMSSN");

$ICMS->appendChild($ICMS00);
$ICMS->appendChild($ICMS20);
$ICMS->appendChild($ICMS45);
$ICMS->appendChild($ICMS60);
$ICMS->appendChild($ICMS90);
$ICMS->appendChild($ICMSOutraUF);
$ICMS->appendChild($ICMSSN);
//----------------------------------------- ICMS

//----------------------------------------- infCarga
$vCarga			= $dom->createElement("vCarga",$str);
$proPred		= $dom->createElement("proPred",$str);
$xOutCat		= $dom->createElement("xOutCat",$str);
$infQ			= $dom->createElement("infQ");

$infCarga->appendChild($vCarga);
$infCarga->appendChild($proPred);
$infCarga->appendChild($xOutCat);
$infCarga->appendChild($infQ);
//----------------------------------------- infCarga

//----------------------------------------- contQt
$nCont			= $dom->createElement("nCont",$str);
$lacContQt		= $dom->createElement("lacContQt");
$dPrev			= $dom->createElement("dPrev",$str);

$contQt->appendChild($nCont);
$contQt->appendChild($lacContQt);
$contQt->appendChild($dPrev);
//----------------------------------------- contQt

//----------------------------------------- docAnt
$emiDocAnt		= $dom->createElement("emiDocAnt");

$docAnt->appendChild($emiDocAnt);
//----------------------------------------- docAnt

//----------------------------------------- seg
$respSeg		= $dom->createElement("respSeg",$str);
$xSeg			= $dom->createElement("xSeg",$str);
$nApol			= $dom->createElement("nApol",$str);
$nAver			= $dom->createElement("nAver",$str);
$vCarga			= $dom->createElement("vCarga",$str);

$seg->appendChild($respSeg);
$seg->appendChild($xSeg);
$seg->appendChild($nApol);
$seg->appendChild($nAver);
$seg->appendChild($vCarga);
//----------------------------------------- seg

//----------------------------------------- infModal
//$any			= $dom->createElement("xs:CTeModalRodoviario_v1.00",$str);

//$infModal->setAttribute("versaoModal",$str);
//$infModal->appendChild($any);
//----------------------------------------- infModal

//----------------------------------------- peri
$nONU			= $dom->createElement("nONU",$str);
$xNomeAE		= $dom->createElement("xNomeAE",$str);
$xClaRisco		= $dom->createElement("xClaRisco",$str);
$grEmb			= $dom->createElement("grEmb",$str);
$qTotProd		= $dom->createElement("qTotProd",$str);
$qVolTipo		= $dom->createElement("qVolTipo",$str);
$pontoFulgor	= $dom->createElement("pontoFulgor",$str);

$peri->appendChild($nONU);
$peri->appendChild($xNomeAE);
$peri->appendChild($xClaRisco);
$peri->appendChild($grEmb);
$peri->appendChild($qTotProd);
$peri->appendChild($qVolTipo);
$peri->appendChild($pontoFulgor);
//----------------------------------------- peri

//----------------------------------------- veicNovos
$chassi			= $dom->createElement("chassi",$str);
$cCor			= $dom->createElement("cCor",$str);
$xCor			= $dom->createElement("xCor",$str);
$cMod			= $dom->createElement("cMod",$str);
$vUnit			= $dom->createElement("vUnit",$str);
$vFrete			= $dom->createElement("vFrete",$str);

$veicNovos->appendChild($chassi);
$veicNovos->appendChild($cCor);
$veicNovos->appendChild($xCor);
$veicNovos->appendChild($cMod);
$veicNovos->appendChild($vUnit);
$veicNovos->appendChild($vFrete);
//----------------------------------------- veicNovos

//----------------------------------------- cobr
$fat			= $dom->createElement("fat");
$dup			= $dom->createElement("dup");

$cobr->appendChild($fat);
$cobr->appendChild($dup);
//----------------------------------------- cobr

//----------------------------------------- infCteSub
$chCte			= $dom->createElement("chCte",$str);
$tomaICMS		= $dom->createElement("tomaICMS");
$tomaNaoICMS	= $dom->createElement("tomaNaoICMS");

$infCteSub->appendChild($chCte);
$infCteSub->appendChild($tomaICMS);
$infCteSub->appendChild($tomaNaoICMS);
//----------------------------------------- infCteSub

//----------------------------------------- vPresComp
$vTPrest		= $dom->createElement("vTPrest",$str);
$compComp		= $dom->createElement("compComp");

$vPresComp->appendChild($vTPrest);
$vPresComp->appendChild($compComp);
//----------------------------------------- vPresComp

//----------------------------------------- impComp
$ICMSComp		= $dom->createElement("ICMSComp");
$infAdFisco		= $dom->createElement("infAdFisco",$str);

$impComp->appendChild($ICMSComp);
$impComp->appendChild($infAdFisco);
//----------------------------------------- impComp



//************************************* NIVEL 4 *****************************************/
//----------------------------------------- enderToma
$xLgr			= $dom->createElement("xLgr",$str);
$nro			= $dom->createElement("nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$CEP			= $dom->createElement("CEP",$str);
$UF				= $dom->createElement("UF",$str);
$cPais			= $dom->createElement("cPais",$str);
$xPais			= $dom->createElement("xPais",$str);

$enderToma->appendChild($xLgr);
$enderToma->appendChild($nro);
$enderToma->appendChild($xCpl);
$enderToma->appendChild($xBairro);
$enderToma->appendChild($cMun);
$enderToma->appendChild($xMun);
$enderToma->appendChild($CEP);
$enderToma->appendChild($UF);
$enderToma->appendChild($cPais);
$enderToma->appendChild($xPais);
//----------------------------------------- enderToma

//----------------------------------------- pass
$xPass			= $dom->createElement("xPass",$str);

$pass->appendChild($xPass);
//----------------------------------------- pass

//----------------------------------------- semData
$tpPer			= $dom->createElement("tpPer",$str);

$semData->appendChild($tpPer);
//----------------------------------------- semData

//----------------------------------------- comData
$tpPer			= $dom->createElement("tpPer",$str);
$dProg			= $dom->createElement("dProg",$str);

$comData->appendChild($tpPer);
$comData->appendChild($dProg);
//----------------------------------------- comData

//----------------------------------------- noPeriodo
$tpPer			= $dom->createElement("tpPer",$str);
$dIni			= $dom->createElement("dIni",$str);
$dFim			= $dom->createElement("dFim",$str);

$noPeriodo->appendChild($tpPer);
$noPeriodo->appendChild($dIni);
$noPeriodo->appendChild($dFim);
//----------------------------------------- noPeriodo

//----------------------------------------- semHora
$tpHor			= $dom->createElement("tpHor",$str);

$semHora->appendChild($tpHor);
//----------------------------------------- semHora

//----------------------------------------- comHora
$tpHor			= $dom->createElement("tpHor",$str);
$hProg			= $dom->createElement("hProg",$str);

$comHora->appendChild($tpHor);
$comHora->appendChild($hProg);
//----------------------------------------- comHora

//----------------------------------------- noInter
$tpHor			= $dom->createElement("tpHor",$str);
$hIni			= $dom->createElement("hIni",$str);
$hFim			= $dom->createElement("hFim",$str);

$noInter->appendChild($tpHor);
$noInter->appendChild($hIni);
$noInter->appendChild($hFim);
//----------------------------------------- noInter

//----------------------------------------- locRet
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$xNome			= $dom->createElement("xNome",$str);
$xLgr			= $dom->createElement("xLgr",$str);
$Nro			= $dom->createElement("Nro",$str);
$xCpl			= $dom->createElement("xCpl",$str);
$xBairro		= $dom->createElement("xBairro",$str);
$cMun			= $dom->createElement("cMun",$str);
$xMun			= $dom->createElement("xMun",$str);
$UF				= $dom->createElement("UF",$str);

$locRet->appendChild($CNPJ);
$locRet->appendChild($CPF);
$locRet->appendChild($xNome);
$locRet->appendChild($xLgr);
$locRet->appendChild($Nro);
$locRet->appendChild($xCpl);
$locRet->appendChild($xBairro);
$locRet->appendChild($cMun);
$locRet->appendChild($xMun);
$locRet->appendChild($UF);
//----------------------------------------- locRet

//----------------------------------------- ICMS00
$CST			= $dom->createElement("CST",$str);
$vBC			= $dom->createElement("vBC",$str);
$pICMS			= $dom->createElement("pICMS",$str);
$vICMS			= $dom->createElement("vICMS",$str);

$ICMS00->appendChild($CST);
$ICMS00->appendChild($vBC);
$ICMS00->appendChild($pICMS);
$ICMS00->appendChild($vICMS);
//----------------------------------------- ICMS00

//----------------------------------------- ICMS20
$CST			= $dom->createElement("CST",$str);
$pRedBC			= $dom->createElement("pRedBC",$str);
$vBC			= $dom->createElement("vBC",$str);
$pICMS			= $dom->createElement("pICMS",$str);
$vICMS			= $dom->createElement("vICMS",$str);

$ICMS20->appendChild($CST);
$ICMS20->appendChild($pRedBC);
$ICMS20->appendChild($vBC);
$ICMS20->appendChild($pICMS);
$ICMS20->appendChild($vICMS);
//----------------------------------------- ICMS20

//----------------------------------------- ICMS45
$CST			= $dom->createElement("CST",$str);

$ICMS45->appendChild($CST);
//----------------------------------------- ICMS45

//----------------------------------------- ICMS60
$CST			= $dom->createElement("CST",$str);
$vBCSTRet		= $dom->createElement("vBCSTRet",$str);
$vICMSSTRet		= $dom->createElement("vICMSSTRet",$str);
$pICMSSTRet		= $dom->createElement("pICMSSTRet",$str);
$vCred			= $dom->createElement("vCred",$str);

$ICMS60->appendChild($CST);
$ICMS60->appendChild($vBCSTRet);
$ICMS60->appendChild($vICMSSTRet);
$ICMS60->appendChild($pICMSSTRet);
$ICMS60->appendChild($vCred);
//----------------------------------------- ICMS60

//----------------------------------------- ICMS90
$CST			= $dom->createElement("CST",$str);
$pRedBC			= $dom->createElement("pRedBC",$str);
$vBC			= $dom->createElement("vBC",$str);
$pICMS			= $dom->createElement("pICMS",$str);
$vICMS			= $dom->createElement("vICMS",$str);
$vCred			= $dom->createElement("vCred",$str);

$ICMS90->appendChild($CST);
$ICMS90->appendChild($pRedBC);
$ICMS90->appendChild($vBC);
$ICMS90->appendChild($pICMS);
$ICMS90->appendChild($vICMS);
$ICMS90->appendChild($vCred);
//----------------------------------------- ICMS90

//----------------------------------------- ICMSOutraUF
$CST			= $dom->createElement("CST",$str);
$pRedBCOutraUF	= $dom->createElement("pRedBCOutraUF",$str);
$vBCOutraUF		= $dom->createElement("vBCOutraUF",$str);
$pICMSOutraUF	= $dom->createElement("pICMSOutraUF",$str);
$vICMSOutraUF	= $dom->createElement("vICMSOutraUF",$str);

$ICMSOutraUF->appendChild($CST);
$ICMSOutraUF->appendChild($pRedBCOutraUF);
$ICMSOutraUF->appendChild($vBCOutraUF);
$ICMSOutraUF->appendChild($pICMSOutraUF);
$ICMSOutraUF->appendChild($vICMSOutraUF);
//----------------------------------------- ICMSOutraUF

//----------------------------------------- ICMSSN
$indSN			= $dom->createElement("indSN",$str);

$ICMSSN->appendChild($indSN);
//----------------------------------------- ICMSSN

//----------------------------------------- infQ
$cUnid			= $dom->createElement("cUnid",$str);
$tpMed			= $dom->createElement("tpMed",$str);
$qCarga			= $dom->createElement("qCarga",$str);

$infQ->appendChild($cUnid);
$infQ->appendChild($tpMed);
$infQ->appendChild($qCarga);
//----------------------------------------- infQ

//----------------------------------------- lacContQt
$nLacre			= $dom->createElement("nLacre",$str);

$lacContQt->appendChild($nLacre);
//----------------------------------------- lacContQt

//----------------------------------------- emiDocAnt
$CNPJ			= $dom->createElement("CNPJ",$str);
$CPF			= $dom->createElement("CPF",$str);
$IE				= $dom->createElement("IE",$str);
$UF				= $dom->createElement("UF",$str);
$xNome			= $dom->createElement("xNome",$str);
$idDocAnt		= $dom->createElement("idDocAnt");

$emiDocAnt->appendChild($CNPJ);
$emiDocAnt->appendChild($CPF);
$emiDocAnt->appendChild($IE);
$emiDocAnt->appendChild($UF);
$emiDocAnt->appendChild($xNome);
$emiDocAnt->appendChild($idDocAnt);
//----------------------------------------- emiDocAnt

//----------------------------------------- fat
$nFat			= $dom->createElement("nFat",$str);
$vOrig			= $dom->createElement("vOrig",$str);
$vDesc			= $dom->createElement("vDesc",$str);
$vLiq			= $dom->createElement("vLiq",$str);

$fat->appendChild($nFat);
$fat->appendChild($vOrig);
$fat->appendChild($vDesc);
$fat->appendChild($vLiq);
//----------------------------------------- fat

//----------------------------------------- dup
$nDup			= $dom->createElement("nDup",$str);
$dVenc			= $dom->createElement("dVenc",$str);
$vDup			= $dom->createElement("vDup",$str);

$dup->appendChild($nDup);
$dup->appendChild($dVenc);
$dup->appendChild($vDup);
//----------------------------------------- dup

//----------------------------------------- tomaICMS
$refNFe			= $dom->createElement("refNFe",$str);
$refNF			= $dom->createElement("refNF",$str);
$refCte			= $dom->createElement("refCte",$str);

$tomaICMS->appendChild($refNFe);
$tomaICMS->appendChild($refNF);
$tomaICMS->appendChild($refCte);
//----------------------------------------- tomaICMS

//----------------------------------------- tomaNaoICMS
$refCteAnu		= $dom->createElement("refCteAnu",$str);

$tomaNaoICMS->appendChild($refCteAnu);
//----------------------------------------- tomaNaoICMS

//----------------------------------------- compComp
$xNome			= $dom->createElement("xNome",$str);
$vComp			= $dom->createElement("vComp",$str);

$compComp->appendChild($xNome);
$compComp->appendChild($vComp);
//----------------------------------------- compComp

//----------------------------------------- ICMSComp
$ICMS00			= $dom->createElement("ICMS00",$str);
$ICMS20			= $dom->createElement("ICMS20",$str);
$ICMS45			= $dom->createElement("ICMS45",$str);
$ICMS60			= $dom->createElement("ICMS60",$str);
$ICMS90			= $dom->createElement("ICMS90",$str);
$ICMSOutraUF	= $dom->createElement("ICMSOutraUF",$str);
$ICMSSN			= $dom->createElement("ICMSSN",$str);

$ICMSComp->appendChild($ICMS00);
$ICMSComp->appendChild($ICMS20);
$ICMSComp->appendChild($ICMS45);
$ICMSComp->appendChild($ICMS60);
$ICMSComp->appendChild($ICMS90);
$ICMSComp->appendChild($ICMSOutraUF);
$ICMSComp->appendChild($ICMSSN);
//----------------------------------------- ICMSComp


//************************************* NIVEL 5 *****************************************/
//----------------------------------------- idDocAnt
$idDocAntPap	= $dom->createElement("idDocAntPap");
$idDocAntEle	= $dom->createElement("idDocAntEle");

$idDocAnt->appendChild($idDocAntPap);
$idDocAnt->appendChild($idDocAntEle);
//----------------------------------------- idDocAnt

//----------------------------------------- refNF
$CNPJ			= $dom->createElement("CNPJ",$str);
$mod			= $dom->createElement("mod",$str);
$serie			= $dom->createElement("serie",$str);
$subserie		= $dom->createElement("subserie",$str);
$nro			= $dom->createElement("nro",$str);
$valor			= $dom->createElement("valor",$str);
$dEmi			= $dom->createElement("dEmi",$str);

$refNF->appendChild($CNPJ);
$refNF->appendChild($mod);
$refNF->appendChild($serie);
$refNF->appendChild($subserie);
$refNF->appendChild($nro);
$refNF->appendChild($valor);
$refNF->appendChild($dEmi);
//----------------------------------------- refNF

//----------------------------------------- ICMS00
$CST			= $dom->createElement("CST",$str);
$vBC			= $dom->createElement("vBC",$str);
$pICMS			= $dom->createElement("pICMS",$str);
$vICMS			= $dom->createElement("vICMS",$str);

$ICMS00->appendChild($CST);
$ICMS00->appendChild($vBC);
$ICMS00->appendChild($pICMS);
$ICMS00->appendChild($vICMS);
//----------------------------------------- ICMS00

//----------------------------------------- ICMS20
$CST			= $dom->createElement("CST",$str);
$pRedBC			= $dom->createElement("pRedBC",$str);
$vBC			= $dom->createElement("vBC",$str);
$pICMS			= $dom->createElement("pICMS",$str);
$vICMS			= $dom->createElement("vICMS",$str);

$ICMS20->appendChild($CST);
$ICMS20->appendChild($pRedBC);
$ICMS20->appendChild($vBC);
$ICMS20->appendChild($pICMS);
$ICMS20->appendChild($vICMS);
//----------------------------------------- ICMS20

//----------------------------------------- ICMS45
$CST			= $dom->createElement("CST",$str);

$ICMS45->appendChild($CST);
//----------------------------------------- ICMS45

//----------------------------------------- ICMS60
$CST			= $dom->createElement("CST",$str);
$vBCSTRet		= $dom->createElement("vBCSTRet",$str);
$vICMSSTRet		= $dom->createElement("vICMSSTRet",$str);
$pICMSSTRet		= $dom->createElement("pICMSSTRet",$str);
$vCred			= $dom->createElement("vCred",$str);

$ICMS60->appendChild($CST);
$ICMS60->appendChild($vBCSTRet);
$ICMS60->appendChild($vICMSSTRet);
$ICMS60->appendChild($pICMSSTRet);
$ICMS60->appendChild($vCred);
//----------------------------------------- ICMS60

//----------------------------------------- ICMS90
$CST			= $dom->createElement("CST",$str);
$pRedBC			= $dom->createElement("pRedBC",$str);
$vBC			= $dom->createElement("vBC",$str);
$pICMS			= $dom->createElement("pICMS",$str);
$vICMS			= $dom->createElement("vICMS",$str);
$vCred			= $dom->createElement("vCred",$str);

$ICMS90->appendChild($CST);
$ICMS90->appendChild($pRedBC);
$ICMS90->appendChild($vBC);
$ICMS90->appendChild($pICMS);
$ICMS90->appendChild($vICMS);
$ICMS90->appendChild($vCred);
//----------------------------------------- ICMS90

//----------------------------------------- ICMSOutraUF
$CST			= $dom->createElement("CST",$str);
$pRedBCOutraUF	= $dom->createElement("pRedBCOutraUF",$str);
$vBCOutraUF		= $dom->createElement("vBCOutraUF",$str);
$pICMSOutraUF	= $dom->createElement("pICMSOutraUF",$str);
$vICMSOutraUF	= $dom->createElement("vICMSOutraUF",$str);

$ICMSOutraUF->appendChild($CST);
$ICMSOutraUF->appendChild($pRedBCOutraUF);
$ICMSOutraUF->appendChild($vBCOutraUF);
$ICMSOutraUF->appendChild($pICMSOutraUF);
$ICMSOutraUF->appendChild($vICMSOutraUF);
//----------------------------------------- ICMSOutraUF

//----------------------------------------- ICMSSN
$indSN			= $dom->createElement("indSN",$str);

$ICMSSN->appendChild($indSN);
//----------------------------------------- ICMSSN


//************************************* NIVEL 6 *****************************************/
//----------------------------------------- idDocAntPap
$tpDoc			= $dom->createElement("tpDoc",$str);
$serie			= $dom->createElement("serie",$str);
$subser			= $dom->createElement("subser",$str);
$nDoc			= $dom->createElement("nDoc",$str);
$dEmi			= $dom->createElement("dEmi",$str);

$idDocAntPap->appendChild($tpDoc);
$idDocAntPap->appendChild($serie);
$idDocAntPap->appendChild($subser);
$idDocAntPap->appendChild($nDoc);
$idDocAntPap->appendChild($dEmi);
//----------------------------------------- idDocAntPap

//----------------------------------------- idDocAntEle
$chave			= $dom->createElement("chave",$str);

$idDocAntEle->appendChild($chave);
//----------------------------------------- idDocAntEle



$xml = $dom->saveXML();
$dom->save("cte_teste.xml");

?>