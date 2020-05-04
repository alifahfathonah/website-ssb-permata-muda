<?php
$date = '03/18/2015';
$today = date('m/d/Y', strtotime("Now"));

?>
<center><h2> Form Pendaftaran</h2></center>

<div class="regis">
	<form action= "database/simpan.php" method="POST">
<div>
            <label>Nama Orang Tua</label>
            <input type="text" name="nama" id="nama" required />
        </div>
<div>
            <label>No. KTP / SIM Orang Tua</label>
            <input type="text" name="sim" id="sim" required />
        </div>
<div>
            <label>Alamat Rumah</label>
            <input type="text" name="alamat" id="alamat" required />
        </div>
	
<div>
            <label>Nomor HP</label>
            <input type="text" name="hp" id="hp"  required />
        </div>
    
<div>
            <label>Email</label>
            <input  type="email" name="email" id="email" required />
        </div>

    
<div>
            <label>Nama Pemain (Anak Kami)</label>
            <input type="text" name="anak" id="anak"  required />
        </div>
<div>
    <label>Tanggal lahir pemain (anak kami)</label>
    <input type="date" name="tanggal"  required>
</div>
<input type="hidden"  value="belum" name="berkas" id="berkas"  />


<input type="submit" value="submit" name="submit" class="tombol">

<input type="reset" name="delete" class="tombol">
</div>
</form>
    	
</pre>
</form>
</div>

