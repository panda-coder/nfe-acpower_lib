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
$infCte			= $dom->createElement("infCte");					// 1

$infCte->setAttribute("versao","1.04");								// 2
$infCte->setAttribute("Id","INFORMAR_ID_CTE");						// 3

$CTe->appendChild($infCte);
//----------------------------------------- CTe





//************************************* NIVEL 1 *****************************************/
//----------------------------------------- infCte
$ide			= $dom->createElement("ide");						// 4
$compl			= $dom->createElement("compl");						// 59
$emit			= $dom->createElement("emit");						// 97
$rem			= $dom->createElement("rem");						// 112
$exped			= $dom->createElement("exped");						// 167
$receb			= $dom->createElement("receb");						// 185
$dest			= $dom->createElement("dest");						// 203
$vPrest			= $dom->createElement("vPrest");					// 233
$imp			= $dom->createElement("imp");						// 239
$infCTeNorm		= $dom->createElement("infCTeNorm");				// 276 - CONDICIONAL
$infCteComp		= $dom->createElement("infCteComp");				// 355 - CONDICIONAL
$infCteAnu		= $dom->createElement("infCteAnu");					// 399 - CONDICIONAL

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
$cUF			= $dom->createElement("cUF",$str);					// 5
$cCT			= $dom->createElement("cCT",$str);					// 6
$CFOP			= $dom->createElement("CFOP",$str);					// 7
$natOp			= $dom->createElement("natOp",$str);				// 8
$forPag			= $dom->createElement("forPag",$str);				// 9
$mod			= $dom->createElement("mod",$str);					// 10
$serie			= $dom->createElement("serie",$str);				// 11
$nCT			= $dom->createElement("nCT",$str);					// 12
$dhEmi			= $dom->createElement("dhEmi",$str);				// 13
$tpImp			= $dom->createElement("tpImp",$str);				// 14
$tpEmis			= $dom->createElement("tpEmis",$str);				// 15
$cDV			= $dom->createElement("cDV",$str);					// 16
$tpAmb			= $dom->createElement("tpAmb",$str);				// 17
$tpCTe			= $dom->createElement("tpCTe",$str);				// 18
$procEmi		= $dom->createElement("procEmi",$str);				// 19
$verProc		= $dom->createElement("verProc",$str);				// 20
$refCTE			= $dom->createElement("refCTE",$str);				// 21
$cMunEnv		= $dom->createElement("cMunEnv",$str);				// 22
$xMunEnv		= $dom->createElement("xMunEnv",$str);				// 23
$UFEnv			= $dom->createElement("UFEnv",$str);				// 24
$modal			= $dom->createElement("modal",$str);				// 25
$tpServ			= $dom->createElement("tpServ",$str);				// 26
$cMunIni		= $dom->createElement("cMunIni",$str);				// 27
$xMunIni		= $dom->createElement("xMunIni",$str);				// 28
$UFIni			= $dom->createElement("UFIni",$str);				// 29
$cMunFim		= $dom->createElement("cMunFim",$str);				// 30
$xMunFim		= $dom->createElement("xMunFim",$str);				// 31
$UFFim			= $dom->createElement("UFFim",$str);				// 32
$retira			= $dom->createElement("retira",$str);				// 33
$xDetRetira		= $dom->createElement("xDetRetira",$str);			// 34
$toma03			= $dom->createElement("toma03");					// 35 - CONDICIONAL
$toma4			= $dom->createElement("toma4");						// 37 - CONDICIONAL
$dhCont			= $dom->createElement("dhCont",$str);				// 57			
$xJust			= $dom->createElement("xJust",$str);				// 58

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
$xCaracAd		= $dom->createElement("xCaracAd",$str);				// 60
$xCaracSer		= $dom->createElement("xCaracSer",$str);			// 61
$xEmi			= $dom->createElement("xEmi",$str);					// 62
$fluxo			= $dom->createElement("fluxo");						// 63
$Entrega		= $dom->createElement("Entrega");					// 69
$origCalc		= $dom->createElement("origCalc",$str);				// 88
$destCalc		= $dom->createElement("destCalc",$str);				// 89
$xObs			= $dom->createElement("xObs",$str);					// 90
$ObsCont		= $dom->createElement("ObsCont");					// 91
$ObsFisco		= $dom->createElement("ObsFisco");					// 94

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
$CNPJ			= $dom->createElement("CNPJ",$str);					// 98
$IE				= $dom->createElement("IE",$str);					// 99
$xNome			= $dom->createElement("xNome",$str);				// 100
$xFant			= $dom->createElement("xFant",$str);				// 101
$enderEmit		= $dom->createElement("enderEmit");					// 102

$emit->appendChild($CNPJ);
$emit->appendChild($IE);
$emit->appendChild($xNome);
$emit->appendChild($xFant);
$emit->appendChild($enderEmit);
//----------------------------------------- emit

