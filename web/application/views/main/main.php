<div class="container pt-5">
<h3 class="text-center">Daftar User</h3>
<button class="btn btn-info float-right mb-2" data-toggle="modal" data-target="#tambahModal">Tambah User</button>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">RFID</th>
      <th scope="col">Nama</th>
      <th scope="col">Saldo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php

		foreach ($user -> result_array() as $value) {
			echo '	<tr>
      					<th scope="row">'.$value['ID'].'</th>
      					<td>'.$value['RFID'].'</td>
      					<td>'.$value['Nama'].'</td>
      					<td>'.$value['Saldo'].'</td>
      					<td><a href="'.base_url("main/topup/".$value['RFID']).'"><button class="btn btn-success">Top Up</button></a> <span class="mr-1"></span>
      						<a href="'.base_url("main/delete/".$value['RFID']).'"><button class="btn btn-danger">Delete</button></a></td>
    				</tr>';
		}

	?>
    
  </tbody>
</table>

<h4 class="text-center pt-5">Log</h4>
<a href="<?= base_url('main/clearlog'); ?>"><button class="btn btn-info float-right mb-2">Clear Log</button></a>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">RFID</th>
      <th scope="col">Nama</th>
      <th scope="col">Waktu</th>
    </tr>
  </thead>
  <tbody>
  	<?php

		foreach ($log -> result_array() as $value) {
			echo '	<tr>
      					<td>'.$value['RFID'].'</td>
      					<td>'.$value['Nama'].'</td>
      					<td>'.$value['Waktu'].'</td>
    				</tr>';
		}

	?>
    
  </tbody>
</table>		

</div>