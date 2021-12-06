<?php
$pessoa = $_POST['nome'];
 $cidade = $_POST['cidade'];
 
date_default_timezone_set('America/Fortaleza');    
$DateAndTime = date('m-d-Y h:i:s a', time());

 
echo $pessoa."<br>";
echo $cidade."<br>";
echo $DateAndTime."<br>";

 $tmp = $_FILES['arquivo']['tmp_name'];
$name = $_FILES['arquivo']['name'];

$nomeFinal = $pessoa.'-'. $cidade.'-'. $DateAndTime;

$path = pathinfo($name); // separa informação sobre o file

$ext = $path['extension']; // separa a extensão

$extPer = array("png", "jpg", "jpeg", "gif", "svg");

if(in_array($ext, $extPer)){
   move_uploaded_file($tmp, 'files/'.$nomeFinal); 
   echo "<br> arquivo enviado com sucesso";
}
else
{
	echo "<br> Extensão não permitida!";
}


/*
$path = pathinfo($name); // separa informação sobre o file

$ext = $path['extension']; // separa a extensão

$extPer = array("png", "jpg", "jpeg", "gif", "svg");

if(in_array($ext, $extPer)){
   move_uploaded_file($tmp, 'files/'.$nomeFinal.'.'.$ext.$cidade);
   echo "<br> arquivo enviado com sucesso"
}
else
{
	echo "<br> Extensão não permitida!"
};
//($tmp, 'files/'.$name)
//echo $nomeFinal.$ext; // imprime nome, data e extensão




----

*/
 //$data = date("m-d-Y");
 //$hora =

 // echo $_FILES['arquivo']['name']."<br>";
 // echo $_FILES['arquivo']['tmp_name'];


//$nomeFinal = $pessoa. '-'.$data. '-'.$cidade;

