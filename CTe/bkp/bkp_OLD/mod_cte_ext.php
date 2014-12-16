<?php

include ("mod_cte.php");

class CTeRodoviario extends CTePHP {

	private $vmod_1_rodo;
	private $vmod_2_RNTRC;
	private $vmod_3_dPrev;
	private $vmod_4_lota;
	private $vmod_5_CIOT;
	private $vmod_6_occ;
	private $vmod_7_serie;
	private $vmod_8_nOcc;
	private $vmod_9_dEmi;
	private $vmod_10_emiOcc;
	private $vmod_11_CNPJ;
	private $vmod_12_cInt;
	private $vmod_13_IE;
	private $vmod_14_UF;
	private $vmod_15_fone;
	private $vmod_16_valePed;
	private $vmod_17_CNPJForn;
	private $vmod_18_nCompra;
	private $vmod_19_CNPJPg;
	private $vmod_20_veic;
	private $vmod_21_cInt;
	private $vmod_22_RENAVAM;
	private $vmod_23_placa;
	private $vmod_24_tara;
	private $vmod_25_capKG;
	private $vmod_26_capM3;
	private $vmod_27_tpProp;
	private $vmod_28_tpVeic;
	private $vmod_29_tpRod;
	private $vmod_30_tpCar;
	private $vmod_31_UF;
	private $vmod_32_prop;
	private $vmod_33_CPF;
	private $vmod_34_CNPJ;
	private $vmod_35_RNTRC;
	private $vmod_36_xNome;
	private $vmod_37_IE;
	private $vmod_38_UF;
	private $vmod_39_tpProp;
	private $vmod_40_lacRodo;
	private $vmod_41_nLacre;
	private $vmod_42_moto;
	private $vmod_43_xNome;
	private $vmod_44_CPF;