//----------------------------------------- rem
$CNPJ			= $dom->createElement("CNPJ",$str);					// 113 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 114 - CONDICIONAL
$IE				= $dom->createElement("IE",$str);					// 115
$xNome			= $dom->createElement("xNome",$str);				// 116
$xFant			= $dom->createElement("xFant",$str);				// 117
$fone			= $dom->createElement("fone",$str);					// 118
$enderReme		= $dom->createElement("enderReme");					// 119
$email			= $dom->createElement("email",$str);				// 130
$infNF			= $dom->createElement("infNF");						// 131 - CONDICIONAL
$infNFe			= $dom->createElement("infNFe");					// 158 - CONDICIONAL
$infOutros		= $dom->createElement("infOutros");					// 161 - CONDICIONAL

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
$CNPJ			= $dom->createElement("CNPJ",$str);					// 168 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 169 - CONDICIONAL
$IE				= $dom->createElement("IE",$str);					// 170
$xNome			= $dom->createElement("xNome",$str);				// 171
$fone			= $dom->createElement("fone",$str);					// 172
$enderExped		= $dom->createElement("enderExped");				// 173
$email			= $dom->createElement("email",$str);				// 184

$exped->appendChild($CNPJ);
$exped->appendChild($CPF);
$exped->appendChild($IE);
$exped->appendChild($xNome);
$exped->appendChild($fone);
$exped->appendChild($enderExped);
$exped->appendChild($email);
//----------------------------------------- exped

//----------------------------------------- receb
$CNPJ			= $dom->createElement("CNPJ",$str);					// 186 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 187 - CONDICIONAL
$IE				= $dom->createElement("IE",$str);					// 188
$xNome			= $dom->createElement("xNome",$str);				// 189
$fone			= $dom->createElement("fone",$str);					// 190
$enderReceb		= $dom->createElement("enderReceb");				// 191
$email 			= $dom->createElement("email",$str);				// 202

$receb->appendChild($CNPJ);
$receb->appendChild($CPF);
$receb->appendChild($IE);
$receb->appendChild($xNome);
$receb->appendChild($fone);
$receb->appendChild($enderReceb);
$receb->appendChild($email);
//----------------------------------------- receb

//----------------------------------------- dest
$CNPJ			= $dom->createElement("CNPJ",$str);					// 204 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 205 - CONDICIONAL
$IE				= $dom->createElement("IE",$str);					// 206
$xNome			= $dom->createElement("xNome",$str);				// 207
$fone			= $dom->createElement("fone",$str);					// 208
$ISUF			= $dom->createElement("ISUF",$str);					// 209
$enderDest		= $dom->createElement("enderDest");					// 210
$email			= $dom->createElement("email",$str);				// 221
$locEnt			= $dom->createElement("locEnt");					// 222

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
$vTPrest		= $dom->createElement("vTPrest",$str);				// 234
$vRec			= $dom->createElement("vRec",$str);					// 235
$Comp			= $dom->createElement("Comp");						// 236

$vPrest->appendChild($vTPrest);
$vPrest->appendChild($vRec);
$vPrest->appendChild($Comp);
//----------------------------------------- vPrest

//----------------------------------------- imp
$ICMS			= $dom->createElement("ICMS");						// 240
$infAdFisco 	= $dom->createElement("infAdFisco",$str);			// 275

$imp->appendChild($ICMS);
$imp->appendChild($infAdFisco );
//----------------------------------------- imp

//----------------------------------------- infCTeNorm
$infCarga		= $dom->createElement("infCarga");					// 277
$contQt			= $dom->createElement("contQt");					// 285
$docAnt			= $dom->createElement("docAnt");					// 290
$seg			= $dom->createElement("seg");						// 306
$infModal		= $dom->createElement("infModal");					// 312
$peri			= $dom->createElement("peri");						// 315
$veicNovos		= $dom->createElement("veicNovos");					// 323
$cobr			= $dom->createElement("cobr");						// 330
$infCteSub		= $dom->createElement("infCteSub");					// 340

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
$chave			= $dom->createElement("chave",$str);				// 356
$vPresComp		= $dom->createElement("vPresComp");					// 357
$impComp		= $dom->createElement("impComp");					// 362

$infCteComp->appendChild($chave);
$infCteComp->appendChild($vPresComp);
$infCteComp->appendChild($impComp);
//----------------------------------------- infCteComp

//----------------------------------------- infCteAnu
$chCte			= $dom->createElement("chCte",$str);				// 400
$dEmi			= $dom->createElement("dEmi",$str);					// 401

$infCteAnu->appendChild($chCte);
$infCteAnu->appendChild($dEmi);
//----------------------------------------- infCteAnu






//************************************* NIVEL 3 *****************************************/
//----------------------------------------- toma03
$toma			= $dom->createElement("toma",$str);					// 36

$toma03->appendChild($toma);
//----------------------------------------- toma03

//----------------------------------------- toma4
$toma			= $dom->createElement("toma",$str);					// 38
$CNPJ			= $dom->createElement("CNPJ",$str);					// 39 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 40 - CONDICIONAL
$IE				= $dom->createElement("IE",$str);					// 41
$xNome			= $dom->createElement("xNome",$str);				// 42
$xFant			= $dom->createElement("xFant",$str);				// 43
$fone			= $dom->createElement("fone",$str);					// 44
$enderToma		= $dom->createElement("enderToma");					// 45
$email			= $dom->createElement("email",$str);				// 56

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
$xOrig			= $dom->createElement("xOrig",$str);				// 64
$pass			= $dom->createElement("pass");						// 65
$xDest			= $dom->createElement("xDest",$str);				// 67
$xRota			= $dom->createElement("xRota",$str);				// 68

