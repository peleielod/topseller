<?php
header('Content-Type: application/json');

$id = $_GET['id'];
$data_array = array();

if ($id==5){
	$data = array('id' => '7',
			  'name' => 'Tesztelek',
              'image' => 'https://api.new.topseller.hu/storage/categories/nAURiiOXTc2u0yXK8H1s6sFPeopZKg0PxX2vs7MM.jpeg',
              'child' => '');
}
else{
		$data = array('id' => '4',
			  'name' => "Alkategoria-$id",
              'image' => 'https://api.new.topseller.hu/storage/categories/nAURiiOXTc2u0yXK8H1s6sFPeopZKg0PxX2vs7MM.jpeg',
              'child' => '5');
	
}

for ($i = 1; $i<=15; $i++)
	array_push($data_array, $data);
	
echo json_encode($data_array);