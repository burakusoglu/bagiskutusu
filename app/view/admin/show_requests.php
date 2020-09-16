<?php require view('admin/static/header'); ?>


<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Aktif Talepleri Görüntüle</li>
      </ol>
        <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-bullhorn"></i> Aktif Olan Talep Listeleri</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                   <th>Talebi Oluşturan Kişinin İsmi</th>
                                   <th>Mail Adresi</th>
                                   <th>Telefon Numarası</th>
                                   <th>Şehir</th>
                                   <th>Talep Oluşturulma Tarihi</th>
                                   <th>Talep Devir Alma Kutusu</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <?php
                                if ( $request ){
                                  foreach ( $request as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['requestName'] ?></td>
                                   <td><?php echo $row['requestMail'] ?></td>
                                   <td><?php echo $row['requestPhone'] ?></td>
                                   <td><?php echo $row['name'] ?></td>
                                   <td><?php echo $row['requestDate'] ?></td>
                                
                                   <form method="post">
                                       <td><button onclick="return confirm('Talebi Üzerinize Almak İstediğinize Emin Misiniz?')" type="submit"  class="btn btn-dark" name="addRequest" value="<?php echo $row['requestID']._token($row['requestID'],false); ?>">Talebi Üzerine Al</button></td>
                                   </form>
                                 </tr>
                                  <?php }} ?>
                               </tbody>
                             </table>
                           </div>
                         </div>

                       </div>
                     </div>


                 </form>
               </div>

           </div>
       </div>
        </div>
      </div>
    </div>
    <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'editor1' );
    </script>
      </div>
</div>
  
        </div>
    </div>



<?php require view('admin/static/footer'); ?>
