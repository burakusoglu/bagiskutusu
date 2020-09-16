<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Siteden Gelen Mesajlar</li>
      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                         <i class="fa fa-bullhorn"></i> Mesajlar</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                 <th>İsim</th>
                                   <th>Mail</th>
                                   <th>Mesaj</th>
                                   <th>IP</th>
                                   <th>Sil</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <?php
                                if ($sorguM ){
                                  foreach ( $sorguM as $row ){
                                    ?>
                                 <tr>
                                   <td><?php echo $row['cName'] ?></td>
                                   <td><?php echo $row['cMail'] ?></td>
                                   <td><?php echo $row['message'] ?></td>
                                   <td><?php echo $row['cIp'] ?></td>
                                   <td>
                                   <form method="post">
                                       <button onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger btn-block"  type="submit" name="sil" value="<?php echo $row['contactID']; ?>">Sil</button>
                                   </form>
                                   </td>
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
