<?php

class SiakngService extends CApplicationComponent
{
	public $connection;
	public function __contruct()
	{
		$this->connection = Yii::app()->db;
	}
	public function getDataMahasiswa($npm="")
	{
        if($npm != ""){
            $service = new SoapClient("http://academic.ui.ac.id/soap/siakng_beasiswa.wsdl");
            $result = $service->getBeasiswaInfo($npm);
            $arrResult = json_decode($result);
           return $arrResult;
        }else{
            return false;
        }
    }

    public function getDataProdi()
	{
            $service = new SoapClient("http://academic.ui.ac.id/soap/siakng_beasiswa.wsdl");
            $result = $service->getProdiInfo();
            $arrResult = json_decode($result);
           // echo "<pre>"; print_r($arrResult);die();
           return $arrResult;
    }
}
