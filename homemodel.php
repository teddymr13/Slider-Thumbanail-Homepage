<?php
class HomeModel extends Model{
    public function getAdsBanner($param = NULL, $sql_str = "SELECT url_gbr FROM ads_registrye"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getAdsBennerBody($param = NULL, $sql_str = "SELECT url_gbradsbody FROM ads_registrye_body"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerFooter($param = NULL, $sql_str = "SELECT url_gbradsfooter FROM ads_registrye_footer"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerHeadertwo($param = NULL, $sql_str = "SELECT url_gbradsheadertwo, url_linkadsheadertwo FROM ads_registrye_headertwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerBodytwo($param = NULL, $sql_str = "SELECT  url_gbradsbodytwo, url_linkadsbodytwo FROM ads_registrye_bodytwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerFootertwo($param = NULL, $sql_str = "SELECT url_gbradsfootertwo, url_linkadsfootertwo FROM ads_registrye_footertwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerSide($param = NULL, $sql_str = "SELECT url_gbradsside, url_linkadsside FROM ads_registrye_side"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerfthomepage($param = NULL, $sql_str = "SELECT  url_gbradsfthomepage, url_linkadsfthomepage FROM ads_registrye_fthomepage"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerSlider($param = NULL, $sql_str = "SELECT  url_gbrslider, url_linkslider FROM ads_registrye_slider"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function  getAdsBennerSliderTwo($param = NULL, $sql_str = "SELECT  url_gbrslidertwo, url_linkslidertwo FROM ads_registrye_slidertwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function  getAdsBennerPopup($param = NULL, $sql_str = "SELECT  url_gbrpopup, url_linkspopup FROM ads_registrye_popup"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    
    public function getHomeMainPic($param = NULL, $sql_str = "SELECT url_gbr, url_video FROM home_main_pic"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getHomeThumbnail($idcountry){
        $this->query("SELECT store, marketplace, hotel, restaurant, article, beauty, magazine, industry, evoucher, specialoffers FROM home_thumbnail WHERE id = :idcountry");
        $this->bind(':idcountry', $idcountry);
        return $this->resultSingle();
    }

    public function getHomeArtikel($param = NULL, $sql_str = "SELECT home_article_thumbnail.id, article.id, article.judul, article.url_judul, article.url_gbr, article_categories.url_kat, article.iso_country, article.stat FROM article_categories INNER JOIN article ON article_categories.id = article.kategori INNER JOIN home_article_thumbnail ON article.id = home_article_thumbnail.id_article"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getHomeBookshelf($param = NULL, $sql_str = "SELECT home_magazine_thumbnail.id, magazine.id, magazine.judul,magazine.url_judul, magazine.url_thumb, magazine_brand.url_merek, magazine_brand.merek, magazine_categories.url_kat, magazine.status, magazine.sub_judul FROM magazine INNER JOIN home_magazine_thumbnail ON magazine.id = home_magazine_thumbnail.id_magazine INNER JOIN magazine_categories ON magazine.id_cat = magazine_categories.id INNER JOIN magazine_brand ON magazine.id_merek = magazine_brand.id"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getHomeVouchers($param = NULL, $sql_str = "SELECT home_voucher_thumbnail.id, voucher.id, voucher.url_judul, voucher.judul, voucher.url_gbr, voucher.id_store, voucher.qty, voucher.iso_country, voucher.stat, voucher_categories.nama_kategori, voucher_categories.url_kategori FROM voucher_categories INNER JOIN (voucher INNER JOIN home_voucher_thumbnail ON voucher.id = home_voucher_thumbnail.id_voucher) ON voucher_categories.id = voucher.id_kategori"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getHomeProduct($param = NULL, $sql_str = "SELECT home_product_thumbnail.id, product.id, product.nama, product.url_nama, product.harga, product.harga_promo, product.url_thumb_pic, home_product_thumbnail.url_product, product_brand.merek FROM product INNER JOIN home_product_thumbnail ON product.id = home_product_thumbnail.id_product INNER JOIN product_brand ON product.id_merek = product_brand.id"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getHomeSpecialOffers($param = NULL, $sql_str = "SELECT home_specialoffers_thumbnail.id, specialoffers.id, specialoffers.judul, specialoffers.url_judul, specialoffers.url_gbr, specialoffers_categories.url_kat, specialoffers.iso_country, specialoffers.stat FROM specialoffers_categories INNER JOIN specialoffers ON specialoffers_categories.id = specialoffers.kategori INNER JOIN home_specialoffers_thumbnail ON specialoffers.id = home_specialoffers_thumbnail.id_specialoffers"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getHomeBookshelfrowtwo($param = NULL, $sql_str = "SELECT home_magazinerowtwo_thumbnail.id, magazine.id, magazine.judul,magazine.url_judul, magazine.url_thumb, magazine_brand.url_merek, magazine_brand.merek, magazine_categories.url_kat, magazine.status, magazine.sub_judul FROM magazine INNER JOIN home_magazinerowtwo_thumbnail ON magazine.id = home_magazinerowtwo_thumbnail.id_magazinerowtwo INNER JOIN magazine_categories ON magazine.id_cat = magazine_categories.id INNER JOIN magazine_brand ON magazine.id_merek = magazine_brand.id"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getHomeVouchersrowtwo($param = NULL, $sql_str = "SELECT home_voucherrowtwo_thumbnail.id, voucher.id, voucher.url_judul, voucher.judul, voucher.url_gbr, voucher.id_store, voucher.qty, voucher.iso_country, voucher.stat, voucher_categories.nama_kategori, voucher_categories.url_kategori FROM voucher_categories INNER JOIN (voucher INNER JOIN home_voucherrowtwo_thumbnail ON voucher.id = home_voucherrowtwo_thumbnail.id_voucherrowtwo) ON voucher_categories.id = voucher.id_kategori"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getHomeArtikelrowtwo($param = NULL, $sql_str = "SELECT home_articlerowtwo_thumbnail.id, article.id, article.judul, article.url_judul, article.url_gbr, article_categories.url_kat, article.iso_country, article.stat FROM article_categories INNER JOIN article ON article_categories.id = article.kategori INNER JOIN home_articlerowtwo_thumbnail ON article.id = home_articlerowtwo_thumbnail.id_articlerowtwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getHomeArtikelrowtheree($param = NULL, $sql_str = "SELECT home_articlerowtheree_thumbnail.id, article.id, article.judul, article.url_judul, article.url_gbr, article_categories.url_kat, article.iso_country, article.stat FROM article_categories INNER JOIN article ON article_categories.id = article.kategori INNER JOIN home_articlerowtheree_thumbnail ON article.id = home_articlerowtheree_thumbnail.id_articlerowtheree"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getHomeSpecialOffersrowtwo($param = NULL, $sql_str = "SELECT home_specialoffersrowtwo_thumbnail.id, specialoffers.id, specialoffers.judul, specialoffers.url_judul, specialoffers.url_gbr, specialoffers_categories.url_kat, specialoffers.iso_country, specialoffers.stat FROM specialoffers_categories INNER JOIN specialoffers ON specialoffers_categories.id = specialoffers.kategori INNER JOIN home_specialoffersrowtwo_thumbnail ON specialoffers.id = home_specialoffersrowtwo_thumbnail.id_specialoffersrowtwo"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getHomeProductrowtwo($param = NULL, $sql_str = "SELECT home_productrowtwo_thumbnail.id, product.id, product.nama, product.url_nama, product.harga, product.harga_promo, product.url_thumb_pic, home_productrowtwo_thumbnail.url_productrowtwo, product_brand.merek FROM home_productrowtwo_thumbnail INNER JOIN product ON home_productrowtwo_thumbnail.id_productrowtwo = product.id INNER JOIN product_brand ON product.id_merek = product_brand.id"){
        return $this->basicQuerySelect($param, $sql_str);
    }


    public function getsectionbookhome($param = NULL, $sql_str = "SELECT judul_section_magazine, title_section_magazine, deksripsi_section_magazine FROM deksripsi_magazine_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getsectionnewsfeedhome($param = NULL, $sql_str = "SELECT judul_section_article, title_section_article, deksripsi_section_article FROM deksripsi_article_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getsectionvoucherhome($param = NULL, $sql_str = "SELECT judul_section_voucher, title_section_voucher, deksripsi_section_voucher FROM deksripsi_voucher_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getsectionproducthome($param = NULL, $sql_str = "SELECT judul_section_product, title_section_product, deksripsi_section_product FROM deksripsi_product_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }

    public function getsectionspecialoffershome($param = NULL, $sql_str = "SELECT judul_section_specialoffers, title_section_specialoffers, deksripsi_section_specialoffers FROM deksripsi_specialoffers_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    
    public function getsectionbookhomerowtwo($param = NULL, $sql_str = "SELECT title_section_magazinerowtwo FROM deksripsi_magazinerowtwo_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getsectionvoucherhomerowtwo($param = NULL, $sql_str = "SELECT title_section_voucherrowtwo FROM deksripsi_voucherrowtwo_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getsectionnewsfeedhomerowtwo($param = NULL, $sql_str = "SELECT title_section_articlerowtwo FROM deksripsi_articlerowtwo_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getsectionnewsfeedhomerowthree($param = NULL, $sql_str = "SELECT title_section_articlerowthree FROM deksripsi_articlerowthree_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getsectionproducthomerowtwo($param = NULL, $sql_str = "SELECT title_section_productrowtwo FROM deskripsi_productrowtwo_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }
    public function getsectionspecialoffershomerowtwo($param = NULL, $sql_str = "SELECT title_section_specialoffersrowtwo FROM deksripsi_specialoffersrowtwo_thumbnail"){
        return $this->basicQuerySelect($param, $sql_str);
    }
}