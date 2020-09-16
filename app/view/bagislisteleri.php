<?php require view('static/sliderHeader'); ?>

<div class="lists-back">


    <div class=" lists-text ">
        <div class="container">
            <h2 class="list-txt">LİSTELER</h2>
        </div>
        <div class="list-img">
            <i class="fas fa-list"></i>
        </div>
    </div>
</div>
<!-- Header-End -->

<!-- Lists-Start -->
<div class="lists">
    <div class="col-md-12 col-sm-12 col-xs-12 lists-column-container">
        <div class="lists_header">
            <h2 class="section-title">BAĞIŞ LİSTELERİ</h2>
            <h4 class="section-subtitle">Listeler</h4>
        </div>
        <!-- Filter List -->
        <ul id="lists-filter">
            <li><a href="#filter" class="selected" data-filter="*">Hepsi </a> </li>
            <?php if ($category) {
                foreach ($category as $value) {
            ?>
                    <li><a href="#filter" data-filter=".sort-<?php echo permalink($value['categoryName']); ?>"><?php echo $value['categoryName']; ?> </a> </li>
            <?php }
            } ?>
        </ul>

        <div class="container">
            <div class="row" id="causes-list">

                <?php if ($donateList) {
                    foreach ($donateList as $value) { ?>
                        <div class="col-md-4  <?php echo "sort-" . permalink($value['categoryName']); ?> cause-item list-item">
                            <div class="list">

                                <form method="post">
                                    <?php if (session("user_name")) { ?>
                                        <div id="followDonate" style="border:none; background:none;" class="btnDonate"><span class="like">
                                                <?php if (session('user_id')) {
                                                    //Beğeni varsa direkt ekranda yeşil göstermek için       
                                                    $favControl2 = $db->select('favorite')
                                                        ->where('userID', session('user_id'))
                                                        ->where('donatelistID', $value['donateListID'])
                                                        ->run(true);

                                                ?>
                                                    <i style="cursor:pointer;" class="fas fa-heart _favH  <?php if ($favControl2) {
                                                                                                                echo "active";
                                                                                                            } ?>" donate-id="<?= $value['donateListID']; ?>"></i>
                                                <?php } ?>
                                                </i></span> </div>

                                        <input type="hidden" name="donateList" id="donateList"></input>
                                    <?php } ?>
                                    <?php
                                    //toplam bağış hesabı
                                    $toplam = 0;
                                    $totalValue = $db->select('donate')
                                        ->where('donatelistID', $value['donateListID'])
                                        ->join('donater', '%s.donaterID = %s.donaterID')
                                        ->run();
                                    foreach ($totalValue as $value2) {
                                        $toplam += $value2['moneyAmount'];
                                    }
                                    //yüzdelikli bağış hesabı
                                    @$percent = ($toplam) / $value['donateAmount'] * 100;
                                    $type = $db->select('donatelist')
                                         ->join('category', '%s.categoryID = %s.categoryID')
                                        ->where('donatelistID', $value['donateListID'])
    
                                        ->run(true);

                                    ?>
                                </form>
                                <div class="img-wrapper">
                                    <img src="<?php echo asset_url('img/donation/') . $value['donateImage']; ?>" alt="" class="img-responsive" style="height:250px;">
                                    
                                    <div class="list-btn-wrapper">
                                        <!-- bağış kapandıysa linke tıklamama olayı -->
                                        <a class="base-btn-icon btn_colored" href="<?php if ($toplam >= $value['donateAmount']) {
                                                    if($type['categoryType'] == 2 ){
                                                        echo site_url('bagisformu/') . $value['donateLink'];
                                                    }else{
                                                        echo "";
                                                    }
                                                } else {
                                                    echo site_url('bagisformu/') . $value['donateLink'];
                                                    } ?>">
                                            <i class="fas fa-gift"></i>
                                            <span> <?php if ($toplam >= $value['donateAmount']) {
                                                    if($type['categoryType']  == 2 ){
                                                        echo "Bağış Yap";
                                                    }else{
                                                        echo "Kapandı";
                                                    }
                                                } else {
                                                        echo "Bağış Yap";
                                                    } ?></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-content">

                                    <h4><?= $value['donateName']; ?></h4>
                                    <p><?= htmlspecialchars_decode($value['donateDescription']); ?></p>
                                    <?php if ($type['categoryType'] != 2) { ?>
                                        <div class="raised-text">
                                            <h6>Toplanan: <?= $toplam ?> TL<span>Toplam: <?= $value['donateAmount']; ?> TL </span></h6>
                                        </div>
                            
                                    
                                    <div class="loading-bar">
                                        <div style="width:<?php echo floor($percent); ?>%;" class="loading-bar_progress loading-bar--html load"></div>
                                    </div>
                                            <?php } ?>
                                    <div class="card-meta">
                                        <div class="row">
                                            <div class="col-6 card-meta-left">
                                                <a href="<?php echo site_url('kurum/') . $value['societyLink']; ?>"><img src="<?php echo asset_url('img/society/') . $value['societyImage']; ?>" alt="" srcset=""></a>
                                                <ul>
                                                    <li><?= $value['societyName']; ?></li>
                                                    <li><?= $value['donateOpenDate']; ?></li>
                                                </ul>
                                            </div>
   <?php if ($type['categoryType'] != 2) { ?>
                                            <div class="col-6 card-meta-right">
                                                <ul>
                                                    <li><?php echo floor($percent); ?> %</li>
                                                    <li>Doldu</li>
                                                </ul>
                                            </div>
                                              <?php } ?>
                                                 <?php if ($type['categoryType'] == 2) { ?>
                                            <div class="col-6 card-meta-right">
                                                <ul>
                                                    <li> Eşya</li>
                                                    <li>Bağışıdır</li>
                                                </ul>
                                            </div>
                                              <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
            <!-- Ajax Fav Ekleme - Bitiş -->
            <script>
                $('._favH').on('click', function(e) {
                    var dl = $(this).attr('donate-id');
                    // console.log(dl);
                    var btn = $(this);
                    $.post(ajax_url, {
                        'type': 'followDonate',
                        'donateList': dl
                    }, function(sonuc) {
                        // console.log(sonuc);
                        if (sonuc == "fav") {
                            btn.addClass('active');
                            // console.log(sonuc);

                        } else if (sonuc == "nofav") {
                            btn.removeClass("active");
                        }
                    }, 'json');
                    e.preventDefault();
                });
            </script>
            <!-- Ajax Fav Ekleme - Bitiş -->
        </div>
    </div>
</div>
<!-- Lists-End -->

<?php require view('static/footer'); ?>