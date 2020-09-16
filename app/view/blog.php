<?php require view('static/sliderHeader'); ?>

       <div class="blog-page-back"> 
       <div class=" blog-page-text ">   
            <div class="container">
                <h2 class="blog-page-txt">BLOG</h2>
            </div>   
            <div class="list-img">
                <i class="fas fa-quote-left"></i>
            </div>      
       </div>   
    </div>
<!-- Header-End -->

<div class="container blog-page-content">
  <div class="container blog-page"> <img  src="<?php echo asset_url('img/blog/').$blogInfo['b_image']; ?>" alt="" srcset="" ></div>
  <h3><?php echo $blogInfo['title']; ?></h3>
  <p><?php echo htmlspecialchars_decode($blogInfo['text']); ?></p>
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-8 col-sm-8 col-8 etichet-blog">
                <h4>Etiketler</h4>           
                    <div class="tags blog-tags">
                        <ul style="margin-top: 80px;">
                            <li><a href="#"> <?php echo $blogInfo['tag']; ?> </a></li>
                        </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-4 etichet-blog-left">
                <h4>Paylaş</h4>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6 col-6 blog-share">            
                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=966242223397117&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fsharer%2Fsharer.php%3Fu%3Dhttps%253A%252F%252Fbagiskutusu.org&cancel_url=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Fclose_window%2F%3Fapp_id%3D966242223397117%26connect%3D0%23_%3D_&display=popup&locale=tr_TR"><i class="fab fa-facebook-f fb"></i></a>
                        <a href="https://twitter.com/intent/tweet?text=Ba%C4%9F%C4%B1%C5%9F%C3%A7%C4%B1%20ve%20kurumu%20bulu%C5%9Fturan%20adres&url=https://www.bagiskutusu.org"><i class="fab fa-twitter tw"></i></a>
                        <a href=""><i class="fab fa-linkedin-in in"></i></a>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-border"></div>

<!-- Comment -->
<!-- Contenedor Principal -->
<div class="comments-container">
    <h1>Yorumlar</h1>
    <?php if($commentList){
            foreach ($commentList as $value) { ?>
    <ul id="comments-list" class="comments-list">
        <li>
            <div class="comment-main-level">
                <!-- Avatar -->
                <div class="comment-avatar"><img src="<?php echo asset_url("/img/avatar.jpg"); ?>" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="comment-box">
                    <div class="comment-head">
                        <h6 class="comment-name"><?= $value['userName']; ?></h6>
                       <span><?= $value['date']; ?></span>
                       <form method="post"> 
                       <?php if($value['userID'] == session('user_id')) { ?>    
                       <button class="delButon"   value="<?php echo $value['commentID']; ?>" type="submit" id="delete"> <i class="fa fa-trash"></i></button>
                       <?php }?>
                       

                        <?php if(session('user_id')){
                     //Beğeni varsa direkt ekranda yeşil göstermek için       
                    $likeControl2 = $db->select('likeblog')
                    ->where('userID',session('user_id'))
                    ->where('commentID',$value['commentID'])
                    ->run(true);
                            ?>
                    <i class="fas fa-thumbs-up _begen <?php if($likeControl2){echo "active";} ?>" com-id="<?= $value['commentID']; ?>"></i>
                        <?php } ?>               
                    </form> 
                    </div>

                    <div class="comment-content">
                        <?= $value['comment']; ?>
                    </div>
                </div>
            </div>
    </ul>
    <?php }} ?>
</div>
<?php if(session("user_name")){ ?>
<div class="container blog-add-msg">
<div id="form-main">
    <div id="form-div">
      <form class="form" id="form1" method="post">
        <p class="text">
            <textarea class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Yorumunuz.." name="comment" required></textarea>
          </p>
          
          <div class="submit">
            <input type="submit" value="GÖNDER" name="comment_add" id="button-blue"/>
            <div class="ease"></div>
          </div>
        </form>
        
<!-- Ajax Başlangıç -->

<script>
  $('#delete').on('click',function(e){
                        //Ajax yorum silme
                        var del = $("#delete").val();
                        $.post(ajax_url,{'type':'deleteComment','delete':del},function(sonuc){
                            
                            if(sonuc == "ok"){
                                location.reload();
                                }else{
                                }
                                }, 'json');
                            e.preventDefault();
                        });

                        //Ajax yorum beğenme    
                        $('._begen').on('click',function(e){
                        var id = $(this).attr('com-id');
                        var btn = $(this);
                        $.post(ajax_url,{'type':'like','com_id':id},function(sonuc){
                            // console.log(sonuc);
                            if(sonuc == "begendi"){
                                btn.addClass('active');
                            
                            }else if(sonuc == "begenmedi"){
                                btn.removeClass("active");
                            }
                                }, 'json');
                            e.preventDefault();
                        });

                        //Ajax Yorum Ekleme
                            $('#button-blue').on('click',function(e){
                            var comment = $("#comment").val();
                            var blog_id = '<?php echo $blogInfo['blogID']; ?>';
                            $.post(ajax_url,{'type':'addComments','comment':comment,'blog_id':blog_id},function(sonuc){
                                //  console.log(sonuc);
                                if(sonuc == "ok"){
                                    location.reload();
                                }
                                    }, 'json');
                                e.preventDefault();
                            });
</script>
 <!-- Ajax - Bitiş -->
      </div>
</div>
</div>
<?php  } ?>

</div>


<?php require view('static/footer'); ?>