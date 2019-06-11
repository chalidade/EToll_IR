
<!-- Tambah Modal-->
  <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="form-group ml-3 mr-3">
        	<form method="post" action="<?= base_url('main'); ?>">
               <input type="text" class="form-control form-control-user mt-3 mb-3" id="name" placeholder="Input Nama" name="nama">
               <input type="text" class="form-control form-control-user mt-3 mb-3" id="name" placeholder="Input RFID" name="rfid">
               <input type="number" class="form-control form-control-user mt-3 mb-3" id="name" placeholder="Input Saldo" name="saldo">
               <input type="submit" name="submit" class="btn btn-success">
             </form>
             
         </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>
</html>