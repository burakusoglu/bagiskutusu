<?php if(session('login')): ?>
<footer class="sticky-footer" style="background-color:white">
  <div class="container">
    <div class="text-center">
      <small style="color: white">Telif Hakları Saklıdır | bagiskutusu.org </small>
    </div>
  </div>
</footer>
<?php endif; ?>

<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Çıkış Yap</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Oturumu Kapatılsın mı ?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Hayır</button>
        <form method="post">
          <button class="btn btn-primary" type="submit" name="_oturum" value="1">Evet</button>
          <?php
            if (post('_oturum')) {
              unset($_SESSION['login']);
              unset($_SESSION['admin_id']);
              unset($_SESSION['admin_name']);
              session_destroy();
              header('Refresh:0;');
            }
           ?>
        </form>

      </div>
    </div>
  </div>
</div>



<script src="<?php echo admin_asset_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo admin_asset_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<script src="<?php echo admin_asset_url('vendor/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo admin_asset_url('vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>
<script src="<?php echo admin_asset_url('js/sb-admin.min.js'); ?>"></script>
<script src="<?php echo admin_asset_url('js/sb-admin-datatables.min.js'); ?>"></script>
<script src="<?php echo admin_asset_url('js/bootstrap-tagsinput.js'); ?>"></script>
<script src="<?php echo admin_asset_url('js/dropzone.js'); ?>"></script>
<script>

 Dropzone.options.addPhotosForm = {
        paramName: 'file',
        acceptedFiles: '.jpg, .jpeg, .png, .JPEG, .PNG, .JPG',
        maxFilesize: 4,
    }
</script>
</body>

</html>