$fluxo->appendChild($xOrig);
$fluxo->appendChild($pass);
$fluxo->appendChild($xDest);
$fluxo->appendChild($xRota);
//----------------------------------------- fluxo

//----------------------------------------- Entrega
$semData		= $dom->createElement("semData");					// 70 - CONDICIONAL
$comData		= $dom->createElement("comData");					// 72 - CONDICIONAL
$noPeriodo		= $dom->createElement("noPeriodo");					// 75 - CONDICIONAL
$semHora		= $dom->createElement("semHora");					// 79 - CONDICIONAL
$comHora		= $dom->createElement("comHora");					// 81 - CONDICIONAL
$noInter		= $dom->createElement("noInter");					// 84 - CONDICIONAL

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
//xCampo															// 92 - ATRIBUTO
$xTexto			= $dom->createElement("xTexto",$str);				// 93

$ObsCont->setAttribute("xCampo",$str);
$ObsCont->appendChild($xTexto);
//----------------------------------------- ObsCont

//----------------------------------------- ObsFisco
//xCampo															// 95 - ATRIBUTO
$xTexto			= $dom->createElement("xTexto",$str);				// 96

$ObsFisco->setAttribute("xCampo",$str);
$ObsFisco->appendChild($xTexto);
//----------------------------------------- ObsFisco

//----------------------------------------- enderEmit
$xLgr			= $dom->createElement("xLgr",$str);					// 103
$nro			= $dom->createElement("nro",$str);					// 104
$xCpl			= $dom->createElement("xCpl",$str);					// 105
$xBairro		= $dom->createElement("xBairro",$str);				// 106
$cMun			= $dom->createElement("cMun",$str);					// 107
$xMun			= $dom->createElement("xMun",$str);					// 108
$CEP			= $dom->createElement("CEP",$str);					// 109
$UF				= $dom->createElement("UF",$str);					// 110
$fone			= $dom->createElement("fone",$str);					// 111

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
$xLgr			= $dom->createElement("xLgr",$str);					// 120
$nro			= $dom->createElement("nro",$str);					// 121
$xCpl			= $dom->createElement("xCpl",$str);					// 122
$xBairro		= $dom->createElement("xBairro",$str);				// 123
$cMun			= $dom->createElement("cMun",$str);					// 124
$xMun			= $dom->createElement("xMun",$str);					// 125
$CEP			= $dom->createElement("CEP",$str);					// 126
$UF				= $dom->createElement("UF",$str);					// 127
$cPais			= $dom->createElement("cPais",$str);				// 128
$xPais			= $dom->createElement("xPais",$str);				// 129

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
$nRoma			= $dom->createElement("nRoma",$str);				// 132
$nPed			= $dom->createElement("nPed",$str);					// 133
$mod			= $dom->createElement("mod",$str);					// 134
$serie			= $dom->createElement("serie",$str);				// 135
$nDoc			= $dom->createElement("nDoc",$str);					// 136
$dEmi			= $dom->createElement("dEmi",$str);					// 137
$vBC			= $dom->createElement("vBC",$str);					// 138
$vICMS			= $dom->createElement("vICMS",$str);				// 139
$vBCST			= $dom->createElement("vBCST",$str);				// 140
$vST			= $dom->createElement("vST",$str);					// 141
$vProd			= $dom->createElement("vProd",$str);				// 142
$vNF			= $dom->createElement("vNF",$str);					// 143
$nCFOP			= $dom->createElement("nCFOP",$str);				// 144
$nPeso			= $dom->createElement("nPeso",$str);				// 145
$PIN			= $dom->createElement("PIN",$str);					// 146
$locRet			= $dom->createElement("locRet");					// 147

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
$Chave			= $dom->createElement("Chave",$str);				// 159
$PIN			= $dom->createElement("PIN",$str);					// 160
$tpDoc			= $dom->createElement("tpDoc",$str);				// 162
$descOutros		= $dom->createElement("descOutros",$str);			// 163
$nDoc			= $dom->createElement("nDoc",$str);					// 164
$dEmi			= $dom->createElement("dEmi",$str);					// 165
$vDocFisc		= $dom->createElement("vDocFisc",$str);				// 166

$infNFe->appendChild($Chave);
$infNFe->appendChild($PIN);
$infNFe->appendChild($tpDoc);
$infNFe->appendChild($descOutros);
$infNFe->appendChild($nDoc);
$infNFe->appendChild($dEmi);
$infNFe->appendChild($vDocFisc);
//----------------------------------------- infNFe

