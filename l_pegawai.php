<?php

include "pdf/class.ezpdf.php"; //class ezpdf yg di panggil
$pdf = new Cezpdf();

//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Courier.afm');

//Tampilkan gambar di dokumen PDF
$pdf->addJpegFromFile('sipi.jpg',31,778,90);

//Teks di tengah atas untuk judul header
$pdf->addText(140, 800, 16,'<b>DINAS KESEHATAN KABUPATEN ASAHAN	</b>');
$pdf->addText(100, 780, 10,'<b>Jl. Tusam No.5 Kisaran, Kabupaten Asahan, Provinsi Sumatera Utara</b>');

//Garis atas untuk header
$pdf->line(31, 770, 565, 770);

//Garis bawah untuk footer
$pdf->line(31, 50, 565, 50);

//Teks kiri bawah
$pdf->addText(410,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

// Baca input tanggal yang dikirimkan user
$dari = date_format(date_create($_POST[dari]), 'Y-m-d');
$sampai = date_format(date_create($_POST[sampai]), 'Y-m-d');
//echo "$mulai $selesai";exit;

//Menampilkan isi dari database
//Koneksi ke database dan tampilkan datanya
include "conn.php" ;

$tampil = "SELECT  * from pegawai  ORDER BY id_pegawai DESC
  ";
//echo $tampil;exit;
$sql = mysql_query($tampil);

//Menghitung jumlah data pada database				
$jml = mysql_num_rows($sql);
//echo $jml;exit;
if ($jml > 0){

$i = 1;
while($r = mysql_fetch_array($sql)) {

//Format Menampilkan data di ezPdf
	$data[$i]=array('No'=>$i,
			       'NIP'=>"$r[nip]",
				   'Nama Lengkap '=>"$r[nama]",
				   'Jenis Kelamin'=>"$r[jk]",
				   'Email'=>"$r[email]",
				   'No Hp'=>"$r[nohp]",
				   'Alamat'=>"$r[alamat]"
				   
				   );
	$i++;

}

//Tampilkan Dalam Bentuk Table
$pdf->ezTable($data);

$pdf->ezText("\nKabupaten Asahan");

// Penomoran halaman
$pdf->ezStartPageNumbers(564, 20, 8);
$pdf->ezStream();
}

else{

	echo "
	<script>
	alert('Tidak Ada Laporan');
	window.location=\"../../?modul=laporan&aksi=cetak\";
	</script>
	";

}

?>