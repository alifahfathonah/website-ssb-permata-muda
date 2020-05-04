<div class="siswa">
	<!DOCTYPE html>
	<html>
	<head>
		<title>Kelompok tim</title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h1>Siswa SSB Permata</h1></center>

		<table id="t01">
      <tbody>
    <thead>
    <tr>
    <th>Nama</th>
    <th>Posisi</th> 
    <th>Kelompok Umur</th>
          </tr>
          </thead>
    <?php
  include('koneksi.php');
   $sql = $sql  = 'select * from data_siswa';
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($koneksi,$sql) or die(mysqli_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      //jika data kosong, maka akan menampilkan row kosong
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      $no = 1 ;  //membuat variabel $no untuk membuat nomor urut
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database

                
          
          echo '<tr>';
          
          
          
          echo '<td>'.$data['Nama'].'</td>'; 
          echo '<td>'.$data['Posisi'].'</td>'; 
          echo '<td>'.$data['Kelompok_umur'].'</td>';
      
		
        
        $no++;  
        
      }
      
    }
  ?>  
</tbody>
		</table>
	</body>
	</html>
	
	</pre>
</form>
</div>

