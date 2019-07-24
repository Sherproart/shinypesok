<?php
	$ar = array("Данные сохранены", "сумма=".$_POST['summ']);
class Dat {}
$msg = new Dat();
$msg->status = 'success';
$msg->message = $ar;
$jsonData = json_encode($msg);
echo $jsonData."\n";
?>