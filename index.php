<?php $_SESSION['halaman'] = 1; ?>
<!doctype html>
<html lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-92800032-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-92800032-1');
    </script>

    <?php if(isset($base_href) && !empty($base_href)) echo '<base href="'.$base_href.'">'; ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <?php
    if(isset($meta_description) && !empty($meta_description)) echo '<meta name="description" content="'.$meta_description.'" /> ';
    if(isset($meta_keywords) && !empty($meta_keywords)) echo '<meta name="keywords" content="'.$meta_keywords.'" /> ';
    if(isset($meta_og_image) && !empty($meta_og_image)) echo '<meta property="og:image" content="'.$meta_og_image.'" />';
    ?>


    <link rel="shortcut icon" type="image/x-icon" href="assets/images/img_icon.ico" />
    <!-- <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> -->

    <title><?php if(isset($page_title)) echo $page_title; ?></title>


    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "<?php echo $info_per["nama_pt"]; ?>",
      "url": "<?php echo ROOT_URL; ?>",
      "contactPoint": [{
        "@type": "ContactPoint",
        "email": "<?php echo $info_per["email"]; ?>",
        "telephone": "+<?php echo $info_per["telp"]; ?>",
        "contactType": "customer service"
      }]
    }
    </script>    
</head>

<body>
<?php require_once 'views/home/popup.php';?> 
<!--<?php //require_once 'views/home/snowfalls.php';?> -->
<?php
if(isset($bennersaddspopup) && is_array($bennersaddspopup) && count($bennersaddspopup) > 0){
    foreach ($bennersaddspopup as $banners) {
?>
<div class="popup-wrap">
    <div class="popup">       
        <div class="popup-timer">
            <span class="seconds"></span>s
        </div>
        <a href="<?php echo $banners['url_linkspopup']; ?>"><img src="<?php echo $banners['url_gbrpopup']; ?>" class="photoautoss"></a>
        <div class="btn-close">&times;</div>
    </div>
</div>
<?php
   }
}
?>