	public function setMod_1_rodo() { 
		if ($this->validateNotNull("setMod_1_rodo",$this->v_314_xs)) {
			$this->vmod_1_rodo = $this->dom->createElement("rodo");									// 1_rodo
			$this->v_312_infModal->appendChild($this->vmod_1_rodo);
		}
	}
	public function setMod_2_RNTRC($param) { 
		if ($this->validateRegExp("setMod_2_RNTRC",$param,"ER33" )) { 								// ER33
			$this->vmod_2_RNTRC = $this->dom->createElement("RNTRC",$param);						// 2_RNTRC
			$this->vmod_1_rodo->appendChild($this->vmod_2_RNTRC);
		}
	}
	public function setMod_3_dPrev($param) { 
		if ($this->validateRegExp("setMod_3_dPrev",$param,"ER9")) { 								// ER9
			$this->vmod_3_dPrev = $this->dom->createElement("dPrev",$param);						// 3_dPrev
			$this->vmod_1_rodo->appendChild($this->vmod_3_dPrev);
		}
	}
	public function setMod_4_lota($param) { 
		if ($this->validateDomain("setMod_4_lota",$param,"D10")) {									// D10
			$this->vmod_4_lota = $this->dom->createElement("lota",$param);							// 4_lota
			$this->vmod_1_rodo->appendChild($this->vmod_4_lota);
		}
	}
	public function setMod_5_CIOT($param) { 
		if ($this->validateRegExp("setMod_5_CIOT",$param,"ER51")) { 								// ER51
			$this->vmod_5_CIOT = $this->dom->createElement("CIOT",$param);							// 5_CIOT
			$this->vmod_1_rodo->appendChild($this->vmod_5_CIOT);
		}
	}
	public function setMod_6_occ() { 
		$this->vmod_6_occ = $this->dom->createElement("occ");										// 6_occ
		$this->vmod_1_rodo->appendChild($this->vmod_6_occ);
	}
	public function setMod_7_serie($param) { 
		if ($this->validateRegExp("setMod_7_serie",$param,"ER32")) { 								// ER32
			$this->vmod_7_serie = $this->dom->createElement("serie",$param);						// 7_serie
			$this->vmod_6_occ->appendChild($this->vmod_7_serie);
		}
	}
	public function setMod_8_nOcc($param) { 
		if ($this->validateRegExp("setMod_8_nOcc",$param,"ER52")) { 								// ER52
			$this->vmod_8_nOcc = $this->dom->createElement("nOcc",$param);							// 8_nOcc
			$this->vmod_6_occ->appendChild($this->vmod_8_nOcc);
		}
	}
	public function setMod_9_dEmi($param) { 
		if ($this->validateRegExp("setMod_9_dEmi",$param,"ER9")) { 									// ER9
			$this->vmod_9_dEmi = $this->dom->createElement("dEmi",$param);							// 9_dEmi
			$this->vmod_6_occ->appendChild($this->vmod_9_dEmi);
		}
	}
	public function setMod_10_emiOcc() { 
		$this->vmod_10_emiOcc = $this->dom->createElement("emiOcc");								// 10_emiOcc
		$this->vmod_6_occ->appendChild($this->vmod_10_emiOcc);
	}
	public function setMod_11_CNPJ($param) { 
		if ($this->validateRegExp("setMod_11_CNPJ",$param,"ER4")) { 								// ER4
			$this->vmod_11_CNPJ = $this->dom->createElement("CNPJ",$param);							// 11_CNPJ
			$this->vmod_10_emiOcc->appendChild($this->vmod_11_CNPJ);
		}
	}
	public function setMod_12_cInt($param) { 
		if ($this->validateRegExp("setMod_12_cInt",$param,"ER32")) { 								// ER32
			$this->vmod_12_cInt = $this->dom->createElement("cInt",$param);							// 12_cInt
			$this->vmod_10_emiOcc->appendChild($this->vmod_12_cInt);
		}
	}
	public function setMod_13_IE($param) { 
		if ($this->validateRegExp("setMod_13_IE",$param,"ER25")) { 									// ER25
			$this->vmod_13_IE = $this->dom->createElement("IE",$param);								// 13_IE
			$this->vmod_10_emiOcc->appendChild($this->vmod_13_IE);
		}
	}
	public function setMod_14_UF($param) { 
		if ($this->validateDomain("setMod_14_UF",$param,"D5")) {									// D5
			$this->vmod_14_UF = $this->dom->createElement("UF",$param);								// 14_UF
			$this->vmod_10_emiOcc->appendChild($this->vmod_14_UF);
		}
	}
	public function setMod_15_fone($param) { 
		if ($this->validateRegExp("setMod_15_fone",$param,"ER32")) { 								// ER32
			$this->vmod_15_fone = $this->dom->createElement("fone",$param);							// 15_fone
			$this->vmod_10_emiOcc->appendChild($this->vmod_15_fone);
		}
	}
	public function setMod_16_valePed() { 
		$this->vmod_16_valePed = $this->dom->createElement("valePed");								// 16_valePed
		$this->vmod_1_rodo->appendChild($this->vmod_16_valePed);
	}
	public function setMod_17_CNPJForn($param) { 
		if ($this->validateRegExp("setMod_17_CNPJForn",$param,"ER4")) { 							// ER4
			$this->vmod_17_CNPJForn = $this->dom->createElement("CNPJForn",$param);					// 17_CNPJForn
			$this->vmod_16_valePed->appendChild($this->vmod_17_CNPJForn);
		}
	}
	public function setMod_18_nCompra($param) { 
		if ($this->validateRegExp("setMod_18_nCompra",$param,"ER39")) { 							// ER39
			$this->vmod_18_nCompra = $this->dom->createElement("nCompra",$param);					// 18_nCompra
			$this->vmod_16_valePed->appendChild($this->vmod_18_nCompra);
		}
	}
	public function setMod_19_CNPJPg($param) { 
		if ($this->validateRegExp("setMod_19_CNPJPg",$param,"ER6")) { 								// ER6
			$this->vmod_19_CNPJPg = $this->dom->createElement("CNPJPg",$param);						// 19_CNPJPg
			$this->vmod_16_valePed->appendChild($this->vmod_19_CNPJPg);
		}
	}
	public function setMod_20_veic() { 
		$this->vmod_20_veic = $this->dom->createElement("veic");									// 20_veic
		$this->vmod_1_rodo->appendChild($this->vmod_20_veic);
	}
	public function setMod_21_cInt($param) { 
		if ($this->validateRegExp("setMod_21_cInt",$param,"ER32")) { 								// ER32
			$this->vmod_21_cInt = $this->dom->createElement("cInt",$param);							// 21_cInt
			$this->vmod_20_veic->appendChild($this->vmod_21_cInt);
		}
	}
	public function setMod_22_RENAVAM($param) { 
		if ($this->validateRegExp("setMod_22_RENAVAM",$param,"ER32")) { 							// ER32
			$this->vmod_22_RENAVAM = $this->dom->createElement("RENAVAM",$param);					// 22_RENAVAM
			$this->vmod_20_veic->appendChild($this->vmod_22_RENAVAM);
		}
	}
	public function setMod_23_placa($param) { 
		if ($this->validateRegExp("setMod_23_placa",$param,"ER50")) { 								// ER50
			$this->vmod_23_placa = $this->dom->createElement("placa",$param);						// 23_placa
			$this->vmod_20_veic->appendChild($this->vmod_23_placa);
		}
	}
	public function setMod_24_tara($param) { 
		if ($this->validateRegExp("setMod_24_tara",$param,"ER53")) { 								// ER53
			$this->vmod_24_tara = $this->dom->createElement("tara",$param);							// 24_tara
			$this->vmod_20_veic->appendChild($this->vmod_24_tara);
		}
	}
	public function setMod_25_capKG($param) { 
		if ($this->validateRegExp("setMod_25_capKG",$param,"ER53")) { 								// ER53
			$this->vmod_25_capKG = $this->dom->createElement("capKG",$param);						// 25_capKG
			$this->vmod_20_veic->appendChild($this->vmod_25_capKG);
		}
	}
	public function setMod_26_capM3($param) { 
		if ($this->validateRegExp("setMod_26_capM3",$param,"ER30")) { 								// ER30
			$this->vmod_26_capM3 = $this->dom->createElement("capM3",$param);						// 26_capM3
			$this->vmod_20_veic->appendChild($this->vmod_26_capM3);
		}
	}
	public function setMod_27_tpProp($param) { 
		if ($this->validateDomain("setMod_27_tpProp",$param,"D27")) {								// D27
			$this->vmod_27_tpProp = $this->dom->createElement("tpProp",$param);						// 27_tpProp
			$this->vmod_20_veic->appendChild($this->vmod_27_tpProp);
		}
	}
	public function setMod_28_tpVeic($param) { 
		if ($this->validateDomain("setMod_28_tpVeic",$param,"D10")) {								// D10
			$this->vmod_28_tpVeic = $this->dom->createElement("tpVeic",$param);						// 28_tpVeic
			$this->vmod_20_veic->appendChild($this->vmod_28_tpVeic);
		}
	}
	public function setMod_29_tpRod($param) { 
		if ($this->validateDomain("setMod_29_tpRod",$param,"D28")) {								// D28
			$this->vmod_29_tpRod = $this->dom->createElement("tpRod",$param);						// 29_tpRod
			$this->vmod_20_veic->appendChild($this->vmod_29_tpRod);
		}
	}
	public function setMod_30_tpCar($param) { 
		if ($this->validateDomain("setMod_30_tpCar",$param,"D15")) {								// D15
			$this->vmod_30_tpCar = $this->dom->createElement("tpCar",$param);						// 30_tpCar
			$this->vmod_20_veic->appendChild($this->vmod_30_tpCar);
		}
	}
	public function setMod_31_UF($param) { 
		if ($this->validateDomain("setMod_31_UF",$param,"D5")) {									// D5
			$this->vmod_31_UF = $this->dom->createElement("UF",$param);								// 31_UF
			$this->vmod_20_veic->appendChild($this->vmod_31_UF);
		}
	}
	public function setMod_32_prop() { 
		$this->vmod_32_prop = $this->dom->createElement("prop");									// 32_prop
		$this->vmod_20_veic->appendChild($this->vmod_32_prop);
	}
	public function setMod_33_CPF($param) { 
		if ($this->validateRegExp("setMod_33_CPF",$param,"ER7")) { 									// ER7
			$this->vmod_33_CPF = $this->dom->createElement("CPF",$param);							// 33_CPF
			$this->vmod_32_prop->appendChild($this->vmod_33_CPF);
		}
	}
	public function setMod_34_CNPJ($param) { 
		if ($this->validateRegExp("setMod_34_CNPJ",$param,"ER6")) { 								// ER6
			$this->vmod_34_CNPJ = $this->dom->createElement("CNPJ",$param);							// 34_CNPJ
			$this->vmod_32_prop->appendChild($this->vmod_34_CNPJ);
		}
	}
	public function setMod_35_RNTRC($param) { 
		if ($this->validateRegExp("setMod_35_RNTRC",$param,"ER33")) { 								// ER33
			$this->vmod_35_RNTRC = $this->dom->createElement("RNTRC",$param);						// 35_RNTRC
			$this->vmod_32_prop->appendChild($this->vmod_35_RNTRC);
		}
	}
	public function setMod_36_xNome($param) { 
		if ($this->validateRegExp("setMod_36_xNome",$param,"ER32")) { 								// ER32
			$this->vmod_36_xNome = $this->dom->createElement("xNome",$param);						// 36_xNome
			$this->vmod_32_prop->appendChild($this->vmod_36_xNome);
		}
	}
	public function setMod_37_IE($param) { 
		if ($this->validateRegExp("setMod_37_IE",$param,"ER26")) { 									// ER26
			$this->vmod_37_IE = $this->dom->createElement("IE",$param);								// 37_IE
			$this->vmod_32_prop->appendChild($this->vmod_37_IE);
		}
	}
	public function setMod_38_UF($param) { 
		if ($this->validateDomain("setMod_38_UF",$param,"D5")) {									// D5
			$this->vmod_38_UF = $this->dom->createElement("UF",$param);								// 38_UF
			$this->vmod_32_prop->appendChild($this->vmod_38_UF);
		}
	}
	public function setMod_39_tpProp($param) { 
		if ($this->validateDomain("setMod_39_tpProp",$param,"D7")) {								// D7
			$this->vmod_39_tpProp = $this->dom->createElement("tpProp",$param);						// 39_tpProp
			$this->vmod_32_prop->appendChild($this->vmod_39_tpProp);
		}
	}
	public function setMod_40_lacRodo() { 
		$this->vmod_40_lacRodo = $this->dom->createElement("lacRodo");								// 40_lacRodo
		$this->vmod_1_rodo->appendChild($this->vmod_40_lacRodo);
	}
	public function setMod_41_nLacre($param) { 
		if ($this->validateRegExp("setMod_41_nLacre",$param,"ER32")) { 								// ER32
			$this->vmod_41_nLacre = $this->dom->createElement("nLacre",$param);						// 41_nLacre
			$this->vmod_40_lacRodo->appendChild($this->vmod_41_nLacre);
		}
	}
	public function setMod_42_moto() { 
		$this->vmod_42_moto = $this->dom->createElement("moto");									// 42_moto
		$this->vmod_1_rodo->appendChild($this->vmod_42_moto);
	}
	public function setMod_43_xNome($param) { 
		if ($this->validateRegExp("setMod_43_xNome",$param,"ER32")) { 								// ER32
			$this->vmod_43_xNome = $this->dom->createElement("xNome",$param);						// 43_xNome
			$this->vmod_42_moto->appendChild($this->vmod_43_xNome);
		}
	}
	public function setMod_44_CPF($param) { 
		if ($this->validateRegExp("setMod_44_CPF",$param,"ER7")) { 									// ER7
			$this->vmod_44_CPF = $this->dom->createElement("CPF",$param);							// 44_CPF
			$this->vmod_42_moto->appendChild($this->vmod_44_CPF);
		}
	}

}

class CTeAereo extends CTePHP {

