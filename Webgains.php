<?php
	$user = 'userYouShouldKnow';
	$password = 'passwordYouShouldKnow';
	$start_date = '2021-04-04T00:00:00';
	$end_date = '2021-04-06T00:00:00';
	$campaignid = 012345; //publisher id you should know as an int
	$wgurl = 'https://ws.webgains.com/aws.php';
	$client = new SoapClient($wgurl);
	$functions = $client->__getFunctions();
	// print_r($functions);
	$transactions = $client->getFullEarningsWithCurrency($start_date, $end_date, $campaignid, $user, $password);
	print_r($transactions);
?>
