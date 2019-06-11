<div class="container pt-5">
<div class="card col-lg-7 mx-auto">
  <div class="card-body">
    <h4 class="text-center">Top Up</h4>
    <label>RFID : </label><br>
    <form method="post" action="<?= base_url('main/topup/'.$user['RFID'])?>">
    <input type="text" name="rfid" value="<?= $user['RFID']; ?>" class="form-control form-control-user" readonly><br>
    <label>Nama : </label><br>
    <input type="text" name="nama" value="<?= $user['Nama']; ?>" class="form-control form-control-user" readonly><br>
    <label>Topup : </label><br>
    <input type="text" name="topup" value="" class="form-control form-control-user"><br>
    <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Submit">
   </form>
   </div>
</div>

</div>