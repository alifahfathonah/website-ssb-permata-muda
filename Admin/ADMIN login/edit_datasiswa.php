<body bgcolor="#CCCCCC">
<h2>
<p align="center">EDIT DATA
<?php
    include('../../koneksi.php');
    if(isset($_GET['no'])){
        $ni     = $_GET['no'];
        $query  = mysqli_query($koneksi,'select * from registerr where no = "'.$ni.'"');
        $data   = mysqli_fetch_array($query);
        $nama   = $data['nama_ortu'];
        $no   = $data['no_sim'];
        $alamat  = $data['alamat'];
        $hp = $data['no_hp'];
        $email = $data['email'];
        $anak = $data['nama_anak'];
        $tanggal = $data['tanggal_lahir'];
    }
    else{
    $nama = '';
    $sim= '';
    $alamat = '';
    $hp = '';
    $email = '';
    $anak = '';
    $tanggal = '';
    }

?>
</p></h2>
<form method="post" name="frm" action="edit_register.php">
<table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
  <!--DWLayoutTable-->
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">No</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="no" value="<?php echo $_GET['no']; ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama Orangtua</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="Nama" value="<?php echo $nama_ortu; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">No Sim/No Ktp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Posisi" type="text" size="50" value="<?php echo $no_sim; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
    <input type="varchar" Name="Kelompok_umur" size="10" value="<?php echo $alamat; ?>">
    </label></td>
  </tr>
<tr>
    <td height="27" align="right" valign="middle">No Hp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Posisi" type="text" size="50" value="<?php echo $no_hp; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Emailp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Posisi" type="text" size="50" value="<?php echo $email; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama Anakp</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Posisi" type="text" size="50" value="<?php echo $nama_anak; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Tanggal Lahir</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Posisi" type="text" size="50" value="<?php echo $tanggal_lahir; ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="tedit" value="EDIT"></td>
  </tr>
</table>
</form>
 