<?php require view('admin/static/header'); ?>

<div class="content-wrapper">
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo admin_url('donation_list'); ?>">Bağışların Hakkında</a>
        </li>
        <li class="breadcrumb-item active">Bağış Düzenle</li>
      </ol>
      <div class="row">
        <div class="col-12 text-align">
        <div class="row text-center">
       <div class="col-md-12">
         <?php
         if (isset($error)) {
           echo danger($error);
         }
         if (isset($success)) {
           echo success($success);
         }
         ?>

       </div>
     </div>
      <div class="row">
        <div class="col-12 text-align">
          <?php
          $kontrol = $db->select('donatelist')
                        ->join('category', '%s.categoryID = %s.categoryID')
                        ->where('donateListID',$id)
                        ->run(true);
           ?>
          <?php if ($kontrol['categoryType']==1): ?>
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Başlığı Yazısı:</label>
                       <input class="form-control" name="dTitle" type="text" aria-describedby="nameHelp" placeholder="Bağış Başlığı Giriniz" value="<?php echo $kontrol['donateName']; ?>">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="dContent" id="editor1"><?php echo $kontrol['donateDescription']; ?> </textarea> 
              </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Toplanacak Tutar:</label>
                       <input class="form-control" name="dAmount" type="number"  min="1"  aria-describedby="nameHelp" placeholder="Toplanacak Tutarı Giriniz" value="<?php echo $kontrol['donateAmount']; ?>">
                 </div>
               </div>
          <div class="form-group">
            <div class="col-md-6">
              <button class="btn btn-primary btn-block" type="submit" name="para_edit" value="1">Düzenle</button>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
        </div>
      </div>
          </form>
            <?php endif; ?>

              <?php if ($kontrol['categoryType']==2): ?>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Ürün Adı ve Miktarı:</label>
     <input class="form-control" name="uName" type="text" aria-describedby="nameHelp" placeholder="Ürün Adını ve Miktarını Giriniz."  value="<?php echo $kontrol['donateName']; ?>"></div>
               </div>
                    <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="uContent" id="editor1"><?php echo $kontrol['donateDescription']; ?></textarea> 
              </div>
               </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button class="btn btn-primary btn-block" type="submit" name="mal_edit" value="1">Düzenle</button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                </div>
                </div>
                </form>
              <?php endif; ?>
                <?php if ($kontrol['categoryType']==3): ?>
                  <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="iContent" id="editor1" > <?php echo $kontrol['donateDescription']; ?> </textarea> 
              </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Toplanacak Tutar:</label>
                       <input class="form-control" name="iAmount" type="number" min="1"  aria-describedby="nameHelp" placeholder="Toplanacak Tutarı Giriniz" value="<?php echo $kontrol['donateAmount']; ?>">
                 </div>
               </div>
                    <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Ürün Adı ve Miktarı:</label>
     <input class="form-control" name="iuName" type="text" aria-describedby="nameHelp" placeholder="Ürün Adını ve Miktarını Giriniz." value="<?php echo $kontrol['donateName']; ?>">                  </div>
               </div>
                  <div class="form-group">
                    <div class="col-md-6">
                      <button class="btn btn-primary btn-block" type="submit" name="pm_edit" value="1">Düzenle</button>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6">
                </div>
              </div>
                  </form>
                <?php endif; ?>

                <?php if ($kontrol['categoryType']==4): ?>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                 <div class="col-md-6">
                    <label for="exampleInputName">Bağışı Açan Kurum:</label>
               <input class="form-control" name="kbName" type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyName'] ?>" disabled ></div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Toplanacak Tutar:</label>
                       <input class="form-control" name="postAmount" type="number"  min="1" oninput="validity.valid||(value='');" aria-describedby="nameHelp" placeholder="Toplanacak Tutarı Giriniz" value="<?php echo $kontrol['donateAmount']; ?>">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Başlığı Yazısı:</label>
                       <input class="form-control" name="postName" type="text" aria-describedby="nameHelp" placeholder="Bağış Başlığı Giriniz" value="<?php echo $kontrol['donateName']; ?>">
                 </div>
               </div>
                    <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="postText" id="editor1"> <?php echo $kontrol['donateDescription']; ?> </textarea> 
              </div>
               </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <button class="btn btn-primary btn-block" type="submit" name="kurum_edit" value="1">Düzenle</button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                </div>
                </div>
                </form>
              <?php endif; ?>

        </div>
      </div>
    </div>
    <script>
                    // Replace the <textarea id="editor1"> with a CKEditor
                    // instance, using default configuration.
                    CKEDITOR.replace( 'editor1' );
    </script>


<?php require view('admin/static/footer'); ?>