	private $vmod_1_aereo;
	private $vmod_2_nMinu;
	private $vmod_3_nOCA;
	private $vmod_4_dPrev;
	private $vmod_5_xLAgEmi;
	private $vmod_6_IdT;
	private $vmod_7_tarifa;
	private $vmod_8_CL;
	private $vmod_9_cTar;
	private $vmod_10_vTar;
	private $vmod_11_natCarga;
	private $vmod_12_xDime;
	private $vmod_13_cInfManu;
	private $vmod_14_cIMP;

	public function setMod_1_aereo() { 
		if ($this->validateNotNull("setMod_1_aereo",$this->v_314_xs)) {
			$this->vmod_1_aereo = $this->dom->createElement("aereo");								// 1_aereo
			$this->v_312_infModal->appendChild($this->vmod_1_aereo);
		}
	}
	public function setMod_2_nMinu($param) { 
		if ($this->validateRegExp("setMod_2_nMinu",$param,"ER54")) { 								// ER54
			$this->vmod_2_nMinu = $this->dom->createElement("nMinu",$param);						// 2_nMinu
			$this->vmod_1_aereo->appendChild($this->vmod_2_nMinu);
		}
	}
	public function setMod_3_nOCA($param) { 
		if ($this->validateRegExp("setMod_3_nOCA",$param,"ER4")) { 									// ER4
			$this->vmod_3_nOCA = $this->dom->createElement("nOCA",$param);							// 3_nOCA
			$this->vmod_1_aereo->appendChild($this->vmod_3_nOCA);
		}
	}
	public function setMod_4_dPrev($param) { 
		if ($this->validateRegExp("setMod_4_dPrev",$param,"ER9")) { 								// ER9
			$this->vmod_4_dPrev = $this->dom->createElement("dPrev",$param);						// 4_dPrev
			$this->vmod_1_aereo->appendChild($this->vmod_4_dPrev);
		}
	}
	public function setMod_5_xLAgEmi($param) { 
		if ($this->validateRegExp("setMod_5_xLAgEmi",$param,"ER32")) { 								// ER32
			$this->vmod_5_xLAgEmi = $this->dom->createElement("xLAgEmi",$param);					// 5_xLAgEmi
			$this->vmod_1_aereo->appendChild($this->vmod_5_xLAgEmi);
		}
	}
	public function setMod_6_IdT($param) { 
		if ($this->validateRegExp("setMod_6_IdT",$param,"ER32")) { 									// ER32
			$this->vmod_6_IdT = $this->dom->createElement("IdT",$param);							// 6_IdT
			$this->vmod_1_aereo->appendChild($this->vmod_6_IdT);
		}
	}
	public function setMod_7_tarifa() { 
		$this->vmod_7_tarifa= $this->dom->createElement("tarifa");									// 7_tarifa
		$this->vmod_1_aereo->appendChild($this->vmod_7_tarifa);
	}
	public function setMod_8_CL($param) { 
		if ($this->validateRegExp("setMod_8_CL",$param,"ER55")) { 									// ER55
			$this->vmod_8_CL = $this->dom->createElement("CL",$param);								// 8_CL
			$this->vmod_7_tarifa->appendChild($this->vmod_8_CL);
		}
	}
	public function setMod_9_cTar($param) { 
		if ($this->validateRegExp("setMod_9_cTar",$param,"ER32")) { 								// ER32
			$this->vmod_9_cTar = $this->dom->createElement("cTar",$param);							// 9_cTar
			$this->vmod_7_tarifa->appendChild($this->vmod_9_cTar);
		}
	}
	public function setMod_10_vTar($param) { 
		if ($this->validateRegExp("setMod_10_vTar",$param,"ER23")) { 								// ER23
			$this->vmod_10_vTar = $this->dom->createElement("vTar",$param);							// 10_vTar
			$this->vmod_7_tarifa->appendChild($this->vmod_10_vTar);
		}
	}
	public function setMod_11_natCarga() { 
		$this->vmod_11_natCarga = $this->dom->createElement("natCarga");							// 11_natCarga
		$this->vmod_1_aereo->appendChild($this->vmod_11_natCarga);
	}
	public function setMod_12_xDime($param) { 
		if ($this->validateRegExp("setMod_12_xDime",$param,"ER32")) { 								// ER32
			$this->vmod_12_xDime = $this->dom->createElement("xDime",$param);						// 12_xDime
			$this->vmod_11_natCarga->appendChild($this->vmod_12_xDime);
		}
	}
	public function setMod_13_cInfManu($param) { 
		if ($this->validateDomain("setMod_13_cInfManu",$param,"D29")) {								// D29
			$this->vmod_13_cInfManu = $this->dom->createElement("cInfManu",$param);					// 13_cInfManu
			$this->vmod_11_natCarga->appendChild($this->vmod_13_cInfManu);
		}
	}
	public function setMod_14_cIMP($param) { 
		if ($this->validateRegExp("setMod_14_cIMP",$param,"ER32")) { 								// ER32
			$this->vmod_14_cIMP = $this->dom->createElement("cIMP",$param);							// 14_cIMP
			$this->vmod_11_natCarga->appendChild($this->vmod_14_cIMP);
		}
	}

}

class CTeAquaviario extends CTePHP {

	private $vmod_1_aquav;
	private $vmod_2_vPrest;
	private $vmod_3_vAFRMM;
	private $vmod_4_nBooking;
	private $vmod_5_nCtrl;
	private $vmod_6_xNavio;
	private $vmod_7_balsa;
	private $vmod_8_xBalsa;
	private $vmod_9_nViag;
	private $vmod_10_direc;
	private $vmod_11_prtEmb;
	private $vmod_12_prtTrans;
	private $vmod_13_prtDest;
	private $vmod_14_tpNav;
	private $vmod_15_irin;
	private $vmod_16_detCont;
	private $vmod_17_nCont;
	private $vmod_18_lacre;
	private $vmod_19_nLacre;
	private $vmod_20_infDoc;
	private $vmod_21_infNF;
	private $vmod_22_serie;
	private $vmod_23_nDoc;
	private $vmod_24_unidRat;
	private $vmod_25_infNFe;
	private $vmod_26_chave;
	private $vmod_27_unidRat;