//----------------------------------------- enderExped
$xLgr			= $dom->createElement("xLgr",$str);					// 174
$nro			= $dom->createElement("nro",$str);					// 175
$xCpl			= $dom->createElement("xCpl",$str);					// 176
$xBairro		= $dom->createElement("xBairro",$str);				// 177
$cMun			= $dom->createElement("cMun",$str);					// 178
$xMun			= $dom->createElement("xMun",$str);					// 179
$CEP			= $dom->createElement("CEP",$str);					// 180
$UF				= $dom->createElement("UF",$str);					// 181
$cPais			= $dom->createElement("cPais",$str);				// 182
$xPais			= $dom->createElement("xPais",$str);				// 183

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
$xLgr			= $dom->createElement("xLgr",$str);					// 192
$nro			= $dom->createElement("nro",$str);					// 193
$xCpl			= $dom->createElement("xCpl",$str);					// 194
$xBairro		= $dom->createElement("xBairro",$str);				// 195
$cMun			= $dom->createElement("cMun",$str);					// 196
$xMun			= $dom->createElement("xMun",$str);					// 197
$CEP			= $dom->createElement("CEP",$str);					// 198
$UF				= $dom->createElement("UF",$str);					// 199
$cPais			= $dom->createElement("cPais",$str);				// 200
$xPais			= $dom->createElement("xPais",$str);				// 201

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
$xLgr			= $dom->createElement("xLgr",$str);					// 211
$nro			= $dom->createElement("nro",$str);					// 212
$xCpl			= $dom->createElement("xCpl",$str);					// 213
$xBairro		= $dom->createElement("xBairro",$str);				// 214
$cMun			= $dom->createElement("cMun",$str);					// 215
$xMun			= $dom->createElement("xMun",$str);					// 216
$CEP			= $dom->createElement("CEP",$str);					// 217
$UF				= $dom->createElement("UF",$str);					// 218
$cPais			= $dom->createElement("cPais",$str);				// 219
$xPais			= $dom->createElement("xPais",$str);				// 220

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
$CNPJ			= $dom->createElement("CNPJ",$str);					// 223 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 224 - CONDICIONAL
$xNome			= $dom->createElement("xNome",$str);				// 225
$xLgr			= $dom->createElement("xLgr",$str);					// 226
$nro			= $dom->createElement("nro",$str);					// 227
$xCpl			= $dom->createElement("xCpl",$str);					// 228
$xBairro		= $dom->createElement("xBairro",$str);				// 229
$cMun			= $dom->createElement("cMun",$str);					// 230
$xMun			= $dom->createElement("xMun",$str);					// 231
$UF				= $dom->createElement("UF",$str);					// 232

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
$xNome			= $dom->createElement("xNome",$str);				// 237
$vComp			= $dom->createElement("vComp",$str);				// 238

$Comp->appendChild($xNome);
$Comp->appendChild($vComp);
//----------------------------------------- Comp

//----------------------------------------- ICMS
$ICMS00			= $dom->createElement("ICMS00");					// 241 - CONDICIONAL
$ICMS20			= $dom->createElement("ICMS20");					// 246 - CONDICIONAL
$ICMS45			= $dom->createElement("ICMS45");					// 252 - CONDICIONAL
$ICMS60			= $dom->createElement("ICMS60");					// 254 - CONDICIONAL
$ICMS90			= $dom->createElement("ICMS90");					// 260 - CONDICIONAL
$ICMSOutraUF	= $dom->createElement("ICMSOutraUF");				// 267 - CONDICIONAL
$ICMSSN			= $dom->createElement("ICMSSN");					// 273 - CONDICIONAL

$ICMS->appendChild($ICMS00);
$ICMS->appendChild($ICMS20);
$ICMS->appendChild($ICMS45);
$ICMS->appendChild($ICMS60);
$ICMS->appendChild($ICMS90);
$ICMS->appendChild($ICMSOutraUF);
$ICMS->appendChild($ICMSSN);
//----------------------------------------- ICMS

//----------------------------------------- infCarga
$vCarga			= $dom->createElement("vCarga",$str);				// 278
$proPred		= $dom->createElement("proPred",$str);				// 279
$xOutCat		= $dom->createElement("xOutCat",$str);				// 280
$infQ			= $dom->createElement("infQ");						// 281

$infCarga->appendChild($vCarga);
$infCarga->appendChild($proPred);
$infCarga->appendChild($xOutCat);
$infCarga->appendChild($infQ);
//----------------------------------------- infCarga

//----------------------------------------- contQt
$nCont			= $dom->createElement("nCont",$str);				// 286
$lacContQt		= $dom->createElement("lacContQt");					// 287
$dPrev			= $dom->createElement("dPrev",$str);				// 289

$contQt->appendChild($nCont);
$contQt->appendChild($lacContQt);
$contQt->appendChild($dPrev);
//----------------------------------------- contQt

//----------------------------------------- docAnt
$emiDocAnt		= $dom->createElement("emiDocAnt");					// 291

$docAnt->appendChild($emiDocAnt);
//----------------------------------------- docAnt

//----------------------------------------- seg
$respSeg		= $dom->createElement("respSeg",$str);				// 307
$xSeg			= $dom->createElement("xSeg",$str);					// 308
$nApol			= $dom->createElement("nApol",$str);				// 309
$nAver			= $dom->createElement("nAver",$str);				// 310
$vCarga			= $dom->createElement("vCarga",$str);				// 311

