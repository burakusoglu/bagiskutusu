<?php require view('static/sliderHeader'); ?>

       <div class="blog-back"> 

     
       <div class=" lists-text ">   
            <div class="container">
                <h2 class="list-txt">BLOGLAR</h2>
            </div>   
            <div class="list-img">
                <i class="fa fa-comments"></i>
            </div>      
       </div>   
    </div>
<!-- Header-End -->

<!-- Lists-Start -->
<div class="lists">
    <div class="col-md-12 col-sm-12 col-xs-12  lists-column-container">
        <div class="lists_header">
            <h2 class="section-title">BLOG LİSTELERİ</h2>
        </div>
        <div class="container">
        <div class="row sek" style="margin-top: 100px;">
    <?php if($blogList){
            foreach ($blogList as $value) { ?>
        <div class="col-xl-6 col-lg-6 _blog" style="display:flex; justify-content:center;">
            <div class="blog_area">
                <div id="#" class="blog_item">
                   <div class="blog_item_image">
                      <img  src="<?php echo asset_url('img/blog/').$value['b_image']; ?>" width="370" height="230" class="" alt="" sizes="(max-width:370px) 100vw,370px"></a> 
                   </div>
                </div>
                <div class="blog_item_content">
                    <div class="blog_item_content_header">
                        <h5 class="blog_item_content_title"> <a href="<?php echo site_url('blog/').$value['blogLink']; ?>"><?= $value['title']; ?></a></h5>
                    </div>
                    <div class="blog_item_content_date_area">
                        <span class="blog_item_content_date"> <a href="<?php echo site_url('blog/').$value['blogLink']; ?>" style="text-decoration: none;"> <?= $value['date']; ?>  </a></span>
                    </div>    
                </div>  
            </div>
        </div>
        <?php }} ?>
    </div>
    </div>


    </div>
</div>
<!-- Lists-End -->

<?php require view('static/footer'); ?>