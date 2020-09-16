<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="<?php echo admin_url('index'); ?>">Anasayfa</a>
        </li>
        <li class="breadcrumb-item active">Bağışların Hakkında</li>
      </ol>
      <div class="row">
               <div class="col-12 text-align">
                 <div class="card mb-3">
                         <div class="card-header">
                           <i class="fa fa-bell"></i> Düzenlediğin Bağışlar</div>
                         <div class="card-body">
                           <div class="table-responsive">
                             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                 <tr>
                                 <th>Bağış Kategorisi</th>
                                 <th>Bağış Resmi</th>
                                 <th>Bağış İsmi</th>
                                 <th>Toplanan Eşya Miktarı</th>
                                 <th>Bağış Açılış Miktarı</th>
                                 <th>Toplanan Bağış Miktarı</th>
                                 <th>Bağış Açılış Tarihi</th>
                                 <th>Bağış Hakkında</th>
                                 <th>Düzenle</th>
                                 <th>Sil</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <?php
                                if ($sorgu ){
                                  foreach ( $sorgu as $row ){

                                    $countMoney = $db->select('donate')
                                    ->join('donater', '%s.donaterID = %s.donaterID')
                                    ->where("donateListID",$row['donateListID'])
                                    ->run();
                                    $toplam = 0;
                                    foreach ($countMoney as $value) {
                                      $toplam +=$value['moneyAmount'];
                                    }
                                    $countEsya = $db->select('donate')
                                    ->join('donater', '%s.donaterID = %s.donaterID')
                                    ->where("donateListID",$row['donateListID'])
                                    ->run();
                                    $toplam2 = 0;
                                    foreach ($countEsya as $value2) {
                                      $toplam2 +=$value2['itemCount'];
                                    }
                                    ?>
           
                                 <tr>
                                   <td><?php echo $row['categoryName'] ?></td>
                                   <td><img style="width:100%;" src="<?=asset_url('img/donation/').$row['donateImage']; ?>"></td>
                                   <td><?php echo $row['donateName'] ?></td>
                                   <td><?php echo $toplam2 ?></td>
                                   <td><?php echo $row['donateAmount'] ?></td>
                                   <td><?php echo $toplam; ?></td>
                                   <td><?php echo $row['donateOpenDate'] ?></td>
                                   <td><?php echo htmlspecialchars_decode($row['donateDescription']) ?></td>
                                   <td><a style="color:#35d074;" href="<?php echo admin_url('donation_edit/').permalink($row['donateListID']); ?>">Düzenle</a></td>
                                   <td>
                                   <form method="post">
                                       <button onclick="return confirm('Silmek istediğinizden emin misiniz?')" class="btn btn-danger btn-block"  type="submit" name="sil" value="<?php echo $row['donateListID']; ?>">Sil</button>
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



<?php require view('admin/static/footer'); ?>