$seg->appendChild($respSeg);
$seg->appendChild($xSeg);
$seg->appendChild($nApol);
$seg->appendChild($nAver);
$seg->appendChild($vCarga);
//----------------------------------------- seg

//----------------------------------------- infModal
//versaoModal														// 313
//$any	= $dom->createElement("xs:CTeModalRodoviario_v1.00",$str);	// 314

//$infModal->setAttribute("versaoModal",$str);
//$infModal->appendChild($any);
//----------------------------------------- infModal

//----------------------------------------- peri
$nONU			= $dom->createElement("nONU",$str);					// 316
$xNomeAE		= $dom->createElement("xNomeAE",$str);				// 317
$xClaRisco		= $dom->createElement("xClaRisco",$str);			// 318
$grEmb			= $dom->createElement("grEmb",$str);				// 319
$qTotProd		= $dom->createElement("qTotProd",$str);				// 320
$qVolTipo		= $dom->createElement("qVolTipo",$str);				// 321
$pontoFulgor	= $dom->createElement("pontoFulgor",$str);			// 322

$peri->appendChild($nONU);
$peri->appendChild($xNomeAE);
$peri->appendChild($xClaRisco);
$peri->appendChild($grEmb);
$peri->appendChild($qTotProd);
$peri->appendChild($qVolTipo);
$peri->appendChild($pontoFulgor);
//----------------------------------------- peri

//----------------------------------------- veicNovos
$chassi			= $dom->createElement("chassi",$str);				// 324
$cCor			= $dom->createElement("cCor",$str);					// 325
$xCor			= $dom->createElement("xCor",$str);					// 326
$cMod			= $dom->createElement("cMod",$str);					// 327
$vUnit			= $dom->createElement("vUnit",$str);				// 328
$vFrete			= $dom->createElement("vFrete",$str);				// 329

$veicNovos->appendChild($chassi);
$veicNovos->appendChild($cCor);
$veicNovos->appendChild($xCor);
$veicNovos->appendChild($cMod);
$veicNovos->appendChild($vUnit);
$veicNovos->appendChild($vFrete);
//----------------------------------------- veicNovos

//----------------------------------------- cobr
$fat			= $dom->createElement("fat");						// 331
$dup			= $dom->createElement("dup");						// 336

$cobr->appendChild($fat);
$cobr->appendChild($dup);
//----------------------------------------- cobr

//----------------------------------------- infCteSub
$chCte			= $dom->createElement("chCte",$str);				// 341
$tomaICMS		= $dom->createElement("tomaICMS");					// 342 - CONDICIONAL
$tomaNaoICMS	= $dom->createElement("tomaNaoICMS");				// 353 - CONDICIONAL

$infCteSub->appendChild($chCte);
$infCteSub->appendChild($tomaICMS);
$infCteSub->appendChild($tomaNaoICMS);
//----------------------------------------- infCteSub

//----------------------------------------- vPresComp
$vTPrest		= $dom->createElement("vTPrest",$str);				// 358
$compComp		= $dom->createElement("compComp");					// 359

$vPresComp->appendChild($vTPrest);
$vPresComp->appendChild($compComp);
//----------------------------------------- vPresComp

//----------------------------------------- impComp
$ICMSComp		= $dom->createElement("ICMSComp");					// 363
$infAdFisco		= $dom->createElement("infAdFisco",$str);			// 398

$impComp->appendChild($ICMSComp);
$impComp->appendChild($infAdFisco);
//----------------------------------------- impComp




//************************************* NIVEL 4 *****************************************/
//----------------------------------------- enderToma
$xLgr			= $dom->createElement("xLgr",$str);					// 46
$nro			= $dom->createElement("nro",$str);					// 47
$xCpl			= $dom->createElement("xCpl",$str);					// 48
$xBairro		= $dom->createElement("xBairro",$str);				// 49
$cMun			= $dom->createElement("cMun",$str);					// 50
$xMun			= $dom->createElement("xMun",$str);					// 51
$CEP			= $dom->createElement("CEP",$str);					// 52
$UF				= $dom->createElement("UF",$str);					// 53
$cPais			= $dom->createElement("cPais",$str);				// 54
$xPais			= $dom->createElement("xPais",$str);				// 55

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
$xPass			= $dom->createElement("xPass",$str);				// 66

$pass->appendChild($xPass);
//----------------------------------------- pass

//----------------------------------------- semData
$tpPer			= $dom->createElement("tpPer",$str);				// 71

$semData->appendChild($tpPer);
//----------------------------------------- semData

//----------------------------------------- comData
$tpPer			= $dom->createElement("tpPer",$str);				// 73
$dProg			= $dom->createElement("dProg",$str);				// 74

$comData->appendChild($tpPer);
$comData->appendChild($dProg);
//----------------------------------------- comData

//----------------------------------------- noPeriodo
$tpPer			= $dom->createElement("tpPer",$str);				// 76
$dIni			= $dom->createElement("dIni",$str);					// 77
$dFim			= $dom->createElement("dFim",$str);					// 78

$noPeriodo->appendChild($tpPer);
$noPeriodo->appendChild($dIni);
$noPeriodo->appendChild($dFim);
//----------------------------------------- noPeriodo