<div class="wrapper">
    <div class="isi">
        <?php require_once 'views/header.php'; ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div id="container_intro_main_slider" class="col span_20_of_24">
                    <?php require_once "views/includes/slider_main.php"; ?>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <div class="popupBannertoolstip"> 
            <div class="popupInnertoolstip"> 
                <div class="popupContenttoolstip">
                    <!-- <img id="hidepopup" class="tooltipshop" src="assets/images/Registryeeshoparrows.png"> -->
                    <img id="hidepopup" class="tooltipshop" src="assets/images/registryeeshoper.png">
                </div>
            </div>
        </div>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_4_of_24 filler_col"></div>
                <div class="col span_4_of_24 col_mobile_first span_mobile_5_of_24"> 
                    <div class="carousel-cellss">
                        <a href="<?php echo $url_iso_country; ?>/newsfeed/">
                            <div class="img_menuss img_menuss_row2" style="background-image: url('<?php echo $data_thumbnail['article']; ?>');"></div>
                        </a>
                            <div class="contentss">
                                <a class="paragss" href="<?php echo $url_iso_country; ?>/newsfeed/"><p class="txt-tiga txt_mobile_3">NEWSFEED</p></a>
                            </div>
                    </div>
                </div>
                <div class="col span_3_of_24 filler_col spacer_16 mobile_col"></div>

                <div class="col span_4_of_24 col_mobile_first span_mobile_5_of_24">                    
                    <div class="carousel-cellss">
                        <a href="<?php echo $url_iso_country; ?>/magazine/">
                            <div class="img_menuss img_menuss_row1" style="background-image: url('<?php echo $data_thumbnail['magazine']; ?>');"></div>
                        </a>
                        <div class="contentss">
                            <a class="paragss" href="<?php echo $url_iso_country; ?>/magazine/"><p class="txt-satu txt_mobile_1">BOOKSHELF</p></a>
                        </div>
                    </div>
                </div>
                <div class="col span_3_of_24 filler_col spacer_16 mobile_col"></div>

                <div class="col span_4_of_24 col_mobile_first span_mobile_5_of_24">                    
                    <div class="carousel-cellss">
                        <a href="<?php echo $url_iso_country; ?>/specialoffers/">
                            <div class="img_menuss img_menuss_row3" style="background-image: url('<?php echo $data_thumbnail['specialoffers']; ?>');"></div>
                        </a>
                        <div class="contentss">
                            <a class="paragss" href="<?php echo $url_iso_country; ?>/specialoffers/"><p class="txt-empat txt_mobile_4 ">OFFERS</p></a>

                        </div>
                    </div>
                </div>
                <div class="col span_3_of_24 filler_col spacer_16 mobile_col"></div>

                <div class="col span_4_of_24 col_mobile_first span_mobile_5_of_24">                    
                    <div class="carousel-cellss">
                        <a href="https://registrye-shop.com/">
                            <div class="img_menuss img_menuss_row4" style="background-image: url('<?php echo $data_thumbnail['store']; ?>');"></div>
                        </a>
                        <div class="contentss">
                            <a class="paragss" href="https://registrye-shop.com/"><p class="txt-dua txt_mobile_2">E-SHOP</p></a>
                        </div>
                    </div>
                </div>
                <div class="col span_3_of_24 filler_col spacer_16 mobile_col"></div>
            </div>
        </div>
           <!-- carsd Newsfeed -->
        <?php
            if(isset($sectionnewsfeedhome) && is_array($sectionnewsfeedhome) && count($sectionnewsfeedhome) > 0){
                foreach ($sectionnewsfeedhome as $items) {
        ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                     <img class="icons_border" src="assets/images/icon-border.jpg">
                    <div class="home_section_title">
                        <div class="line-style2"></div>
                        <div class="juduls"><?php echo $items["judul_section_article"];?></div>
                    </div>
                    <p class="deksripsi"><?php echo $items["deksripsi_section_article"];?><br/></p>

                    <p class="judul-deksripsi"><?php echo $items["title_section_article"];?></p>

                    <a class="link-more" href="<?php echo $url_iso_country; ?>/newsfeed/">View All</a>
                </div>

                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 
        <div class="section group">
            <div class="inner_section row_carousel_news_deks" id="row_carousel_news">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <div class="carousel">
                        <?php
                        foreach ($homeartikel as $artikel) {
                            $articletype = $artikel["stat"];
                            if($articletype==1){
                                $str_main_cat = "Latest Luxury";
                                $midurl = 'latest-luxury';
                            }
                            if($articletype==2) {
                                $str_main_cat = "Wine & Dine";
                                $midurl = 'wine-dine';
                            }
                            if($articletype==3){
                                $str_main_cat = "Travel"; //"Happening";
                                $midurl = 'travel';
                            }
                            if($articletype==4) {
                                $str_main_cat = "People & Events";
                                $midurl = 'people-events';
                            }
                            if($articletype==5) {
                                $str_main_cat = "Inspiring & People";
                                $midurl = 'inspiring-people';
                            }
                            if($articletype==6) {
                                $str_main_cat = "Promotions";
                                $midurl = 'promotions';
                            }
                                $shortUrl = $url_iso_country.'/newsfeed/'.$midurl.'/'.$artikel["url_kat"].'/'.$artikel["id"].'/'.$artikel["url_judul"].'.html';
                            ?>
                            <div class="carousel-cell">
                                <a href="<?php echo $shortUrl; ?>"><div class="sliderText" style="background-image: url('<?php echo $artikel['url_gbr']; ?>');">
                                    <!-- <img src="<?php //echo $artikel["url_gbr"];?>"> -->
                                </div></a>
                                <div class="content">
                                    <a class="parag" href="<?php echo $shortUrl; ?>"><p><?php echo $artikel["judul"];?></p></a>
                                    <a class="button" href="<?php echo $shortUrl; ?>">Explore Now</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <?php
            }
        }
        ?>
        
        <?php
            if(isset($sectionnewsfeedhomerowtwo) && is_array($sectionnewsfeedhomerowtwo) && count($sectionnewsfeedhomerowtwo) > 0){
                foreach ($sectionnewsfeedhomerowtwo as $items) {
        ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                     <!-- <img class="icons_border" src="assets/images/icon-border.jpg"> 
                    <div class="home_section_title">
                        <div class="line-style2"></div>
                        <h2><?php //echo $items["judul_section_articlerowtwo"];?></h2>
                    </div>
                    <p class="deksripsi"><?php //echo $items["deksripsi_section_articlerowtwo"];?><br/></p>-->

                    <p class="judul-deksripsi"><?php echo $items["title_section_articlerowtwo"];?></p>

                    <a class="link-more" href="<?php echo $url_iso_country; ?>/newsfeed/">View All</a>
                </div>

                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 
        <div class="section group">
            <div class="inner_section row_carousel_news_deks" id="row_carousel_news">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <div class="carousel">
                        <?php
                        foreach ($homeartikelrowtwo as $artikelrowtwo) {
                            $articletype = $artikelrowtwo["stat"];
                            if($articletype==1){
                                $str_main_cat = "Latest Luxury";
                                $midurl = 'latest-luxury';
                            }
                            if($articletype==2) {
                                $str_main_cat = "Wine & Dine";
                                $midurl = 'wine-dine';
                            }
                            if($articletype==3){
                                $str_main_cat = "Travel"; //"Happening";
                                $midurl = 'travel';
                            }
                            if($articletype==4) {
                                $str_main_cat = "People & Events";
                                $midurl = 'people-events';
                            }
                            if($articletype==5) {
                                $str_main_cat = "Inspiring & People";
                                $midurl = 'inspiring-people';
                            }
                            if($articletype==6) {
                                $str_main_cat = "Promotions";
                                $midurl = 'promotions';
                            }
                                $shortUrl = $url_iso_country.'/newsfeed/'.$midurl.'/'.$artikelrowtwo["url_kat"].'/'.$artikelrowtwo["id"].'/'.$artikelrowtwo["url_judul"].'.html';
                            ?>
                            <div class="carousel-cell">
                                <a href="<?php echo $shortUrl; ?>"><div class="sliderText" style="background-image: url('<?php echo $artikelrowtwo['url_gbr']; ?>');">
                                    <!-- <img src="<?php //echo $artikelrowtwo["url_gbr"];?>"> -->
                                </div></a>
                                <div class="content">
                                    <a class="parag" href="<?php echo $shortUrl; ?>"><p><?php echo $artikelrowtwo["judul"];?></p></a>
                                    <a class="button" href="<?php echo $shortUrl; ?>">Explore Now</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <?php
            }
        }
        ?>
        <!-- row three -->
         <?php
            if(isset($sectionnewsfeedhomerowthree) && is_array($sectionnewsfeedhomerowthree) && count($sectionnewsfeedhomerowthree) > 0){
                foreach ($sectionnewsfeedhomerowthree as $items) {
        ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <p class="judul-deksripsi"><?php echo $items["title_section_articlerowthree"];?></p>

                    <a class="link-more" href="<?php echo $url_iso_country; ?>/newsfeed/">View All</a>
                </div>

                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 
        <div class="section group">
            <div class="inner_section row_carousel_news_deks" id="row_carousel_news">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <div class="carousel">
                        <?php
                        foreach ($homeartikelrowtheree as $homeartikelrowtheree) {
                            $articletype = $homeartikelrowtheree["stat"];
                            if($articletype==1){
                                $str_main_cat = "Latest Luxury";
                                $midurl = 'latest-luxury';
                            }
                            if($articletype==2) {
                                $str_main_cat = "Wine & Dine";
                                $midurl = 'wine-dine';
                            }
                            if($articletype==3){
                                $str_main_cat = "Travel"; //"Happening";
                                $midurl = 'travel';
                            }
                            if($articletype==4) {
                                $str_main_cat = "People & Events";
                                $midurl = 'people-events';
                            }
                            if($articletype==5) {
                                $str_main_cat = "Inspiring & People";
                                $midurl = 'inspiring-people';
                            }
                            if($articletype==6) {
                                $str_main_cat = "Promotions";
                                $midurl = 'promotions';
                            }
                                $shortUrl = $url_iso_country.'/newsfeed/'.$midurl.'/'.$homeartikelrowtheree["url_kat"].'/'.$homeartikelrowtheree["id"].'/'.$homeartikelrowtheree["url_judul"].'.html';
                            ?>
                            <div class="carousel-cell">
                                <a href="<?php echo $shortUrl; ?>"><div class="sliderText" style="background-image: url('<?php echo $homeartikelrowtheree['url_gbr']; ?>');">
                                    <!-- <img src="<?php //echo $artikelrowtwo["url_gbr"];?>"> -->
                                </div></a>
                                <div class="content">
                                    <a class="parag" href="<?php echo $shortUrl; ?>"><p><?php echo $homeartikelrowtheree["judul"];?></p></a>
                                    <a class="button" href="<?php echo $shortUrl; ?>">Explore Now</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <?php
            }
        }
        ?>
        <!-- card Newsfeed -->
   
        <div class="section group">
            <div class="inner_section">
                <div class="col span_24_of_24 filler_col"></div>
                <div class="col span_24_of_24">
                   <div class="line-style2"></div>
               </div>
                <div class="col span_5_of_24 filler_col"></div>
            </div>
        </div>
        <!-- carsd Bookshelf -->
        <?php
            if(isset($sectionhome) && is_array($sectionhome) && count($sectionhome) > 0){
                foreach ($sectionhome as $items) {
        ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <img class="icons_border" src="assets/images/icon-border.jpg">
                    <div class="home_section_title">
                        <div class="line-style2"></div>
                         <div class="juduls"><?php echo $items["judul_section_magazine"];?></div>
                    </div>
                    <p class="deksripsi"><?php echo $items["deksripsi_section_magazine"];?></p>

                    <p class="judul-deksripsi"><?php echo $items["title_section_magazine"];?></p>

                    <a class="link-more" href="<?php echo $url_iso_country; ?>/magazine/">View All</a>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 
        <div class="section group">
            <div class="inner_section row_carousel" id="row_carousel_book">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <div class="carousel">
                        <?php
                        foreach ($homebookshelf as $book) {
                            $shortUrl =  $url_iso_country.'/magazine/'.$book["url_merek"].'/'.$book["id"].'/'.$book["url_judul"].'.html';
                            ?>
                            <div class="carousel-cell-book">
                                <a href="<?php echo $shortUrl; ?>"><div class="sliderText-book" style="background-image: url('<?php echo $book['url_thumb']; ?>');">
                                    <!-- <a href="<?php //echo $shortUrl; ?>"><img class="voc" src="<?php //echo $vouchers["url_gbr"];?>"></a> -->
                                </div></a>
                                <div class="content-book">
                                   <a class="linkeds" href="<?php echo $shortUrl; ?>"> 
                                    <p  class="font_text-brand"><?php echo $book["merek"];?>
                                        <div class="font_size"><?php echo $book["judul"];?></div>
                                    </p>
                                    </a>
                                    <a class="button" href="<?php echo $shortUrl; ?>">Read Now</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <?php
           }
         }
        ?>

        <?php
        if(isset($sectionhomerowtwo) && is_array($sectionhomerowtwo) && count($sectionhomerowtwo) > 0){
            foreach ($sectionhomerowtwo as $items) {
                ?>
                <div class="section group">
                    <div class="inner_section">
                        <div class="col span_2_of_24 filler_col"></div>

                        <div class="col span_20_of_24">
                            <!-- <img class="icons_border" src="assets/images/icon-border.jpg"> -->
                            <!-- <div class="home_section_title"> 
                                <div class="line-style2"></div>
                                <h2><?php //echo $items["judul_section_magazinerowtwo"];?></h2>
                            </div>
                            <p class="deksripsi"><?php //echo $items["deksripsi_section_magazinerowtwo"];?></p>-->

                            <p class="judul-deksripsi"><?php echo $items["title_section_magazinerowtwo"];?></p>

                            <a class="link-more" href="<?php echo $url_iso_country; ?>/magazine/">View All</a>
                        </div>
                        <div class="col span_2_of_24 filler_col"></div>
                    </div>
                </div> 
                <div class="section group">
                    <div class="inner_section row_carousel" id="row_carousel_book">
                        <div class="col span_2_of_24 filler_col"></div>
                        <div class="col span_20_of_24">
                            <div class="carousel">
                                <?php
                                foreach ($homebookshelfrowtwo as $bookrowtwo) {
                                    $shortUrl =  $url_iso_country.'/magazine/'.$bookrowtwo["url_merek"].'/'.$bookrowtwo["id"].'/'.$bookrowtwo["url_judul"].'.html';
                                    ?>
                                    <div class="carousel-cell-book">
                                        <a href="<?php echo $shortUrl; ?>"><div class="sliderText-book" style="background-image: url('<?php echo $bookrowtwo['url_thumb']; ?>');">
                                            <!-- <a href="<?php //echo $shortUrl; ?>"><img class="voc" src="<?php //echo $vouchers["url_gbr"];?>"></a> --></div></a>
                                        <div class="content-book">
                                            <a class="linkeds" href="<?php echo $shortUrl; ?>"> 
                                                <p class="font_text-brand"><?php echo $bookrowtwo["merek"];?>
                                                    <div class="font_size"><?php echo $bookrowtwo["judul"];?></div>
                                                </p>
                                            </a>
                                            <a class="button" href="<?php echo $shortUrl; ?>">Read Now</a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col span_2_of_24 filler_col"></div>
                    </div>
                </div>
               
                <?php
            }
        }
        ?>
        <!-- carsd Bookshelf -->

        <!-- Ads Bnner -->
        <?php
        if(isset($bennersaddsbodytwo) && is_array($bennersaddsbodytwo) && count($bennersaddsbodytwo) > 0){
            foreach ($bennersaddsbodytwo as $banners) {
                ?>
                <div class="section group">
                    <div class="inner_section">
                        <div class="col span_2_of_24 filler_col"></div>
                        <div class="col span_20_of_24">
                            <div class="col span_18_of_24 col_mobile span_mobile_body">
                                <div class="header-ads-benner">
                                    <a href="<?php echo $banners['url_linkadsbodytwo']; ?>">
                                        <img class="img-adsbenner imgadsmobilebody" src="<?php echo $banners['url_gbradsbodytwo']; ?>"/>
                                         <span class="btn-gradbody">Ads</span>
                                    </a>
                                </div>
                                <div class="spacerAdsBody"></div>
                            </div>
                        </div>
                        <div class="col span_2_of_24 filler_col"></div>
                    </div>
                </div> 
                <?php
            }
        }
        ?>

        <?php
        if(isset($bennersaddsslider) && is_array($bennersaddsslider) && count($bennersaddsslider) > 0){
        ?>
        <div class="section group">
            <div class="col span_24_of_24 col_mobile span_mobile_footer">
                <div class="slider">
                    <?php
                    foreach ($bennersaddsslider as $banners) {
                    ?>
                    <a href="<?php echo $banners['url_linkslider'];?>"> <img class="img-adsbotbennerhomepage" src="<?php echo $banners['url_gbrslider'];?>"/>
                        <span class="btn-gradfooter">Ads</span>
                    </a>
                    <?php
                    }
                    ?>
                </div>
                <!-- <div class="news__arrows"> -->
            </div>
        </div>
        <?php
        }
        ?>
        <?php
        if(isset($bennersaddsslidertwo) && is_array($bennersaddsslidertwo) && count($bennersaddsslidertwo) > 0){
        ?>
        <div class="group section">
            <div class="col span_21_of_24 col_mobile span_mobile_slidertwo">
                <div class="slidertwo-ads-benner">
                    <div class="slider">
                     <?php
                     foreach ($bennersaddsslidertwo as $banners) {
                        ?>
                        <a href="<?php echo $banners['url_linkslidertwo']; ?>">
                            <img class="img-adsbennerslidertwo imgadsmobileslidertwo" src="<?php echo $banners['url_gbrslidertwo']; ?>"/>
                            <span class="btngradslidertwo">Ads</span>
                        </a>
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="spacerslidertwo"></div>
            </div>
        </div>
        <?php
        }
        ?>

        <!-- Ads Bnner -->
        <div class="section group">
            <div class="inner_section">
                <div class="col span_24_of_24 filler_col"></div>
                <div class="col span_24_of_24">
                   <div class="line-style2"></div>
               </div>
                <div class="col span_5_of_24 filler_col"></div>
            </div>
        </div>
        <!-- carsd Special Offers -->
        <?php
            if(isset($sectionspecialoffershome) && is_array($sectionspecialoffershome) && count($sectionspecialoffershome) > 0){
                foreach ($sectionspecialoffershome as $items) {
        ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                     <img class="icons_border" src="assets/images/icon-border.jpg">
                    <div class="home_section_title">
                        <div class="line-style2"></div>
                        <div class="juduls"><?php echo $items["judul_section_specialoffers"];?></div>
                    </div>
                    <p class="deksripsi"><?php echo $items["deksripsi_section_specialoffers"];?><br/></p>

                    <p class="judul-deksripsi"><?php echo $items["title_section_specialoffers"];?></p>

                    <a class="link-more" href="<?php echo $url_iso_country; ?>/specialoffers/">View All</a>
                </div>

                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 
        <div class="section group">
            <div class="inner_section row_carousel_news_deks" id="row_carousel_news">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <div class="carousel">
                        <?php
                        foreach ($homespecialoffers as $specialoffer) {
                            $specialofferstype = $specialoffer["stat"];
                            if($specialofferstype==1){
                                $str_main_cat = "HOTELS & RESORTS";
                                $midurl = 'hotels-resorts';
                            }
                            if($specialofferstype==2){
                                $str_main_cat = "RECREATION";
                                $midurl = 'recreation';
                            }
                            if($specialofferstype==3){
                                $str_main_cat = "GOURMET"; //"Happening";
                                $midurl = 'gourmet';
                            }
                            if($specialofferstype==4){
                                $str_main_cat = "DINING";
                                $midurl = 'dining';
                            }
                            if($specialofferstype==5){
                                $str_main_cat = "BEAUTY & WELLNESS";
                                $midurl = 'beauty-wellness';
                            }
                            if($specialofferstype==6) {
                                $str_main_cat = "SPORT LEISURE";
                                $midurl = 'sport-leisure';
                            }
                            if($specialofferstype==7) {
                                $str_main_cat = "SEASONAL GIFT";
                                $midurl = 'seasonal-gift';
                            }
                            if($specialofferstype==8) {
                                $str_main_cat = "OTHER";
                                $midurl = 'other';
                            }
                                $shortUrl = $url_iso_country.'/specialoffers/'.$midurl.'/'.$specialoffer["url_kat"].'/'.$specialoffer["id"].'/'.$specialoffer["url_judul"].'.html';
                            ?>
                            <div class="carousel-cell">
                                <a href="<?php echo $shortUrl; ?>"><div class="sliderText" style="background-image: url('<?php echo $specialoffer['url_gbr']; ?>');">
                                    <!-- <img src="<?php //echo $specialoffer["url_gbr"];?>"> -->
                                </div></a>
                                <div class="content">
                                    <a class="parag" href="<?php echo $shortUrl; ?>"><p><?php echo $specialoffer["judul"];?></p></a>
                                    <a class="button" href="<?php echo $shortUrl; ?>">More Info</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <?php
            }
        }
        ?>

        <?php
            if(isset($sectionspecialoffershomerowtwo) && is_array($sectionspecialoffershomerowtwo) && count($sectionspecialoffershomerowtwo) > 0){
                foreach ($sectionspecialoffershomerowtwo as $items) {
        ?>
        <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                     <!-- <img class="icons_border" src="assets/images/icon-border.jpg"> 
                    <div class="home_section_title">
                        <div class="line-style2"></div>
                        <h2><?php //echo $items["judul_section_articlerowtwo"];?></h2>
                    </div>
                    <p class="deksripsi"><?php //echo $items["deksripsi_section_articlerowtwo"];?><br/></p>-->

                    <p class="judul-deksripsi"><?php echo $items["title_section_specialoffersrowtwo"];?></p>

                    <a class="link-more" href="<?php echo $url_iso_country; ?>/specialoffers/">View All</a>
                </div>

                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 
        <div class="section group">
            <div class="inner_section row_carousel_news_deks" id="row_carousel_news">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <div class="carousel">
                        <?php
                        foreach ($homeaspecialoffersrowtwo as $specialoffersrowtwo) {
                            $specialofferstype = $specialoffersrowtwo["stat"];
                            if($specialofferstype==1){
                                $str_main_cat = "HOTELS & RESORTS";
                                $midurl = 'hotels-resorts';
                            }
                            if($specialofferstype==2){
                                $str_main_cat = "RECREATION";
                                $midurl = 'recreation';
                            }
                            if($specialofferstype==3){
                                $str_main_cat = "GOURMET"; //"Happening";
                                $midurl = 'gourmet';
                            }
                            if($specialofferstype==4){
                                $str_main_cat = "DINING";
                                $midurl = 'dining';
                            }
                            if($specialofferstype==5){
                                $str_main_cat = "BEAUTY & WELLNESS";
                                $midurl = 'beauty-wellness';
                            }
                            if($specialofferstype==6) {
                                $str_main_cat = "SPORT LEISURE";
                                $midurl = 'sport-leisure';
                            }
                            if($specialofferstype==7) {
                                $str_main_cat = "SEASONAL GIFT";
                                $midurl = 'seasonal-gift';
                            }
                            if($specialofferstype==8) {
                                $str_main_cat = "OTHER";
                                $midurl = 'other';
                            }
                                $shortUrl = $url_iso_country.'/specialoffers/'.$midurl.'/'.$specialoffersrowtwo["url_kat"].'/'.$specialoffersrowtwo["id"].'/'.$specialoffersrowtwo["url_judul"].'.html';
                            ?>
                            <div class="carousel-cell">
                                <a href="<?php echo $shortUrl; ?>"><div class="sliderText" style="background-image: url('<?php echo $specialoffersrowtwo['url_gbr']; ?>');">
                                    <!-- <img src="<?php //echo $specialoffersrowtwo["url_gbr"];?>"> -->
                                </div></a>
                                <div class="content">
                                    <a class="parag" href="<?php echo $shortUrl; ?>"><p><?php echo $specialoffersrowtwo["judul"];?></p></a>
                                    <a class="button" href="<?php echo $shortUrl; ?>">More Info</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <?php
            }
        }
        ?>
        
        <!-- carsd Special Offers -->
        <div class="section group">
            <div class="inner_section">
                <div class="col span_24_of_24 filler_col"></div>
                <div class="col span_24_of_24">
                   <div class="line-style2"></div>
               </div>
                <div class="col span_5_of_24 filler_col"></div>
            </div>
        </div>
        
        <!-- shop -->
         <?php
            if(isset($sectionproducthome) && is_array($sectionproducthome) && count($sectionproducthome) > 0){
                foreach ($sectionproducthome as $items) {
        ?>
        <div class="margin_bwh">
            <div class="section group">
                <div class="inner_section">
                    <div class="col span_2_of_24 filler_col"></div>
                    
                    <div class="col span_20_of_24">
                        <img class="icons_border" src="assets/images/icon-border.jpg">
                        <div class="home_section_title">
                            <div class="line-style2"></div>
                             <div class="juduls_color2 juduls"><?php echo $items["judul_section_product"];?></div>
                        </div>
                        <p class="deksripsi"><?php echo $items["deksripsi_section_product"];?></p>
                        <a class="link-more" href="https://registrye-shop.com/">View All</a>
                        <p class="judul-deksripsi"><?php echo $items["title_section_product"];?></p>
                    </div>
                </div>
            </div> 
            <div class="section group">
                <div class="inner_section row_carousel" id="row_carousel_shop">
                    <div class="col span_2_of_24 filler_col"></div>
                    <div class="col span_20_of_24">
                        <div class="carousel">
                           <?php
                            foreach ($homeproduct as $product) {
                            ?> 
                            <div class="carousel-cell-prod">
                                <a href="<?php echo $product["url_product"];?>"><div class="sliderText-prod" style="background-image: url('<?php echo $product['url_thumb_pic']; ?>');">
                                </div></a>
                                <div class="content-prod">
                                    <a class="text-bars" href="<?php echo $product["url_product"];?>">
                                        <div class="font_text-brand"><?php echo $product["merek"];?></div>
                                        <p class="font_size_nameproduct"><?php echo $product["nama"];?>
                                        <?php 
                                            echo '<div class="font_size_product">';
                                            if(!empty($product["harga_promo"]) && $product["harga_promo"] < $product["harga"]){
                                                echo '<strike> Rp.'.MainHelper::formatMoney($product["harga"], $url_iso_country).'</strike>';
                                                echo '<br/><span class="color_1"> Rp.'.MainHelper::formatMoney($product["harga_promo"], $url_iso_country).'</span>';
                                            }
                                            else echo '<div class="font_size_product">Rp.'.MainHelper::formatMoney($product["harga"], $url_iso_country).'</div>';
                                            // echo '<div class="font_size_product">Rp.'.MainHelper::formatMoney($product["harga"], $url_iso_country).'</div>';
                                            echo '</div>';
                                        ?>

                                        </p>
                                    </a>
                                    <a class="button" href="<?php echo $product["url_product"];?>">Shop Now</a>
                                </div>
                                
                        </div>
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                    <div class="col span_2_of_24 filler_col"></div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php
                if(isset($sectionproducthomerowtwo) && is_array($sectionproducthomerowtwo) && count($sectionproducthomerowtwo) > 0){
                    foreach ($sectionproducthomerowtwo as $items) {
            ?>
            <div class="section group">
                <div class="inner_section">
                    <div class="col span_2_of_24 filler_col"></div>
                    
                    <div class="col span_20_of_24">
                        <p class="judul-deksripsi"><?php echo $items["title_section_productrowtwo"];?></p>
                    </div>
                    <div class="col span_2_of_24 filler_col"></div>
                </div>
            </div> 
            <div class="section group">
                <div class="inner_section row_carousel" id="row_carousel_shop">
                    <div class="col span_2_of_24 filler_col"></div>
                    <div class="col span_20_of_24">
                        <div class="carousel">
                           <?php
                            foreach ($homeproductrowtwo as $productrowtwo) {
                            ?> 
                            <div class="carousel-cell-prod">
                                <a href="<?php echo $productrowtwo["url_productrowtwo"];?>"><div class="sliderText-prod" style="background-image: url('<?php echo $productrowtwo['url_thumb_pic']; ?>');">
                                    <!-- <a href="<?php //echo $productrowtwo["url_productrowtwo"];?>"><img class="prod" src="<?php //echo $productrowtwo["url_thumb_pic"];?>"></a> -->
                                </div></a>
                                <div class="content-prod">
                                    <a class="text-bars" href="<?php echo $productrowtwo["url_productrowtwo"];?>">
                                        <div class="font_text-brand"><?php echo $productrowtwo["merek"];?></div>
                                        <p class="font_size_nameproduct"><?php echo $productrowtwo["nama"];?>
                                        <!-- <div class="font_size_product">Price:&nbsp;<?php //echo $string;?><?php //echo $format_indonesia;?></div> -->
                                            <?php 
                                            echo '<div class="font_size_product">';
                                            if(!empty($productrowtwo["harga_promo"]) && $productrowtwo["harga_promo"] < $productrowtwo["harga"]){
                                                echo '<strike> Rp.'.MainHelper::formatMoney($productrowtwo["harga"], $url_iso_country).'</strike>';
                                                echo '<br/><span class="color_1"> Rp.'.MainHelper::formatMoney($productrowtwo["harga_promo"], $url_iso_country).'</span>';
                                            }
                                            else echo '<div class="font_size_product">Rp.'.MainHelper::formatMoney($productrowtwo["harga"], $url_iso_country).'</div>';
                                                // echo '<div class="font_size_product">Rp.'.MainHelper::formatMoney($product["harga"], $url_iso_country).'</div>';
                                            echo '</div>';
                                            ?>
                                    </p>
                                </a>
                                <a class="button" href="<?php echo $productrowtwo["url_productrowtwo"];?>">Shop Now</a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        </div>
                    </div>
                    <div class="col span_2_of_24 filler_col"></div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
        <!-- shop -->
    
        <!-- carsd E-voucher -->
         <?php
            if(isset($sectionvoucherhome) && is_array($sectionvoucherhome) && count($sectionvoucherhome) > 0){
                foreach ($sectionvoucherhome as $items) {
        ?>
         <div class="section group">
            <div class="inner_section">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <img class="icons_border" src="assets/images/icon-border.jpg">
                    <div class="home_section_title">
                        <div class="line-style2"></div>
                         <div class="juduls"><?php echo $items["judul_section_voucher"];?></div>
                    </div>
                    <p class="deksripsi"><?php echo $items["deksripsi_section_voucher"];?></p>

                    <p class="judul-deksripsi"><?php echo $items["title_section_voucher"];?></p>

                    <a class="link-more" href="<?php echo $url_iso_country; ?>/e-voucher/">View All</a>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div> 

        <div class="section group">
            <div class="inner_section row_carousel_vocher" id="row_carousel_voc">
                <div class="col span_2_of_24 filler_col"></div>
                <div class="col span_20_of_24">
                    <div class="carousel">
                        <?php
                         foreach ($homevouchers as $vouchers) {
                                $shortUrl = $url_iso_country.'/e-voucher/'.$vouchers["id"].'/'.$vouchers["url_judul"].'.html';
                            ?>
                            <div class="carousel-cell-voc ">
                                <a href="<?php echo $shortUrl; ?>"> <div class="sliderText-voc" style="background-image: url('<?php echo $vouchers['url_gbr']; ?>');">
                                    <!-- <a href="<?php //echo $shortUrl; ?>"><img class="voc" src="<?php //echo $vouchers["url_gbr"];?>"></a> -->
                                </div></a>
                                <div class="content-voc">
                                   <a class="linked" href="<?php echo $shortUrl; ?>"> 
                                    <p class="color_black"><?php echo $vouchers["judul"];?>
                                        <div class="font_size_voucher">QTY:&nbsp;<?php echo $vouchers["qty"];?></div>
                                    </p>
                                    </a>
                                    <a class="button" href="<?php echo $shortUrl; ?>">Grab Now</a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col span_2_of_24 filler_col"></div>
            </div>
        </div>
        <?php
            }
        }
        ?>

        <?php
        if(isset($sectionvoucherhomerowtwo) && is_array($sectionvoucherhomerowtwo) && count($sectionvoucherhomerowtwo) > 0){
            foreach ($sectionvoucherhomerowtwo as $items) {
                ?>
                <div class="section group">
                    <div class="inner_section">
                        <div class="col span_2_of_24 filler_col"></div>
                        <div class="col span_20_of_24">
                            <!-- <img class="icons_border" src="assets/images/icon-border.jpg"> 
                            <div class="home_section_title">
                                <div class="line-style2"></div>
                                <h2><?php //echo $items["judul_section_voucherrowtwo"];?></h2>
                            </div>
                            <p class="deksripsi"><?php //echo $items["deksripsi_section_voucherrowtwo"];?></p>-->

                            <p class="judul-deksripsi"><?php echo $items["title_section_voucherrowtwo"];?></p>

                            <a class="link-more" href="<?php echo $url_iso_country; ?>/e-voucher/">View All</a>
                        </div>
                        <div class="col span_2_of_24 filler_col"></div>
                    </div>
                </div> 

                <div class="section group">
                    <div class="inner_section row_carousel_vocher" id="row_carousel_voc">
                        <div class="col span_2_of_24 filler_col"></div>
                        <div class="col span_20_of_24">
                            <div class="carousel">
                                <?php
                                foreach ($homevouchersrowtwo as $voucherstwo) {
                                    $shortUrl = $url_iso_country.'/e-voucher/'.$voucherstwo["id"].'/'.$voucherstwo["url_judul"].'.html';
                                    ?>
                                    <div class="carousel-cell-voc">
                                        <a href="<?php echo $shortUrl; ?>"><div class="sliderText-voc" style="background-image: url('<?php echo $voucherstwo['url_gbr']; ?>');">
                                            <!-- <img class="voc" src="<?php //echo $voucherstwo["url_gbr"];?>"> -->
                                        </div></a>
                                        <div class="content-voc">
                                            <a class="linked" href="<?php echo $shortUrl; ?>"> 
                                            <p class="color_black"><?php echo $voucherstwo["judul"];?>
                                               <div class="font_size_voucher">QTY:&nbsp;<?php echo $voucherstwo["qty"];?></div>
                                           </p>
                                            <a class="button" href="<?php echo $shortUrl; ?>">Grab Now</a>
                                        </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col span_2_of_24 filler_col"></div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        <!-- carsd E-voucher -->

        <?php
        if(isset($bennersaddsfthomepage) && is_array($bennersaddsfthomepage) && count($bennersaddsfthomepage) > 0){
        ?>
        <br><br>
        <div class="section group">
            <div class="col span_24_of_24 col_mobile span_mobile_footer">
                <div class="slider">
                    <?php
                    foreach ($bennersaddsfthomepage as $banners) {
                    ?>
                    <a href="<?php echo $banners['url_linkadsfthomepage'];?>"> <img class="img-adsbotbennerhomepage" src="<?php echo $banners['url_gbradsfthomepage'];?>"/>
                        <span class="btn-gradfooter">Ads</span>
                    </a>
                    <?php
                    }
                    ?>
                </div>
                <!-- <div class="news__arrows"> -->
            </div>
        </div>
        <?php
        }
        ?> 
    </div>
</div>

<div id="div_footer">
    <div class="section group">
        <div class="inner_section home_footer_inner">
            <div class="col span_4_of_24 filler_col"></div>
            <div class="col span_16_of_24">
                <span class="style_teks_registry"><?php echo $info_per["sebutan"]; ?></span>
                <br/>
                <?php echo $info_per["alamat"]; ?>
                <br/>
                <span id="icon_envelope" class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;<a class="links_middle_footer" href="mailto:<?php echo $info_per["email"]; ?>"><?php echo $info_per["email"]; ?></a>&nbsp;&nbsp;<span id="icon_telp" class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;<a class="links_middle_footer" href="tel:<?php echo '+'.$info_per["telp"]; ?>">+<?php echo $info_per["telp"]; ?></a>
                <br/>
                &copy; <?php echo date("Y"); ?>, <?php echo $info_per["nama_pt"]; ?>
            </div>
            <div class="col span_4_of_24 filler_col"></div>
        </div>
    </div>
</div>


<div id="chatscustom">
    <div class="sywhservices">
     <a href="https://wa.me/6287781220033?text=Hello,%20there%20is%20something%20i%20want%20to%20ask" class="whatsapp" target="_blank"><i class="fa fa-whatsapp"></i></a>   
     <a href="mailto:info@registrye.com" class="messenger" target="_blank"><i class="fa fa-envelope"></i></a>
     <a href="tel:+622122638050" class="call"><i class="fa fa-phone"></i></a>
    </div>

    <a class="openservices">
       <i class="fa fa-comments"></i>
       <i class="fa fa-times"></i>
    </a>
</div>

<?php
if(isset($bennersaddsfootertwo) && is_array($bennersaddsfootertwo) && count($bennersaddsfootertwo) > 0){
        foreach ($bennersaddsfootertwo as $banners) {
?>
<div id="fixedban"> 
    <div>
        <a id="close-fixedban" onclick="document.getElementById(&apos;fixedban&apos;).style.display = &apos;none&apos;;">
        <img class="btnimgsclose" alt="close" src="assets/images/close-windows.png" title="close button"/></a>
    </div>
    <div class="imgsfooters">
        <a href="<?php echo $banners["url_linkadsfootertwo"]; ?>"><img class="imgsfoot" alt="Banner iklan disini" src="<?php echo $banners["url_gbradsfootertwo"]; ?>"/>
             <span class="btn-gradfooters">Ads</span>
        </a>

    </div>
</div>
<?php
  }
}
?>

<img id="button_back_topup" class="button_back_topup" src="assets/images/button-back-to-top.png" title="Back To Top">
<img id="button_back_to_top" class="button_back_to_top" src="assets/images/ButtonHamburgerRegistryE.png" title="Navigation">
<?php
require_once 'views/left_menu.php';
require_once 'views/includes/screener.html';
//FullScreen Video Youtube
if(isset($ada_video) && $ada_video)
    require_once 'views/includes/screener_video_container.html';
require_once 'views/css.php';
require_once 'views/js.php';
?>
</body>

</html>