	public function setMod_1_aquav() { 
		if ($this->validateNotNull("setMod_1_aquav",$this->v_314_xs)) {
			$this->vmod_1_aquav = $this->dom->createElement("aquav");									// 1_aquav
			$this->v_312_infModal->appendChild($this->vmod_1_aquav);
		}
	}
	public function setMod_2_vPrest($param) { 
		if ($this->validateRegExp("setMod_2_vPrest",$param,"ER23")) { 									// ER23
			$this->vmod_2_vPrest = $this->dom->createElement("vPrest",$param);							// 2_vPrest
			$this->vmod_1_aquav->appendChild($this->vmod_2_vPrest);
		}
	}
	public function setMod_3_vAFRMM($param) { 
		if ($this->validateRegExp("setMod_3_vAFRMM",$param,"ER23")) { 									// ER23
			$this->vmod_3_vAFRMM = $this->dom->createElement("vAFRMM",$param);							// 3_vAFRMM
			$this->vmod_1_aquav->appendChild($this->vmod_3_vAFRMM);
		}
	}
	public function setMod_4_nBooking($param) { 
		if ($this->validateRegExp("setMod_4_nBooking",$param,"ER32")) { 								// ER32
			$this->vmod_4_nBooking = $this->dom->createElement("nBooking",$param);						// 4_nBooking
			$this->vmod_1_aquav->appendChild($this->vmod_4_nBooking);
		}
	}
	public function setMod_5_nCtrl($param) { 
		if ($this->validateRegExp("setMod_5_nCtrl",$param,"ER32")) { 									// ER32
			$this->vmod_5_nCtrl = $this->dom->createElement("nCtrl",$param);							// 5_nCtrl
			$this->vmod_1_aquav->appendChild($this->vmod_5_nCtrl);
		}
	}
	public function setMod_6_xNavio($param) { 
		if ($this->validateRegExp("setMod_6_xNavio",$param,"ER32")) { 									// ER32
			$this->vmod_6_xNavio = $this->dom->createElement("xNavio",$param);							// 6_xNavio
			$this->vmod_1_aquav->appendChild($this->vmod_6_xNavio);
		}
	}
	public function setMod_7_balsa() { 
		$this->vmod_7_balsa = $this->dom->createElement("balsa");										// 7_balsa
		$this->vmod_1_aquav->appendChild($this->vmod_7_balsa);
	}
	public function setMod_8_xBalsa($param) { 
		if ($this->validateRegExp("setMod_8_xBalsa",$param,"ER32")) { 									// ER32
			$this->vmod_8_xBalsa = $this->dom->createElement("xBalsa",$param);							// 8_xBalsa
			$this->vmod_7_balsa->appendChild($this->vmod_8_xBalsa);
		}
	}
	public function setMod_9_nViag($param) { 
		if ($this->validateRegExp("setMod_9_nViag",$param,"ER56")) { 									// ER56
			$this->vmod_9_nViag = $this->dom->createElement("nViag",$param);							// 9_nViag
			$this->vmod_1_aquav->appendChild($this->vmod_9_nViag);
		}
	}
	public function setMod_10_direc($param) { 
		if ($this->validateDomain("setMod_10_direc",$param,"D30")) {									// D30
			$this->vmod_10_direc = $this->dom->createElement("direc",$param);							// 10_direc
			$this->vmod_1_aquav->appendChild($this->vmod_10_direc);
		}
	}
	public function setMod_11_prtEmb($param) { 
		if ($this->validateRegExp("setMod_11_prtEmb",$param,"ER32")) { 									// ER32
			$this->vmod_11_prtEmb = $this->dom->createElement("prtEmb",$param);							// 11_prtEmb
			$this->vmod_1_aquav->appendChild($this->vmod_11_prtEmb);
		}
	}
	public function setMod_12_prtTrans($param) { 
		if ($this->validateRegExp("setMod_12_prtTrans",$param,"ER32")) { 								// ER32
			$this->vmod_12_prtTrans = $this->dom->createElement("prtTrans",$param);						// 12_prtTrans
			$this->vmod_1_aquav->appendChild($this->vmod_12_prtTrans);
		}
	}
	public function setMod_13_prtDest($param) { 
		if ($this->validateRegExp("setMod_13_prtDest",$param,"ER32")) { 								// ER32
			$this->vmod_13_prtDest = $this->dom->createElement("prtDest",$param);						// 13_prtDest
			$this->vmod_1_aquav->appendChild($this->vmod_13_prtDest);
		}
	}
	public function setMod_14_tpNav($param) { 
		if ($this->validateDomain("setMod_14_tpNav",$param,"D10")) {									// D10
			$this->vmod_14_tpNav = $this->dom->createElement("tpNav",$param);							// 14_tpNav
			$this->vmod_1_aquav->appendChild($this->vmod_14_tpNav);
		}
	}
	public function setMod_15_irin($param) { 
		if ($this->validateNotNull("setMod_15_irin",$param)) {
			$this->vmod_15_irin = $this->dom->createElement("irin",$param);								// 15_irin
			$this->vmod_1_aquav->appendChild($this->vmod_15_irin);
		}
	}
	public function setMod_16_detCont() { 
		$this->vmod_16_detCont = $this->dom->createElement("detCont");									// 16_detCont
		$this->vmod_1_aquav->appendChild($this->vmod_16_detCont);
	}
	public function setMod_17_nCont($param) { 
		if ($this->validateRegExp("setMod_17_nCont",$param,"ER42")) { 									// ER42
			$this->vmod_17_nCont = $this->dom->createElement("nCont",$param);							// 17_nCont
			$this->vmod_16_detCont->appendChild($this->vmod_17_nCont);
		}
	}
	public function setMod_18_lacre() { 
		$this->vmod_18_lacre = $this->dom->createElement("lacre");										// 18_lacre
		$this->vmod_16_detCont->appendChild($this->vmod_18_lacre);
	}
	public function setMod_19_nLacre($param) { 
		if ($this->validateRegExp("setMod_19_nLacre",$param,"ER32")) { 									// ER32
			$this->vmod_19_nLacre = $this->dom->createElement("nLacre",$param);							// 19_nLacre
			$this->vmod_18_lacre->appendChild($this->vmod_19_nLacre);
		}
	}
	public function setMod_20_infDoc() { 
		$this->vmod_20_infDoc = $this->dom->createElement("infDoc");									// 20_infDoc
		$this->vmod_16_detCont->appendChild($this->vmod_20_infDoc);
	}
	public function setMod_21_infNF() { 
		$this->vmod_21_infNF = $this->dom->createElement("infNF");										// 21_infNF
		$this->vmod_20_infDoc->appendChild($this->vmod_21_infNF);
	}
	public function setMod_22_serie($param) { 
		if ($this->validateRegExp("setMod_22_serie",$param,"ER32")) { 									// ER32
			$this->vmod_22_serie = $this->dom->createElement("serie",$param);							// 22_serie
			$this->vmod_21_infNF->appendChild($this->vmod_22_serie);
		}
	}
	public function setMod_23_nDoc($param) { 
		if ($this->validateRegExp("setMod_23_nDoc",$param,"ER32")) { 									// ER32
			$this->vmod_23_nDoc = $this->dom->createElement("nDoc",$param);								// 23_nDoc
			$this->vmod_21_infNF->appendChild($this->vmod_23_nDoc);
		}
	}
	public function setMod_24_unidRat($param) { 
		if ($this->validateRegExp("setMod_24_unidRat",$param,"ER10")) { 								// ER10
			$this->vmod_24_unidRat = $this->dom->createElement("unidRat",$param);						// 24_unidRat
			$this->vmod_21_infNF->appendChild($this->vmod_24_unidRat);
		}
	}
	public function setMod_25_infNFe() { 
		$this->vmod_25_infNFe = $this->dom->createElement("infNFe");									// 25_infNFe
		$this->vmod_20_infDoc->appendChild($this->vmod_25_infNFe);
	}
	public function setMod_26_chave($param) { 
		if ($this->validateRegExp("setMod_26_chave",$param,"ER3")) { 									// ER3
			$this->vmod_26_chave = $this->dom->createElement("chave",$param);							// 26_chave
			$this->vmod_25_infNFe->appendChild($this->vmod_26_chave);
		}
	}
	public function setMod_27_unidRat($param) { 
		if ($this->validateRegExp("setMod_27_unidRat",$param,"ER10")) { 								// ER10
			$this->vmod_27_unidRat = $this->dom->createElement("unidRat",$param);						// 27_unidRat
			$this->vmod_25_infNFe->appendChild($this->vmod_27_unidRat);
		}
	}

}

class CTeFerroviario extends CTePHP {

	private $vmod_1_ferrov;
	private $vmod_2_tpTraf;
	private $vmod_3_trafMut;
	private $vmod_4_respFat;
	private $vmod_5_ferrEmi;
	private $vmod_6_fluxo;
	private $vmod_7_idTrem;
	private $vmod_8_vFrete;
	private $vmod_9_ferroEnv;
	private $vmod_10_CNPJ;
	private $vmod_11_cInt;
	private $vmod_12_IE;
	private $vmod_13_xNome;
	private $vmod_14_enderFerro;
	private $vmod_15_xLgr;
	private $vmod_16_nro;
	private $vmod_17_xCpl;
	private $vmod_18_xBairro;
	private $vmod_19_cMun;
	private $vmod_20_xMun;
	private $vmod_21_CEP;
	private $vmod_22_UF;
	private $vmod_23_detVag;
	private $vmod_24_nVag;
	private $vmod_25_cap;
	private $vmod_26_tpVag;
	private $vmod_27_pesoR;
	private $vmod_28_pesoBC;
	private $vmod_29_lacDetVag;
	private $vmod_30_nLacre;
	private $vmod_31_contVag;
	private $vmod_32_nCont;
	private $vmod_33_dPrev;
	private $vmod_34_ratVag;
	private $vmod_35_ratNF;
	private $vmod_36_serie;
	private $vmod_37_nDoc;
	private $vmod_38_pesoRat;
	private $vmod_39_ratNFe;
	private $vmod_40_chave;
	private $vmod_41_pesoRat;


