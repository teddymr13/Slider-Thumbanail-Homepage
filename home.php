<?php
class Home extends Controller{
        
        protected function index(){
      

        $this->registry->template->page_title = $this->registry->template->info_per["sebutan"] . " - " . $this->registry->template->info_per["title_teks"];
        $this->registry->template->meta_description = $this->registry->template->info_per["desp"];
        $this->registry->template->meta_keywords = $this->registry->template->info_per["kkp"];

        $viewmodel = new HomeModel;
        $id_country = CountryHelper::getCountryByIso('id', $this->registry->url_iso_country);
        $this->registry->template->main_pic = $viewmodel->getHomeMainPic(array('id_country'=>$id_country, 'order_by'=>array('urutan'=>'ASC')));
        $this->registry->template->data_thumbnail = $viewmodel->getHomeThumbnail($id_country);

        $this->registry->template->homeartikel = $viewmodel->getHomeArtikel();
        $this->registry->template->homebookshelf = $viewmodel->getHomeBookshelf();
        $this->registry->template->homevouchers = $viewmodel->getHomeVouchers();
        $this->registry->template->homeproduct = $viewmodel->getHomeProduct();
        $this->registry->template->homespecialoffers = $viewmodel->getHomeSpecialOffers();


        $this->registry->template->homebookshelfrowtwo = $viewmodel->getHomeBookshelfrowtwo();
        $this->registry->template->homevouchersrowtwo = $viewmodel->getHomeVouchersrowtwo();
        $this->registry->template->homeartikelrowtwo = $viewmodel->getHomeArtikelrowtwo();
        $this->registry->template->homeartikelrowtheree = $viewmodel->getHomeArtikelrowtheree();
        $this->registry->template->homeproductrowtwo = $viewmodel->getHomeProductrowtwo();
        $this->registry->template->homeaspecialoffersrowtwo = $viewmodel->getHomeSpecialOffersrowtwo();
        $this->registry->template->bennersaddspopup = $viewmodel->getAdsBennerPopup();

     
    
        $this->registry->template->sectionhome = $viewmodel->getsectionbookhome();
        $this->registry->template->sectionnewsfeedhome = $viewmodel->getsectionnewsfeedhome();
        $this->registry->template->sectionvoucherhome = $viewmodel->getsectionvoucherhome();
        $this->registry->template->sectionproducthome = $viewmodel->getsectionproducthome();
         $this->registry->template->sectionspecialoffershome = $viewmodel->getsectionspecialoffershome();

        $this->registry->template->sectionnewsfeedhomerowtwo = $viewmodel->getsectionnewsfeedhomerowtwo();
        $this->registry->template->sectionnewsfeedhomerowthree = $viewmodel->getsectionnewsfeedhomerowthree();

        $this->registry->template->sectionvoucherhomerowtwo = $viewmodel->getsectionvoucherhomerowtwo();
        $this->registry->template->sectionhomerowtwo = $viewmodel->getsectionbookhomerowtwo();
        $this->registry->template->sectionproducthomerowtwo = $viewmodel->getsectionproducthomerowtwo();
        //$this->registry->template->adsbanner = $viewmodel->getAdsBanner();
        //$this->registry->template->bennersaddsbody = $viewmodel->getAdsBennerBody();
        // $this->registry->template->bennersaddsfooter = $viewmodel->getAdsBennerFooter();

        $this->registry->template->bennersaddsheadertwo = $viewmodel->getAdsBennerHeadertwo();
        $this->registry->template->bennersaddsbodytwo = $viewmodel->getAdsBennerBodytwo();
        $this->registry->template->bennersaddsfootertwo = $viewmodel->getAdsBennerFootertwo();
        $this->registry->template->bennersaddsside = $viewmodel->getAdsBennerSide();
        $this->registry->template->bennersaddsfthomepage = $viewmodel->getAdsBennerfthomepage();
        $this->registry->template->bennersaddsslider = $viewmodel->getAdsBennerSlider();
        $this->registry->template->bennersaddsslidertwo = $viewmodel->getAdsBennerSliderTwo();


        $viewmodel = new PartnershipModel;
        $this->registry->template->data_thumbnail_caption = $viewmodel->getMaStore(array('order_by'=>array('id'=>'ASC')));
        $this->registry->template->cssSrc = array("home.css");

        $jsSrc = array();
        $jsSrc[0]["type"] = "php";
        $jsSrc[0]["src"] = "views/includes/scripts/index_scripts.php";
        $jsSrc[1]["type"] = "php";
        $jsSrc[1]["src"] = "views/includes/scripts/index_newsfeed_scripts.php";
        $jsSrc[2]["type"] = "php";
        $jsSrc[2]["src"] = "views/includes/scripts/index_ads_banner.php";          
        $this->registry->template->jsSrc = $jsSrc;
        $this->setScriptNonce();

        $this->registry->imageCSP .= ' https://i.ytimg.com';
        $this->returnView(false);
        }
}