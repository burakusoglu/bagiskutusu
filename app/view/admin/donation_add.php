<?php require view('admin/static/header'); ?>



<div class="content-wrapper">
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo admin_url('donation_add'); ?>">Bağış</a>
        </li>
        <li class="breadcrumb-item active">Bağış Oluştur</li>
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


       <ul class="tab-menu">
         <li <?php if (url(2)==1 or url(2)==null) {echo 'class="current"';}  ?> ><a href="#tab1">Kişi Bazlı Maddi Yardım</a></li>
           <li <?php if (url(2)==3) {echo 'class="current"';}  ?>><a href="#tab3">Eşya Bağışı</a></li>
           <li <?php if (url(2)==4) {echo 'class="current"';}  ?>><a href="#tab4">Eşya+Maddi Yardım</a></li>
           <li <?php if (url(2)==5) {echo 'class="current"';}  ?>><a href="#tab5">Kurum Bazlı Maddi Yardım</a></li>

       </ul>
       <div class="tab-container" >
           <div id="tab1" class="tab-content" <?php if (url(2)==1 or url(2)==null) {echo 'style=""';}else{echo 'style="display:none;"';} ?>>
             <form action="" method="post" enctype="multipart/form-data">
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi İsmi:</label>
                       <input class="form-control" name="dName" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibin Adını Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Soyismi:</label>
                       <input class="form-control" name="dSname" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibinin Soyismini Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi TC:</label>
                       <input class="form-control" name="dTC" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibi TC Nosunu Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Doğum Yılı:</label>
                       <input class="form-control" name="dDate" type="text" min="1920" max="2021" maxlength="4" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibi Doğum Yılını Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Telefon Numarası:</label>
                       <input class="form-control" name="dPhone" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibi Telefon Numarasını Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Adresi:</label>
                       <input class="form-control" name="dAddress" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibi Adresini Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Başlığı Yazısı:</label>
                       <input class="form-control" name="dTitle" type="text" aria-describedby="nameHelp" placeholder="Bağış Başlığı Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="dContent" id="editor1"></textarea> 
              </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Toplanacak Tutar:</label>
                       <input class="form-control" name="dAmount" type="number"  min="1"  aria-describedby="nameHelp" placeholder="Toplanacak Tutarı Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Görsel:</label>
                       <input class="form-control" type="file" name="res">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                      <label for="inputState">Bağış Kategori</label>
                    <select id="inputState" class="form-control" name="category" required> 
                    <option value="0">Kategori Seçinizi</option>
                    <?php if($category1){
                      foreach ($category1 as $value) { ?>
                        <option value="<?=$value['categoryID']; ?>"><?=$value['categoryName']; ?></option>
                     <?php }} ?>
                      </select>
                     </div>
               </div>
             <div class="form-group">
               <div class="col-md-6">
                 <button class="btn btn-primary btn-block" type="submit" name="para" value="1">Oluştur</button>
               </div>
             </div>
             <div class="form-group">
               <div class="col-md-6">

           </div>
         </div>
             </form>


           </div>
           <div id="tab3" class="tab-content"  <?php if (url(2)==3) {echo 'style=""';}else{echo 'style="display:none;"';} ?> >
             <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Ürün Adı ve Miktarı:</label>
     <input class="form-control" name="uName" type="text" aria-describedby="nameHelp" placeholder="Ürün Adını ve Miktarını Giriniz.">                 </div>
               </div>
                    <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="uContent" id="editor1"></textarea>
              </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Görsel:</label>
                       <input class="form-control" type="file" name="uImg">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                      <label for="inputState">Bağış Kategori</label>
                    <select id="inputState" class="form-control" name="category" required> 
                    <option value="0">Kategori Seçinizi</option>
                    <?php if($category2){
                      foreach ($category2 as $value) { ?>
                        <option value="<?=$value['categoryID']; ?>"><?=$value['categoryName']; ?></option>
                     <?php }} ?>
                      </select>
                     </div>
               </div>
             <div class="form-group">
               <div class="col-md-6">
                 <button class="btn btn-primary btn-block" type="submit" name="urun" value="1">Oluştur</button>
               </div>
             </div>
             </form>
           </div>


           <div id="tab4" class="tab-content" <?php if (url(2)==4) {echo 'style=""';}else{echo 'style="display:none;"';} ?>>
             <form action="" method="post" enctype="multipart/form-data">
             <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi İsmi:</label>
                       <input class="form-control" name="iName" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibin Adını Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Soyismi:</label>
                       <input class="form-control" name="iSname" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibinin Soyismini Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi TC:</label>
                       <input class="form-control" name="iTC" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibi TC Nosunu Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Doğum Yılı:</label>
                       <input class="form-control" name="iDate" type="text" min="1920" max="2021" maxlength="4" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibi Doğum Yılını Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Telefon Numarası:</label>
                       <input class="form-control" name="iPhone" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibi Telefon Numarasını Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">İhtiyaç Sahibi Adresi:</label>
                       <input class="form-control" name="iAddress" type="text" aria-describedby="nameHelp" placeholder="İhtiyaç Sahibinin Adresini Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="iContent" id="editor1"></textarea> 
              </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Toplanacak Tutar:</label>
                       <input class="form-control" name="iAmount" type="number" min="1"  aria-describedby="nameHelp" placeholder="Toplanacak Tutarı Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Görsel:</label>
                       <input class="form-control" type="file" name="ires">
                 </div>
               </div>
                    <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Ürün Adı ve Miktarı:</label>
     <input class="form-control" name="iuName" type="text" aria-describedby="nameHelp" placeholder="Ürün Adını ve Miktarını Giriniz.">                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                      <label for="inputState">Bağış Kategori</label>
                    <select id="inputState" class="form-control" name="category" required> 
                    <?php if($category3){
                      foreach ($category3 as $value) { ?>
                        <option value="<?=$value['categoryID']; ?>"><?=$value['categoryName']; ?></option>
                     <?php }} ?>
                      </select>
                     </div>
               </div>

             <div class="form-group">
               <div class="col-md-6">
                 <button class="btn btn-primary btn-block" type="submit" name="pe" value="1">Oluştur</button>
               </div>
             </div>

             </form>
           </div>
    
    
           <div id="tab5" class="tab-content"  <?php if (url(2)==5) {echo 'style=""';}else{echo 'style="display:none;"';} ?> >
             <form action="" method="post" enctype="multipart/form-data">
             <div class="form-group">
                 <div class="col-md-6">
                    <label for="exampleInputName">Bağışı Açan Kurum:</label>
               <input class="form-control" name="kbName" type="text" aria-describedby="nameHelp" value="<?php echo $membership_info['societyName'] ?>" disabled ></div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Toplanacak Tutar:</label>
                       <input class="form-control" name="kbAmount" type="number"  min="1" oninput="validity.valid||(value='');" aria-describedby="nameHelp" placeholder="Toplanacak Tutarı Giriniz">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Başlığı Yazısı:</label>
                       <input class="form-control" name="kbTitle" type="text" aria-describedby="nameHelp" placeholder="Bağış Başlığı Giriniz">
                 </div>
               </div>
                    <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Açıklama:</label>
                          <textarea class="form-control" name="kbContent" id="editor1"></textarea> 
              </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                       <label for="exampleInputName">Bağış Hakkında Görsel:</label>
                       <input class="form-control" type="file" name="kbImg">
                 </div>
               </div>
               <div class="form-group">
                 <div class="col-md-6">
                      <label for="inputState">Bağış Kategori</label>
                    <select id="inputState" class="form-control" name="category" required> 
                    <option value="0">Kategori Seçinizi</option>
                    <?php if($category4){
                      foreach ($category4 as $value) { ?>
                        <option value="<?=$value['categoryID']; ?>"><?=$value['categoryName']; ?></option>
                     <?php }} ?>
                      </select>
                     </div>
               </div>
      
             <div class="form-group">
               <div class="col-md-6">
                 <button class="btn btn-primary btn-block" type="submit" name="dernek" value="1">Oluştur</button>
               </div>
             </div>

             </form>
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

<?php require view('admin/static/footer'); ?>