	public function setMod_1_ferrov() { 		
		if ($this->validateNotNull("setMod_1_ferrov",$this->v_314_xs)) {
			$this->vmod_1_ferrov = $this->dom->createElement("ferrov");								// 1_ferrov
			$this->v_312_infModal->appendChild($this->vmod_1_ferrov);
		}
	}
	public function setMod_2_tpTraf($param) { 
		if ($this->validateDomain("setMod_2_tpTraf",$param,"D9")) {									// D9
			$this->vmod_2_tpTraf = $this->dom->createElement("tpTraf",$param);						// 2_tpTraf
			$this->vmod_1_ferrov->appendChild($this->vmod_2_tpTraf);
		}
	}
	public function setMod_3_trafMut() { 
		$this->vmod_3_trafMut = $this->dom->createElement("trafMut");								// 3_trafMut
		$this->vmod_1_ferrov->appendChild($this->vmod_3_trafMut);
	}
	public function setMod_4_respFat($param) { 
		if ($this->validateDomain("setMod_4_respFat",$param,"D1")) {								// D1
			$this->vmod_4_respFat = $this->dom->createElement("respFat",$param);					// 4_respFat
			$this->vmod_3_trafMut->appendChild($this->vmod_4_respFat);
		}
	}
	public function setMod_5_ferrEmi($param) { 
		if ($this->validateDomain("setMod_5_ferrEmi",$param,"D1")) {								// D1
			$this->vmod_5_ferrEmi = $this->dom->createElement("ferrEmi",$param);					// 5_ferrEmi
			$this->vmod_3_trafMut->appendChild($this->vmod_5_ferrEmi);
		}
	}
	public function setMod_6_fluxo($param) { 
		if ($this->validateRegExp("setMod_6_fluxo",$param,"ER32")) { 								// ER32
			$this->vmod_6_fluxo = $this->dom->createElement("fluxo",$param);						// 6_fluxo
			$this->vmod_1_ferrov->appendChild($this->vmod_6_fluxo);
		}
	}
	public function setMod_7_idTrem($param) { 
		if ($this->validateRegExp("setMod_7_idTrem",$param,"ER32")) { 								// ER32
			$this->vmod_7_idTrem = $this->dom->createElement("idTrem",$param);						// 7_idTrem
			$this->vmod_1_ferrov->appendChild($this->vmod_7_idTrem);
		}
	}
	public function setMod_8_vFrete($param) { 
		if ($this->validateRegExp("setMod_8_vFrete",$param,"ER23")) { 								// ER23
			$this->vmod_8_vFrete = $this->dom->createElement("vFrete",$param);						// 8_vFrete
			$this->vmod_1_ferrov->appendChild($this->vmod_8_vFrete);
		}
	}
	public function setMod_9_ferroEnv() { 
		$this->vmod_9_ferroEnv = $this->dom->createElement("ferroEnv");								// 9_ferroEnv
		$this->vmod_1_ferrov->appendChild($this->vmod_9_ferroEnv);
	}
	public function setMod_10_CNPJ($param) { 
		if ($this->validateRegExp("setMod_10_CNPJ",$param,"ER4")) { 								// ER4
			$this->vmod_10_CNPJ = $this->dom->createElement("CNPJ",$param);							// 10_CNPJ
			$this->vmod_9_ferroEnv->appendChild($this->vmod_10_CNPJ);
		}
	}
	public function setMod_11_cInt($param) { 
		if ($this->validateRegExp("setMod_11_cInt",$param,"ER32")) { 								// ER32
			$this->vmod_11_cInt = $this->dom->createElement("cInt",$param);							// 11_cInt
			$this->vmod_9_ferroEnv->appendChild($this->vmod_11_cInt);
		}
	}
	public function setMod_12_IE($param) { 
		if ($this->validateRegExp("setMod_12_IE",$param,"ER25")) { 									// ER25
			$this->vmod_12_IE = $this->dom->createElement("IE",$param);								// 12_IE
			$this->vmod_9_ferroEnv->appendChild($this->vmod_12_IE);
		}
	}
	public function setMod_13_xNome($param) { 
		if ($this->validateRegExp("setMod_13_xNome",$param,"ER32")) { 								// ER32
			$this->vmod_13_xNome = $this->dom->createElement("xNome",$param);						// 13_xNome
			$this->vmod_9_ferroEnv->appendChild($this->vmod_13_xNome);
		}
	}
	public function setMod_14_enderFerro() { 
		$this->vmod_14_enderFerro = $this->dom->createElement("enderFerro");						// 14_enderFerro
		$this->vmod_9_ferroEnv->appendChild($this->vmod_14_enderFerro);
	}
	public function setMod_15_xLgr($param) { 
		if ($this->validateRegExp("setMod_15_xLgr",$param,"ER32")) { 								// ER32
			$this->vmod_15_xLgr = $this->dom->createElement("xLgr",$param);							// 15_xLgr
			$this->vmod_14_enderFerro->appendChild($this->vmod_15_xLgr);
		}
	}
	public function setMod_16_nro($param) { 
		if ($this->validateRegExp("setMod_16_nro",$param,"ER32")) { 								// ER32
			$this->vmod_16_nro = $this->dom->createElement("nro",$param);							// 16_nro
			$this->vmod_14_enderFerro->appendChild($this->vmod_16_nro);
		}
	}
	public function setMod_17_xCpl($param) { 
		if ($this->validateRegExp("setMod_17_xCpl",$param,"ER32")) { 								// ER32
			$this->vmod_17_xCpl = $this->dom->createElement("xCpl",$param);							// 17_xCpl
			$this->vmod_14_enderFerro->appendChild($this->vmod_17_xCpl);
		}
	}
	public function setMod_18_xBairro($param) { 
		if ($this->validateRegExp("setMod_18_xBairro",$param,"ER32")) { 							// ER32
			$this->vmod_18_xBairro = $this->dom->createElement("xBairro",$param);					// 18_xBairro
			$this->vmod_14_enderFerro->appendChild($this->vmod_18_xBairro);
		}
	}
	public function setMod_19_cMun($param) { 
		if ($this->validateRegExp("setMod_19_cMun",$param,"ER2")) { 								// ER2
			$this->vmod_19_cMun = $this->dom->createElement("cMun",$param);							// 19_cMun
			$this->vmod_14_enderFerro->appendChild($this->vmod_19_cMun);
		}
	}
	public function setMod_20_xMun($param) { 
		if ($this->validateRegExp("setMod_20_xMun",$param,"ER32")) { 								// ER32
			$this->vmod_20_xMun = $this->dom->createElement("xMun",$param);							// 20_xMun
			$this->vmod_14_enderFerro->appendChild($this->vmod_20_xMun);
		}
	}
	public function setMod_21_CEP($param) { 
		if ($this->validateRegExp("setMod_21_CEP",$param,"ER33")) { 								// ER33
			$this->vmod_21_CEP = $this->dom->createElement("CEP",$param);							// 21_CEP
			$this->vmod_14_enderFerro->appendChild($this->vmod_21_CEP);
		}
	}
	public function setMod_22_UF($param) { 
		if ($this->validateDomain("setMod_22_UF",$param,"D5")) {									// D5
			$this->vmod_22_UF = $this->dom->createElement("UF",$param);								// 22_UF
			$this->vmod_14_enderFerro->appendChild($this->vmod_22_UF);
		}
	}
	public function setMod_23_detVag() { 
		$this->vmod_23_detVag = $this->dom->createElement("detVag");								// 23_detVag
		$this->vmod_1_ferrov->appendChild($this->vmod_23_detVag);
	}
	public function setMod_24_nVag($param) { 
		if ($this->validateRegExp("setMod_24_nVag",$param,"ER33")) { 								// ER33
			$this->vmod_24_nVag = $this->dom->createElement("nVag",$param);							// 24_nVag
			$this->vmod_23_detVag->appendChild($this->vmod_24_nVag);
		}
	}
	public function setMod_25_cap($param) { 
		if ($this->validateRegExp("setMod_25_cap",$param,"ER10")) { 								// ER10
			$this->vmod_25_cap = $this->dom->createElement("cap",$param);							// 25_cap
			$this->vmod_23_detVag->appendChild($this->vmod_25_cap);
		}
	}
	public function setMod_26_tpVag($param) { 
		if ($this->validateRegExp("setMod_26_tpVag",$param,"ER32")) { 								// ER32
			$this->vmod_26_tpVag = $this->dom->createElement("tpVag",$param);						// 26_tpVag
			$this->vmod_23_detVag->appendChild($this->vmod_26_tpVag);
		}
	}
	public function setMod_27_pesoR($param) { 
		if ($this->validateRegExp("setMod_27_pesoR",$param,"ER10")) { 								// ER10
			$this->vmod_27_pesoR = $this->dom->createElement("pesoR",$param);						// 27_pesoR
			$this->vmod_23_detVag->appendChild($this->vmod_27_pesoR);
		}
	}
	public function setMod_28_pesoBC($param) { 
		if ($this->validateRegExp("setMod_28_pesoBC",$param,"ER10")) { 								// ER10
			$this->vmod_28_pesoBC = $this->dom->createElement("pesoBC",$param);						// 28_pesoBC
			$this->vmod_23_detVag->appendChild($this->vmod_28_pesoBC);
		}
	}
	public function setMod_29_lacDetVag() { 
		$this->vmod_29_lacDetVag = $this->dom->createElement("lacDetVag");							// 29_lacDetVag
		$this->vmod_23_detVag->appendChild($this->vmod_29_lacDetVag);
	}
	public function setMod_30_nLacre($param) { 
		if ($this->validateRegExp("setMod_30_nLacre",$param,"ER32")) { 								// ER32
			$this->vmod_30_nLacre = $this->dom->createElement("nLacre",$param);						// 30_nLacre
			$this->vmod_29_lacDetVag->appendChild($this->vmod_30_nLacre);
		}
	}
	public function setMod_31_contVag() { 
		$this->vmod_31_contVag = $this->dom->createElement("contVag");								// 31_contVag
		$this->vmod_23_detVag->appendChild($this->vmod_31_contVag);
	}
	public function setMod_32_nCont($param) { 
		if ($this->validateRegExp("setMod_32_nCont",$param,"ER42")) { 								// ER42
			$this->vmod_32_nCont = $this->dom->createElement("nCont",$param);						// 32_nCont
			$this->vmod_31_contVag->appendChild($this->vmod_32_nCont);
		}
	}
	public function setMod_33_dPrev($param) { 
		if ($this->validateRegExp("setMod_33_dPrev",$param,"ER9")) { 								// ER9
			$this->vmod_33_dPrev = $this->dom->createElement("dPrev",$param);						// 33_dPrev
			$this->vmod_31_contVag->appendChild($this->vmod_33_dPrev);
		}
	}
	public function setMod_34_ratVag() { 
		$this->vmod_34_ratVag = $this->dom->createElement("ratVag");								// 34_ratVag
		$this->vmod_23_detVag->appendChild($this->vmod_34_ratVag);
	}
	public function setMod_35_ratNF() { 
		$this->vmod_35_ratNF = $this->dom->createElement("ratNF");									// 35_ratNF
		$this->vmod_34_ratVag->appendChild($this->vmod_35_ratNF);
	}
	public function setMod_36_serie($param) { 
		if ($this->validateRegExp("setMod_36_serie",$param,"ER32")) { 								// ER32
			$this->vmod_36_serie = $this->dom->createElement("serie",$param);						// 36_serie
			$this->vmod_35_ratNF->appendChild($this->vmod_36_serie);
		}
	}
	public function setMod_37_nDoc($param) { 
		if ($this->validateRegExp("setMod_37_nDoc",$param,"ER32")) { 								// ER32
			$this->vmod_37_nDoc = $this->dom->createElement("nDoc",$param);							// 37_nDoc
			$this->vmod_35_ratNF->appendChild($this->vmod_37_nDoc);
		}
	}
	public function setMod_38_pesoRat($param) { 
		if ($this->validateRegExp("setMod_38_pesoRat",$param,"ER10")) { 							// ER10
			$this->vmod_38_pesoRat = $this->dom->createElement("pesoRat",$param);					// 38_pesoRat
			$this->vmod_35_ratNF->appendChild($this->vmod_38_pesoRat);
		}
	}
	public function setMod_39_ratNFe() { 
		$this->vmod_39_ratNFe = $this->dom->createElement("ratNFe");								// 39_ratNFe
		$this->vmod_34_ratVag->appendChild($this->vmod_39_ratNFe);
	}
	public function setMod_40_chave($param) { 
		if ($this->validateRegExp("setMod_40_chave",$param,"ER3")) { 								// ER3
			$this->vmod_40_chave = $this->dom->createElement("chave",$param);						// 40_chave
			$this->vmod_39_ratNFe->appendChild($this->vmod_40_chave);
		}
	}
	public function setMod_41_pesoRat($param) { 
		if ($this->validateRegExp("setMod_41_pesoRat",$param,"ER10")) { 							// ER10
			$this->vmod_41_pesoRat = $this->dom->createElement("pesoRat",$param);					// 41_pesoRat
			$this->vmod_39_ratNFe->appendChild($this->vmod_41_pesoRat);
		}
	}

}


