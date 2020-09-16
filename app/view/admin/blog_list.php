<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Yayınladığın Blog Yazıları</li>

      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-comment"></i> Yayınladığın Blog Yazıları</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                   <th>Blog Başlığı</th>
                                   <th>Blog İçeriği</th>
                                   <th>Blog Resmi</th>
                                   <th>Blog Etiketleri</th>
                                   <th>Blog Yayınlanma Tarihi</th>
                                   <th>Blog İçeriğini Düzenle</th>
                                 </tr>
                               </thead>
                               <tbody>
                               <?php
                                if ( $sorgu ){
                                  foreach ( $sorgu as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['title'] ?></td>
                                   <td><?php echo htmlspecialchars_decode($row['text']) ?></td>
                                   <td><img style="width:50%;" src="<?=asset_url('img/blog/').$row['b_image']; ?>"></td>
                                   <td><?php echo $row['tag'] ?></td>
                                   <td><?php echo $row['date'] ?></td>
                                   <td><a style="color:#35d074;" href="<?php echo admin_url('blog_edit/').$row['blogID']; ?>">Düzenle</a></td>
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
</div>



<?php require view('admin/static/footer'); ?>
