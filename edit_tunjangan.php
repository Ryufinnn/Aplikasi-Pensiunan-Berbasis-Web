<?php
include "conn.php";
$edit=mysql_query("SELECT * FROM tunjangan where id_tunjangan='$_GET[id]'");
    $r=mysql_fetch_array($edit);
echo "<h4>Edit Data</h4>
	<hr><br>
          <form method=POST action=./aksi.php?module=tunjangan&act=update>
          <input type=hidden name=id value='$r[id_tunjangan]'>
          <table class='table table-bordered table-striped'>
          <tr><td>NIP</td><td> : <input type=text name='nip' value='$r[nip]' size=15 ></td></tr>
		  <tr><td>Nama Lengkap </td><td> : <input type=text name='nama' value='$r[nama]' size=15 ></td></tr>
<tr><td>Jabatan </td><td> : <input type=text name='jabatan' value='$r[jabatan]' size=15 ></td></tr>

<tr><td>  Tunjangan</td><td> : <input type=text name='tunjangan' value='$r[tnj]' size=15></td></tr>

		  	  		  
		  
          <tr><td colspan=2><input type=submit value=Update class='btn btn-primary'>
                            <input type=button value=Batal onclick=self.history.back() class='btn btn-warning'></td></tr>
          </table></form>";
		  ?>