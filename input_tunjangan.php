<?php
include "conn.php";
$page = $_GET[page];
$act = $_GET[act];
//if($page=='registrasi' and $act=='save')
//{
if(empty($_POST[nip]) 
or empty($_POST[nama])
or empty($_POST[jabatan]) 
or empty($_POST[hari]) 


 
){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='media.php?module=lihat_tunjangan'</script>";
}else{
$cek=mysql_query("select * from tunjangan where nip='$_POST[nip]'");
$jumlah=mysql_num_rows($cek);
if ($jumlah)
{
 echo"<script>alert('Maaf, data ini sudah terdaftar');window.location.href='media.php?module=lihat_tunjangan'</script>";
} else {
			
$kl=mysql_query("insert into tunjangan(nip,nama,jabatan,tnj)
 value('$_POST[nip]','$_POST[nama]','$_POST[jabatan]','$_POST[hari]')");
 
 echo"<script>alert('Data Anda Sukses Tersimpan');window.location.href='media.php?module=lihat_tunjangan'</script>";


}
}
?>