//----------------------------------------- semHora
$tpHor			= $dom->createElement("tpHor",$str);				// 80

$semHora->appendChild($tpHor);
//----------------------------------------- semHora

//----------------------------------------- comHora
$tpHor			= $dom->createElement("tpHor",$str);				// 82
$hProg			= $dom->createElement("hProg",$str);				// 83

$comHora->appendChild($tpHor);
$comHora->appendChild($hProg);
//----------------------------------------- comHora

//----------------------------------------- noInter
$tpHor			= $dom->createElement("tpHor",$str);				// 85
$hIni			= $dom->createElement("hIni",$str);					// 86
$hFim			= $dom->createElement("hFim",$str);					// 87

$noInter->appendChild($tpHor);
$noInter->appendChild($hIni);
$noInter->appendChild($hFim);
//----------------------------------------- noInter

//----------------------------------------- locRet
$CNPJ			= $dom->createElement("CNPJ",$str);					// 148 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 149 - CONDICIONAL
$xNome			= $dom->createElement("xNome",$str);				// 150
$xLgr			= $dom->createElement("xLgr",$str);					// 151
$Nro			= $dom->createElement("Nro",$str);					// 152
$xCpl			= $dom->createElement("xCpl",$str);					// 153
$xBairro		= $dom->createElement("xBairro",$str);				// 154
$cMun			= $dom->createElement("cMun",$str);					// 155
$xMun			= $dom->createElement("xMun",$str);					// 156
$UF				= $dom->createElement("UF",$str);					// 157

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
$CST			= $dom->createElement("CST",$str);					// 242
$vBC			= $dom->createElement("vBC",$str);					// 243
$pICMS			= $dom->createElement("pICMS",$str);				// 244
$vICMS			= $dom->createElement("vICMS",$str);				// 245

$ICMS00->appendChild($CST);
$ICMS00->appendChild($vBC);
$ICMS00->appendChild($pICMS);
$ICMS00->appendChild($vICMS);
//----------------------------------------- ICMS00

//----------------------------------------- ICMS20
$CST			= $dom->createElement("CST",$str);					// 247
$pRedBC			= $dom->createElement("pRedBC",$str);				// 248
$vBC			= $dom->createElement("vBC",$str);					// 249
$pICMS			= $dom->createElement("pICMS",$str);				// 250
$vICMS			= $dom->createElement("vICMS",$str);				// 251

$ICMS20->appendChild($CST);
$ICMS20->appendChild($pRedBC);
$ICMS20->appendChild($vBC);
$ICMS20->appendChild($pICMS);
$ICMS20->appendChild($vICMS);
//----------------------------------------- ICMS20

//----------------------------------------- ICMS45
$CST			= $dom->createElement("CST",$str);					// 253

$ICMS45->appendChild($CST);
//----------------------------------------- ICMS45

//----------------------------------------- ICMS60
$CST			= $dom->createElement("CST",$str);					// 255
$vBCSTRet		= $dom->createElement("vBCSTRet",$str);				// 256
$vICMSSTRet		= $dom->createElement("vICMSSTRet",$str);			// 257
$pICMSSTRet		= $dom->createElement("pICMSSTRet",$str);			// 258
$vCred			= $dom->createElement("vCred",$str);				// 259

$ICMS60->appendChild($CST);
$ICMS60->appendChild($vBCSTRet);
$ICMS60->appendChild($vICMSSTRet);
$ICMS60->appendChild($pICMSSTRet);
$ICMS60->appendChild($vCred);
//----------------------------------------- ICMS60

//----------------------------------------- ICMS90
$CST			= $dom->createElement("CST",$str);					// 261
$pRedBC			= $dom->createElement("pRedBC",$str);				// 262
$vBC			= $dom->createElement("vBC",$str);					// 263
$pICMS			= $dom->createElement("pICMS",$str);				// 264
$vICMS			= $dom->createElement("vICMS",$str);				// 265
$vCred			= $dom->createElement("vCred",$str);				// 266

$ICMS90->appendChild($CST);
$ICMS90->appendChild($pRedBC);
$ICMS90->appendChild($vBC);
$ICMS90->appendChild($pICMS);
$ICMS90->appendChild($vICMS);
$ICMS90->appendChild($vCred);
//----------------------------------------- ICMS90

//----------------------------------------- ICMSOutraUF
$CST			= $dom->createElement("CST",$str);					// 268
$pRedBCOutraUF	= $dom->createElement("pRedBCOutraUF",$str);		// 269
$vBCOutraUF		= $dom->createElement("vBCOutraUF",$str);			// 270
$pICMSOutraUF	= $dom->createElement("pICMSOutraUF",$str);			// 271
$vICMSOutraUF	= $dom->createElement("vICMSOutraUF",$str);			// 272

$ICMSOutraUF->appendChild($CST);
$ICMSOutraUF->appendChild($pRedBCOutraUF);
$ICMSOutraUF->appendChild($vBCOutraUF);
$ICMSOutraUF->appendChild($pICMSOutraUF);
$ICMSOutraUF->appendChild($vICMSOutraUF);
//----------------------------------------- ICMSOutraUF