class CTeDutoviario extends CTePHP {

	private $vmod_1_duto;
	private $vmod_2_vTar;
	private $vmod_3_dIni;
	private $vmod_4_dFim;


	public function setMod_1_duto() { 
		if ($this->validateNotNull("setMod_1_duto",$this->v_314_xs)) {
			$this->vmod_1_duto = $this->dom->createElement("duto");									// 1_duto
			$this->v_312_infModal->appendChild($this->vmod_1_duto);
		}
	}
	public function setMod_2_vTar($param) { 
		if ($this->validateRegExp("setMod_2_vTar",$param,"ER16")) { 								// ER16
			$this->vmod_2_vTar = $this->dom->createElement("vTar",$param);							// 2_vTar
			$this->vmod_1_duto->appendChild($this->vmod_2_vTar);
		}
	}
	public function setMod_3_dIni($param) { 
		if ($this->validateRegExp("setMod_3_dIni",$param,"ER9")) { 									// ER9
			$this->vmod_3_dIni = $this->dom->createElement("dIni",$param);							// 3_dIni
			$this->vmod_1_duto->appendChild($this->vmod_3_dIni);
		}
	}
	public function setMod_4_dFim($param) { 
		if ($this->validateRegExp("setMod_4_dFim",$param,"ER9")) { 									// ER9
			$this->vmod_4_dFim = $this->dom->createElement("dFim",$param);							// 4_dFim
			$this->vmod_1_duto->appendChild($this->vmod_4_dFim);
		}
	}
	
}


$xml = new CTeRodoviario("NOME_DO_GERADOR",1);

