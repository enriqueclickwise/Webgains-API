<?php
	$user = 'userYouShouldKnow';
	$password = 'passwordYouShouldKnow';
	$start_date = '2021-04-04T00:00:00';
	$end_date = '2021-04-06T00:00:00';
	$request_data = array (
		'startdate' => $start_date,
		'enddate' => $end_date,
		'campaignid' => '',
		'username' => $user,
		'password' => $password,
	);	
	$wgurl = 'http://ws.webgains.com/aws.php';
	$client = new SoapClient($wgurl);
	$functions = $client->__getFunctions();
	// print_r($functions);
	$transactions = $client->getFullEarningsWithCurrency($request_data);
	print_r($transactions);
?>
