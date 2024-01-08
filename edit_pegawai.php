<?php
include "conn.php";
$edit=mysql_query("SELECT * FROM pegawai where id_pegawai='$_GET[id]'");
    $r=mysql_fetch_array($edit);
echo "<h4>Edit Data</h4>
	<hr><br>
          <form method=POST action=./aksi.php?module=pegawai&act=update>
          <input type=hidden name=id value='$r[id_pegawai]'>
          <table class='table table-bordered table-striped'>
          <tr><td>NIP </td><td> : <input type=text name='nip' value='$r[nip]' size=15 ></td></tr>
<tr><td>Nama Lengkap </td><td> : <input type=text name='nama' value='$r[nama]' size=15 ></td></tr>
<tr><td>Jenis Kelamin </td><td> : <input type=text name='jk' value='$r[jk]' size=15></td></tr>
<tr><td>  Email</td><td> : <input type=text name='email' value='$r[email]' size=15></td></tr>
<tr><td>  No Hp </td><td> : <input type=text name='nohp' value='$r[nohp]' size=15></td></tr>
<tr><td>  Alamat </td><td> : <input type=text name='alamat' value='$r[alamat]' size=15></td></tr>

		  	  		  
		  
          <tr><td colspan=2><input type=submit value=Update class='btn btn-primary'>
                            <input type=button value=Batal onclick=self.history.back() class='btn btn-warning'></td></tr>
          </table></form>";
		  ?>