//----------------------------------------- ICMSSN
$indSN			= $dom->createElement("indSN",$str);				// 274

$ICMSSN->appendChild($indSN);
//----------------------------------------- ICMSSN

//----------------------------------------- infQ
$cUnid			= $dom->createElement("cUnid",$str);				// 282
$tpMed			= $dom->createElement("tpMed",$str);				// 283
$qCarga			= $dom->createElement("qCarga",$str);				// 284

$infQ->appendChild($cUnid);
$infQ->appendChild($tpMed);
$infQ->appendChild($qCarga);
//----------------------------------------- infQ

//----------------------------------------- lacContQt
$nLacre			= $dom->createElement("nLacre",$str);				// 288

$lacContQt->appendChild($nLacre);
//----------------------------------------- lacContQt

//----------------------------------------- emiDocAnt
$CNPJ			= $dom->createElement("CNPJ",$str);					// 292 - CONDICIONAL
$CPF			= $dom->createElement("CPF",$str);					// 293 - CONDICIONAL
$IE				= $dom->createElement("IE",$str);					// 294
$UF				= $dom->createElement("UF",$str);					// 295
$xNome			= $dom->createElement("xNome",$str);				// 296
$idDocAnt		= $dom->createElement("idDocAnt");					// 297

$emiDocAnt->appendChild($CNPJ);
$emiDocAnt->appendChild($CPF);
$emiDocAnt->appendChild($IE);
$emiDocAnt->appendChild($UF);
$emiDocAnt->appendChild($xNome);
$emiDocAnt->appendChild($idDocAnt);
//----------------------------------------- emiDocAnt

//----------------------------------------- fat
$nFat			= $dom->createElement("nFat",$str);					// 332
$vOrig			= $dom->createElement("vOrig",$str);				// 333
$vDesc			= $dom->createElement("vDesc",$str);				// 334
$vLiq			= $dom->createElement("vLiq",$str);					// 335

$fat->appendChild($nFat);
$fat->appendChild($vOrig);
$fat->appendChild($vDesc);
$fat->appendChild($vLiq);
//----------------------------------------- fat

//----------------------------------------- dup
$nDup			= $dom->createElement("nDup",$str);					// 337
$dVenc			= $dom->createElement("dVenc",$str);				// 338
$vDup			= $dom->createElement("vDup",$str);					// 339

$dup->appendChild($nDup);
$dup->appendChild($dVenc);
$dup->appendChild($vDup);
//----------------------------------------- dup

//----------------------------------------- tomaICMS
$refNFe			= $dom->createElement("refNFe",$str);				// 343 - CONDICIONAL
$refNF			= $dom->createElement("refNF",$str);				// 344 - CONDICIONAL
$refCte			= $dom->createElement("refCte",$str);				// 352 - CONDICIONAL

$tomaICMS->appendChild($refNFe);
$tomaICMS->appendChild($refNF);
$tomaICMS->appendChild($refCte);
//----------------------------------------- tomaICMS

//----------------------------------------- tomaNaoICMS
$refCteAnu		= $dom->createElement("refCteAnu",$str);			// 354

$tomaNaoICMS->appendChild($refCteAnu);
//----------------------------------------- tomaNaoICMS

//----------------------------------------- compComp
$xNome			= $dom->createElement("xNome",$str);				// 360
$vComp			= $dom->createElement("vComp",$str);				// 361

$compComp->appendChild($xNome);
$compComp->appendChild($vComp);
//----------------------------------------- compComp

//----------------------------------------- ICMSComp
$ICMS00			= $dom->createElement("ICMS00",$str);				// 364 - CONDICIONAL
$ICMS20			= $dom->createElement("ICMS20",$str);				// 369 - CONDICIONAL
$ICMS45			= $dom->createElement("ICMS45",$str);				// 375 - CONDICIONAL
$ICMS60			= $dom->createElement("ICMS60",$str);				// 377 - CONDICIONAL
$ICMS90			= $dom->createElement("ICMS90",$str);				// 383 - CONDICIONAL
$ICMSOutraUF	= $dom->createElement("ICMSOutraUF",$str);			// 390 - CONDICIONAL
$ICMSSN			= $dom->createElement("ICMSSN",$str);				// 396 - CONDICIONAL

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
$idDocAntPap	= $dom->createElement("idDocAntPap");				// 298 - CONDICIONAL
$idDocAntEle	= $dom->createElement("idDocAntEle");				// 304 - CONDICIONAL

$idDocAnt->appendChild($idDocAntPap);
$idDocAnt->appendChild($idDocAntEle);
//----------------------------------------- idDocAnt

//----------------------------------------- refNF
$CNPJ			= $dom->createElement("CNPJ",$str);					// 345
$mod			= $dom->createElement("mod",$str);					// 346
$serie			= $dom->createElement("serie",$str);				// 347
$subserie		= $dom->createElement("subserie",$str);				// 348
$nro			= $dom->createElement("nro",$str);					// 349
$valor			= $dom->createElement("valor",$str);				// 350
$dEmi			= $dom->createElement("dEmi",$str);					// 351