// Informaчуo Genщrica
$xml->set_1_infCte(1);
$xml->set_2_versao(1.04);
$xml->set_3_Id(1);
$xml->set_4_ide(1);
$xml->set_5_cUF(1);
$xml->set_6_cCT(1);
$xml->set_7_CFOP(1);
$xml->set_8_natOp(1);
$xml->set_9_forPag(1);
$xml->set_10_mod(1);
$xml->set_11_serie(1);
$xml->set_12_nCT(1);
$xml->set_13_dhEmi(1);
$xml->set_14_tpImp(1);
$xml->set_15_tpEmis(1);
$xml->set_16_cDV(1);
$xml->set_17_tpAmb(1);
$xml->set_18_tpCTe(1);
$xml->set_19_procEmi(1);
$xml->set_20_verProc(1);
$xml->set_21_refCTE(1);
$xml->set_22_cMunEnv(1);
$xml->set_23_xMunEnv(1);
$xml->set_24_UFEnv(1);
$xml->set_25_modal(1);
$xml->set_26_tpServ(1);
$xml->set_27_cMunIni(1);
$xml->set_28_xMunIni(1);
$xml->set_29_UFIni(1);
$xml->set_30_cMunFim(1);
$xml->set_31_xMunFim(1);
$xml->set_32_UFFim(1);
$xml->set_33_retira(1);
$xml->set_34_xDetRetira(1);
$xml->set_35_toma03(1);
$xml->set_36_toma(1);
$xml->set_37_toma4(1);
$xml->set_38_toma(1);
$xml->set_39_CNPJ(1);
$xml->set_40_CPF(1);
$xml->set_41_IE(1);
$xml->set_42_xNome(1);
$xml->set_43_xFant(1);
$xml->set_44_fone(1);
$xml->set_45_enderToma(1);
$xml->set_46_xLgr(1);
$xml->set_47_nro(1);
$xml->set_48_xCpl(1);
$xml->set_49_xBairro(1);
$xml->set_50_cMun(1);
$xml->set_51_xMun(1);
$xml->set_52_CEP(1);
$xml->set_53_UF(1);
$xml->set_54_cPais(1);
$xml->set_55_xPais(1);
$xml->set_56_email(1);
$xml->set_57_dhCont(1);
$xml->set_58_xJust(1);
$xml->set_59_compl(1);
$xml->set_60_xCaracAd(1);
$xml->set_61_xCaracSer(1);
$xml->set_62_xEmi(1);
$xml->set_63_fluxo(1);
$xml->set_64_xOrig(1);
$xml->set_65_pass(1);
$xml->set_66_xPass(1);
$xml->set_67_xDest(1);
$xml->set_68_xRota(1);
$xml->set_69_Entrega(1);
$xml->set_70_semData(1);
$xml->set_71_tpPer(1);
$xml->set_72_comData(1);
$xml->set_73_tpPer(1);
$xml->set_74_dProg(1);
$xml->set_75_noPeriodo(1);
$xml->set_76_tpPer(1);
$xml->set_77_dIni(1);
$xml->set_78_dFim(1);
$xml->set_79_semHora(1);
$xml->set_80_tpHor(1);
$xml->set_81_comHora(1);
$xml->set_82_tpHor(1);
$xml->set_83_hProg(1);
$xml->set_84_noInter(1);
$xml->set_85_tpHor(1);
$xml->set_86_hIni(1);
$xml->set_87_hFim(1);
$xml->set_88_origCalc(1);
$xml->set_89_destCalc(1);
$xml->set_90_xObs(1);
$xml->set_91_ObsCont(1);
$xml->set_92_xCampo(1);
$xml->set_93_xTexto(1);
$xml->set_94_ObsFisco(1);
$xml->set_95_xCampo(1);
$xml->set_96_xTexto(1);
$xml->set_97_emit(1);
$xml->set_98_CNPJ(1);
$xml->set_99_IE(1);
$xml->set_100_xNome(1);
$xml->set_101_xFant(1);
$xml->set_102_enderEmit(1);
$xml->set_103_xLgr(1);
$xml->set_104_nro(1);
$xml->set_105_xCpl(1);
$xml->set_106_xBairro(1);
$xml->set_107_cMun(1);
$xml->set_108_xMun(1);
$xml->set_109_CEP(1);
$xml->set_110_UF(1);
$xml->set_111_fone(1);
$xml->set_112_rem(1);
$xml->set_113_CNPJ(1);
$xml->set_114_CPF(1);
$xml->set_115_IE(1);
$xml->set_116_xNome(1);
$xml->set_117_xFant(1);
$xml->set_118_fone(1);
$xml->set_119_enderReme(1);
$xml->set_120_xLgr(1);
$xml->set_121_nro(1);
$xml->set_122_xCpl(1);
$xml->set_123_xBairro(1);
$xml->set_124_cMun(1);
$xml->set_125_xMun(1);
$xml->set_126_CEP(1);
$xml->set_127_UF(1);
$xml->set_128_cPais(1);
$xml->set_129_xPais(1);
$xml->set_130_email(1);
$xml->set_131_infNF(1);
$xml->set_132_nRoma(1);
$xml->set_133_nPed(1);
$xml->set_134_mod(1);
$xml->set_135_serie(1);
$xml->set_136_nDoc(1);
$xml->set_137_dEmi(1);
$xml->set_138_vBC(1);
$xml->set_139_vICMS(1);
$xml->set_140_vBCST(1);
$xml->set_141_vST(1);
$xml->set_142_vProd(1);
$xml->set_143_vNF(1);
$xml->set_144_nCFOP(1);
$xml->set_145_nPeso(1);
$xml->set_146_PIN(1);
$xml->set_147_locRet(1);
$xml->set_148_CNPJ(1);
$xml->set_149_CPF(1);
$xml->set_150_xNome(1);
$xml->set_151_xLgr(1);
$xml->set_152_Nro(1);
$xml->set_153_xCpl(1);
$xml->set_154_xBairro(1);
$xml->set_155_cMun(1);
$xml->set_156_xMun(1);
$xml->set_157_UF(1);
$xml->set_158_infNFe(1);
$xml->set_159_Chave(1);
$xml->set_160_PIN(1);
$xml->set_161_infOutros(1);
$xml->set_162_tpDoc(1);
$xml->set_163_descOutros(1);
$xml->set_164_nDoc(1);
$xml->set_165_dEmi(1);
$xml->set_166_vDocFisc(1);
$xml->set_167_exped(1);
$xml->set_168_CNPJ(1);
$xml->set_169_CPF(1);
$xml->set_170_IE(1);
$xml->set_171_xNome(1);
$xml->set_172_fone(1);
$xml->set_173_enderExped(1);
$xml->set_174_xLgr(1);
$xml->set_175_nro(1);
$xml->set_176_xCpl(1);
$xml->set_177_xBairro(1);
$xml->set_178_cMun(1);
$xml->set_179_xMun(1);
$xml->set_180_CEP(1);
$xml->set_181_UF(1);
$xml->set_182_cPais(1);
$xml->set_183_xPais(1);
$xml->set_184_email(1);
$xml->set_185_receb(1);
$xml->set_186_CNPJ(1);
$xml->set_187_CPF(1);
$xml->set_188_IE(1);
$xml->set_189_xNome(1);
$xml->set_190_fone(1);
$xml->set_191_enderReceb(1);
$xml->set_192_xLgr(1);
$xml->set_193_nro(1);
$xml->set_194_xCpl(1);
$xml->set_195_xBairro(1);
$xml->set_196_cMun(1);
$xml->set_197_xMun(1);
$xml->set_198_CEP(1);
$xml->set_199_UF(1);
$xml->set_200_cPais(1);
$xml->set_201_xPais(1);
$xml->set_202_email(1);
$xml->set_203_dest(1);
$xml->set_204_CNPJ(1);
$xml->set_205_CPF(1);
$xml->set_206_IE(1);
$xml->set_207_xNome(1);
$xml->set_208_fone(1);
$xml->set_209_ISUF(1);
$xml->set_210_enderDest(1);
$xml->set_211_xLgr(1);
$xml->set_212_nro(1);
$xml->set_213_xCpl(1);
$xml->set_214_xBairro(1);
$xml->set_215_cMun(1);
$xml->set_216_xMun(1);
$xml->set_217_CEP(1);
$xml->set_218_UF(1);
$xml->set_219_cPais(1);
$xml->set_220_xPais(1);
$xml->set_221_email(1);
$xml->set_222_locEnt(1);
$xml->set_223_CNPJ(1);
$xml->set_224_CPF(1);
$xml->set_225_xNome(1);
$xml->set_226_xLgr(1);
$xml->set_227_nro(1);
$xml->set_228_xCpl(1);
$xml->set_229_xBairro(1);
$xml->set_230_cMun(1);
$xml->set_231_xMun(1);
$xml->set_232_UF(1);
$xml->set_233_vPrest(1);
$xml->set_234_vTPrest(1);
$xml->set_235_vRec(1);
$xml->set_236_Comp(1);
$xml->set_237_xNome(1);
$xml->set_238_vComp(1);
$xml->set_239_imp(1);
$xml->set_240_ICMS(1);
$xml->set_241_ICMS00(1);
$xml->set_242_CST(1);
$xml->set_243_vBC(1);
$xml->set_244_pICMS(1);
$xml->set_245_vICMS(1);
$xml->set_246_ICMS20(1);
$xml->set_247_CST(1);
$xml->set_248_pRedBC(1);
$xml->set_249_vBC(1);
$xml->set_250_pICMS(1);
$xml->set_251_vICMS(1);
$xml->set_252_ICMS45(1);
$xml->set_253_CST(1);
$xml->set_254_ICMS60(1);
$xml->set_255_CST(1);
$xml->set_256_vBCSTRet(1);
$xml->set_257_vICMSSTRet(1);
$xml->set_258_pICMSSTRet(1);
$xml->set_259_vCred(1);
$xml->set_260_ICMS90(1);
$xml->set_261_CST(1);
$xml->set_262_pRedBC(1);
$xml->set_263_vBC(1);
$xml->set_264_pICMS(1);
$xml->set_265_vICMS(1);
$xml->set_266_vCred(1);
$xml->set_267_ICMSOutraUF(1);
$xml->set_268_CST(1);
$xml->set_269_pRedBCOutraUF(1);
$xml->set_270_vBCOutraUF(1);
$xml->set_271_pICMSOutraUF(1);
$xml->set_272_vICMSOutraUF(1);
$xml->set_273_ICMSSN(1);
$xml->set_274_indSN(1);
$xml->set_275_infAdFisco(1);
$xml->set_276_infCTeNorm(1);
$xml->set_277_infCarga(1);
$xml->set_278_vCarga(1);
$xml->set_279_proPred(1);
$xml->set_280_xOutCat(1);
$xml->set_281_infQ(1);
$xml->set_282_cUnid(1);
$xml->set_283_tpMed(1);
$xml->set_284_qCarga(1);
$xml->set_285_contQt(1);
$xml->set_286_nCont(1);
$xml->set_287_lacContQt(1);
$xml->set_288_nLacre(1);
$xml->set_289_dPrev(1);
$xml->set_290_docAnt(1);
$xml->set_291_emiDocAnt(1);
$xml->set_292_CNPJ(1);
$xml->set_293_CPF(1);
$xml->set_294_IE(1);
$xml->set_295_UF(1);
$xml->set_296_xNome(1);
$xml->set_297_idDocAnt(1);
$xml->set_298_idDocAntPap(1);
$xml->set_299_tpDoc(1);
$xml->set_300_serie(1);
$xml->set_301_subser(1);
$xml->set_302_nDoc(1);
$xml->set_303_dEmi(1);
$xml->set_304_idDocAntEle(1);
$xml->set_305_chave(1);
$xml->set_306_seg(1);
$xml->set_307_respSeg(1);
$xml->set_308_xSeg(1);
$xml->set_309_nApol(1);
$xml->set_310_nAver(1);
$xml->set_311_vCarga(1);
$xml->set_312_infModal(1);
$xml->set_313_versaoModal(1.04);
$xml->set_314_xs(1);
$xml->set_315_peri(1);
$xml->set_316_nONU(1);
$xml->set_317_xNomeAE(1);
$xml->set_318_xClaRisco(1);
$xml->set_319_grEmb(1);
$xml->set_320_qTotProd(1);
$xml->set_321_qVolTipo(1);
$xml->set_322_pontoFulgor(1);
$xml->set_323_veicNovos(1);
$xml->set_324_chassi(1);
$xml->set_325_cCor(1);
$xml->set_326_xCor(1);
$xml->set_327_cMod(1);
$xml->set_328_vUnit(1);
$xml->set_329_vFrete(1);
$xml->set_330_cobr(1);
$xml->set_331_fat(1);
$xml->set_332_nFat(1);
$xml->set_333_vOrig(1);
$xml->set_334_vDesc(1);
$xml->set_335_vLiq(1);
$xml->set_336_dup(1);
$xml->set_337_nDup(1);
$xml->set_338_dVenc(1);
$xml->set_339_vDup(1);
$xml->set_340_infCteSub(1);
$xml->set_341_chCte(1);
$xml->set_342_tomaICMS(1);
$xml->set_343_refNFe(1);
$xml->set_344_refNF(1);
$xml->set_345_CNPJ(1);
$xml->set_346_mod(1);
$xml->set_347_serie(1);
$xml->set_348_subserie(1);
$xml->set_349_nro(1);
$xml->set_350_valor(1);
$xml->set_351_dEmi(1);
$xml->set_352_refCte(1);
$xml->set_353_tomaNaoICMS(1);
$xml->set_354_refCteAnu(1);
$xml->set_355_infCteComp(1);
$xml->set_356_chave(1);
$xml->set_357_vPresComp(1);
$xml->set_358_vTPrest(1);
$xml->set_359_compComp(1);
$xml->set_360_xNome(1);
$xml->set_361_vComp(1);
$xml->set_362_impComp(1);
$xml->set_363_ICMSComp(1);
$xml->set_364_ICMS00(1);
$xml->set_365_CST(1);
$xml->set_366_vBC(1);
$xml->set_367_pICMS(1);
$xml->set_368_vICMS(1);
$xml->set_369_ICMS20(1);
$xml->set_370_CST(1);
$xml->set_371_pRedBC(1);
$xml->set_372_vBC(1);
$xml->set_373_pICMS(1);
$xml->set_374_vICMS(1);
$xml->set_375_ICMS45(1);
$xml->set_376_CST(1);
$xml->set_377_ICMS60(1);
$xml->set_378_CST(1);
$xml->set_379_vBCSTRet(1);
$xml->set_380_vICMSSTRet(1);
$xml->set_381_pICMSSTRet(1);
$xml->set_382_vCred(1);
$xml->set_383_ICMS90(1);
$xml->set_384_CST(1);
$xml->set_385_pRedBC(1);
$xml->set_386_vBC(1);
$xml->set_387_pICMS(1);
$xml->set_388_vICMS(1);
$xml->set_389_vCred(1);
$xml->set_390_ICMSOutraUF(1);
$xml->set_391_CST(1);
$xml->set_392_pRedBCOutraUF(1);
$xml->set_393_vBCOutraUF(1);
$xml->set_394_pICMSOutraUF(1);
$xml->set_395_vICMSOutraUF(1);
$xml->set_396_ICMSSN(1);
$xml->set_397_indSN(1);
$xml->set_398_infAdFisco(1);
$xml->set_399_infCteAnu(1);
$xml->set_400_chCte(1);
$xml->set_401_dEmi(1);

