<?php

include "../class.database.php";
$db=new Database();
include "../../config.php";
$id=$_POST["id"];
$adres=$_POST["adres"];


$tablo='musteriler';
$sorgu_alan='musteri_id';
$sorgu_deger=$id;

$alanlar=array("adres") ;
$degerler=array($adres) ;

$db->KayitGuncelle($tablo, $alanlar, $degerler, $sorgu_alan, $sorgu_deger);

header("Location: ../../user/profil.php");
exit();