$refNF->appendChild($CNPJ);
$refNF->appendChild($mod);
$refNF->appendChild($serie);
$refNF->appendChild($subserie);
$refNF->appendChild($nro);
$refNF->appendChild($valor);
$refNF->appendChild($dEmi);
//----------------------------------------- refNF

//----------------------------------------- ICMS00
$CST			= $dom->createElement("CST",$str);					// 365
$vBC			= $dom->createElement("vBC",$str);					// 366
$pICMS			= $dom->createElement("pICMS",$str);				// 367
$vICMS			= $dom->createElement("vICMS",$str);				// 368

$ICMS00->appendChild($CST);
$ICMS00->appendChild($vBC);
$ICMS00->appendChild($pICMS);
$ICMS00->appendChild($vICMS);
//----------------------------------------- ICMS00

//----------------------------------------- ICMS20
$CST			= $dom->createElement("CST",$str);					// 370
$pRedBC			= $dom->createElement("pRedBC",$str);				// 371
$vBC			= $dom->createElement("vBC",$str);					// 372
$pICMS			= $dom->createElement("pICMS",$str);				// 373
$vICMS			= $dom->createElement("vICMS",$str);				// 374

$ICMS20->appendChild($CST);
$ICMS20->appendChild($pRedBC);
$ICMS20->appendChild($vBC);
$ICMS20->appendChild($pICMS);
$ICMS20->appendChild($vICMS);
//----------------------------------------- ICMS20

//----------------------------------------- ICMS45
$CST			= $dom->createElement("CST",$str);					// 376

$ICMS45->appendChild($CST);
//----------------------------------------- ICMS45

//----------------------------------------- ICMS60
$CST			= $dom->createElement("CST",$str);					// 378
$vBCSTRet		= $dom->createElement("vBCSTRet",$str);				// 379
$vICMSSTRet		= $dom->createElement("vICMSSTRet",$str);			// 380
$pICMSSTRet		= $dom->createElement("pICMSSTRet",$str);			// 381
$vCred			= $dom->createElement("vCred",$str);				// 382

$ICMS60->appendChild($CST);
$ICMS60->appendChild($vBCSTRet);
$ICMS60->appendChild($vICMSSTRet);
$ICMS60->appendChild($pICMSSTRet);
$ICMS60->appendChild($vCred);
//----------------------------------------- ICMS60

//----------------------------------------- ICMS90
$CST			= $dom->createElement("CST",$str);					// 384
$pRedBC			= $dom->createElement("pRedBC",$str);				// 385
$vBC			= $dom->createElement("vBC",$str);					// 386
$pICMS			= $dom->createElement("pICMS",$str);				// 387
$vICMS			= $dom->createElement("vICMS",$str);				// 388
$vCred			= $dom->createElement("vCred",$str);				// 389

$ICMS90->appendChild($CST);
$ICMS90->appendChild($pRedBC);
$ICMS90->appendChild($vBC);
$ICMS90->appendChild($pICMS);
$ICMS90->appendChild($vICMS);
$ICMS90->appendChild($vCred);
//----------------------------------------- ICMS90

//----------------------------------------- ICMSOutraUF
$CST			= $dom->createElement("CST",$str);					// 391
$pRedBCOutraUF	= $dom->createElement("pRedBCOutraUF",$str);		// 392
$vBCOutraUF		= $dom->createElement("vBCOutraUF",$str);			// 393
$pICMSOutraUF	= $dom->createElement("pICMSOutraUF",$str);			// 394
$vICMSOutraUF	= $dom->createElement("vICMSOutraUF",$str);			// 395

$ICMSOutraUF->appendChild($CST);
$ICMSOutraUF->appendChild($pRedBCOutraUF);
$ICMSOutraUF->appendChild($vBCOutraUF);
$ICMSOutraUF->appendChild($pICMSOutraUF);
$ICMSOutraUF->appendChild($vICMSOutraUF);
//----------------------------------------- ICMSOutraUF

//----------------------------------------- ICMSSN
$indSN			= $dom->createElement("indSN",$str);				// 397

$ICMSSN->appendChild($indSN);
//----------------------------------------- ICMSSN


//************************************* NIVEL 6 *****************************************/
//----------------------------------------- idDocAntPap
$tpDoc			= $dom->createElement("tpDoc",$str);				// 299
$serie			= $dom->createElement("serie",$str);				// 300
$subser			= $dom->createElement("subser",$str);				// 301
$nDoc			= $dom->createElement("nDoc",$str);					// 302
$dEmi			= $dom->createElement("dEmi",$str);					// 303

$idDocAntPap->appendChild($tpDoc);
$idDocAntPap->appendChild($serie);
$idDocAntPap->appendChild($subser);
$idDocAntPap->appendChild($nDoc);
$idDocAntPap->appendChild($dEmi);
//----------------------------------------- idDocAntPap

//----------------------------------------- idDocAntEle
$chave			= $dom->createElement("chave",$str);				// 305

$idDocAntEle->appendChild($chave);
//----------------------------------------- idDocAntEle



$dom->saveXML();
$dom->save("cte_teste.xml");

?>