// Informaчуo Modal
$xml->setMod_1_rodo(1);
$xml->setMod_2_RNTRC(1);
$xml->setMod_3_dPrev(1);
$xml->setMod_4_lota(1);
$xml->setMod_5_CIOT(1);
$xml->setMod_6_occ(1);
$xml->setMod_7_serie(1);
$xml->setMod_8_nOcc(1);
$xml->setMod_9_dEmi(1);
$xml->setMod_10_emiOcc(1);
$xml->setMod_11_CNPJ(1);
$xml->setMod_12_cInt(1);
$xml->setMod_13_IE(1);
$xml->setMod_14_UF(1);
$xml->setMod_15_fone(1);
$xml->setMod_16_valePed(1);
$xml->setMod_17_CNPJForn(1);
$xml->setMod_18_nCompra(1);
$xml->setMod_19_CNPJPg(1);
$xml->setMod_20_veic(1);
$xml->setMod_21_cInt(1);
$xml->setMod_22_RENAVAM(1);
$xml->setMod_23_placa(1);
$xml->setMod_24_tara(1);
$xml->setMod_25_capKG(1);
$xml->setMod_26_capM3(1);
$xml->setMod_27_tpProp(1);
$xml->setMod_28_tpVeic(1);
$xml->setMod_29_tpRod(1);
$xml->setMod_30_tpCar(1);
$xml->setMod_31_UF(1);
$xml->setMod_32_prop(1);
$xml->setMod_33_CPF(1);
$xml->setMod_34_CNPJ(1);
$xml->setMod_35_RNTRC(1);
$xml->setMod_36_xNome(1);
$xml->setMod_37_IE(1);
$xml->setMod_38_UF(1);
$xml->setMod_39_tpProp(1);
$xml->setMod_40_lacRodo(1);
$xml->setMod_41_nLacre(1);
$xml->setMod_42_moto(1);
$xml->setMod_43_xNome(1);
$xml->setMod_44_CPF(1);

$xml->saveXMLFile("cte_teste.xml");
?>