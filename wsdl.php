<?php 
	/*
	*	@Author yuanxing008
	*	@date   2015-04-09
	*	@VerSion 0.1
	*
   	*/
	header('content-type:text/html;charset=utf-8');
	$param  = array('Username'=>'xxx','Password'=>'xxx','authentication' => SOAP_AUTHENTICATION_BASIC);
	$s = new SoapClient('http://xxx/xxx?wsdl',$param);
?>
