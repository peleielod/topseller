<?php
$date = new DateTime();
$datum  = $date->format('YmdHis');

echo $datum;
echo "<br>";

$url = "http://b2b.midoceanbrands.com/invoke/b2b.main/get_pricelist_xml";
$xml = '<?xml version="1.0" encoding="UTF-8"?>
		<PRICELIST_REQUEST>
			<CUSTOMER_NUMBER>80800359</CUSTOMER_NUMBER>
			<LOGIN>4120528</LOGIN>
			<PASSWORD> 80800359</PASSWORD>
			<TIMESTAMP>'.$datum.'</TIMESTAMP>
		</PRICELIST_REQUEST>';



$headers = array(
    "Content-type: text/xml",
    "Content-length: " . strlen($xml),
    "Connection: close",
);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10000);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$data = curl_exec($ch); 
echo $data;
if(curl_errno($ch))
    print curl_error($ch);
else
    curl_close($ch);
?>
