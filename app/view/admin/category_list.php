<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Düzenlediğin Kategoriler</li>
      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-binoculars"></i> Düzenlediğin Kategoriler</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                 <th>Kategori Adı</th>
                                   <th>Kategori Açıklaması</th>
                                   <th>Kategori Numarası</th>
                                   <th>Kategoriyi Düzenle</th>
                                   <th>Kategoriyi Sil</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <?php
                                if ($sorgu ){
                                  foreach ( $sorgu as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['categoryName'] ?></td>
                                   <td><?php echo $row['categoryDescription'] ?></td>
                                   <td><?php echo $row['categoryType'] ?></td>
                                   <td><a style="color:#35d074;" href="<?php echo admin_url('category_edit/').permalink($row['categoryID']); ?>">Düzenle</a></td>
                                   <td>
                                   <form method="post">
                                       <button onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger btn-block"  type="submit" name="sil" value="<?php echo $row['categoryID']; ?>">Sil</button>
                                   </form>
                                 </tr>
                                  <?php }} ?>
                                  </td>
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
</div>



<?php require view('admin/static/footer'); ?>
