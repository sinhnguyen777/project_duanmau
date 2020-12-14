<div class="benner">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="image_benner">
                        <div class="side_img">
                            <img src="public/images/casual-curly-curly-hair-794064__.png" alt="">
                        </div>
                        <div class="sale_benner">
                            <p>NEW ARIVALS</p>
                            <h1>
                                New Cosmetics
                                <br>
                                Up to 40% Off
                            </h1>
                            <button>EXPLORE COLLECTION</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image_benner">
                        <div class="side_img">
                            <img class="img-1" src="public/images/sld1_bg.png" alt="">
                            <img class="img-2" src="public/images/sld2_geom_1.png" alt="">
                            <img class="img-3" src="public/images/sld1_con.png" alt="">
                        </div>
                        <div class="sale_benner_2">
                            <p>NEW ARRIVALS</p>
                            <h1>
                                Natural Cosmetics
                                Up to 70% Off
                            </h1>
                            <button>EXPLORE COLLECTION</button>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="image_benner">
                        <div class="side_img">
                            <img class="img-1" src="public/images/sld2_bg.png" alt="">
                            <img class="img-2" src="public/images/sld2_geom_2.png" alt="">
                            <img class="img-3" src="public/images/sld2_con.png" alt="">
                        </div>
                        <div class="sale_benner_2">
                            <p>NEW ARRIVALS</p>
                            <h1>
                                Natural Cosmetics
                                Up to 70% Off
                            </h1>
                            <button>EXPLORE COLLECTION</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear" style="clear: both;"></div>
        <section class="elementor pt-5 pb-5" >
            <div class="container-sm pl-5 pr-5">
                <div class="row pl-5 pr-5 d-flex justify-content-center">
                    <div class="col-12 col-sm-12 col-lg-4 service-item">
                        <div class="item_wrap">
                            <i class="fas fa-truck h3"></i>
                        </div>
                        <div class="service-content">
                            <h3>FREE DELIVERY</h3>
                            <p>On all orders over 50$</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-4 service-item">
                        <div class="item_wrap">
                            <i class="fas fa-headphones h3"></i>
                        </div>
                        <div class="service-content">
                            <h3>FREE SUPPORT</h3>
                            <p>24/7 call center available</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-4 service-item">
                        <div class="item_wrap">
                            <i class="fas fa-redo h3"></i>
                        </div>
                        <div class="service-content">
                            <h3>FREE RETURNS</h3>
                            <p>No questions asked</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tile_section pb-5">
            <h1 class="tile_product d-flex justify-content-center m-0 p-0">Trending Products</h1>
        </section>

        <section id="product">
            <div class="col-md-12 p-0 card-product">
                <div class="row">
                    
                    <?php
                        foreach ($toppro as $sp) {
                            $id = $sp['id'];
                            $name = $sp['name'];
                            $img = $sp['img'];
                            $price_sale = $sp['price_sale'];
                            $price = $sp['price'];
                            $link="index.php?ctrl=product&action=product-detail&idsp=".$id;
                            echo '<div class="col-md-3">
                                    <div class="card border-0 w-100" style="width: 18rem;">
                                        <div class="img-cart">
                                            <a href="'.$link.'">
                                                <img src="public/images/'.$img.'" class="card-img-top" alt="...">
                                                <button class="btn-add">ADD TO CART</button>
                                            </a>
                                        </div>
                                        <div class="sale">
                                            <p>SALE</p>
                                        </div>
                                        <div class="card-body pl-0 pr-0">
                                            <h5 class="card-title">'.$name.'</h5>
                                            <p class="price-cart"><span>£'.$price_sale.'</span> - £'.$price.'</p>
                                        </div>
                                    </div>
                                </div>';
                        }
                    
                    ?>
                    <!-- <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp1.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Ellie Cosmetics Brush</h5>
                                <p class="price-cart"><span>£30.00</span> - £35.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp2.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Cosmetic Branding Cream</h5>
                                <p class="price-cart"><span>£3.00</span> - £2.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp3.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Liquid Container Green</h5>
                                <p class="price-cart"><span>£15.00</span> - £12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp4.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Ellie Bath Salt</h5>
                                
                                <p class="price-cart"><span>£15.00</span> - £12.00</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <!-- <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp1.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Ellie Cosmetics Brush</h5>
                                <p class="price-cart"><span>£30.00</span> - £35.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp2.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Cosmetic Branding Cream</h5>
                                <p class="price-cart"><span>£3.00</span> - £2.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp3.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Liquid Container Green</h5>
                                <p class="price-cart"><span>£15.00</span> - £12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp4.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Ellie Bath Salt</h5>
                                
                                <p class="price-cart"><span>£15.00</span> - £12.00</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

        <section class="benner_about_main mb-5">
            <div class="container">
                <div class="border_bg_section">
                    <div class="elementor-bg">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-bg-elament-left">
                                        <img src="public/images/ellie_bag.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="elementor-right">
                                        <h2>Get to know About Us</h2>
                                        <p>A desire to experiment with design, materials, and aesthetics in the search for something that works. Free from passing trends, the brand’s focus remains that of its roots. Long live creativity.</p>
                                        <div class="content-elementor">
                                            <div class="icon-content-elementor">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                            <div class="text-content-elementor">
                                                <p>Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                            </div>
                                            <div class="elementor-meta-inner-img">
                                                <div class="img-inner">
                                                    <img src="public/images/fashion_guru.png" alt="">
                                                    <div class="elementor-meta-inner-content">
                                                        <span class="pt-2">JANNIFER DOE</span>
                                                        <span>CUSTOMER</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button>LEARN MORE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tile_section pb-5">
            <h1 class="tile_product d-flex justify-content-center m-0 p-0">Products bought the most</h1>
        </section>
        <section id="product">
            <div class="col-md-12 p-0 card-product">
                <div class="row">

                    <?php
                        foreach ($lwopro as $sp) {
                            $id = $sp['id'];
                            $name = $sp['name'];
                            $img = $sp['img'];
                            $price_sale = $sp['price_sale'];
                            $price = $sp['price'];
                            $link="index.php?ctrl=product&action=product-detail&idsp=".$id;
                            $linkadd="index.php?ctrl=cart&action=addtocart&idsp=".$id;
                            echo '<div class="col-md-3">
                                    <div class="card border-0 w-100" style="width: 18rem;">
                                        <div class="img-cart">
                                            <a href="'.$link.'">
                                                <img src="public/images/'.$img.'" class="card-img-top" alt="...">
                                                <a href="'.$linkadd.'">
                                                    <button class="btn-add">ADD TO CART</button>
                                                </a>
                                            </a>
                                        </div>
                                        <div class="sale">
                                            <p>SALE</p>
                                        </div>
                                        <div class="card-body pl-0 pr-0">
                                            <h5 class="card-title">'.$name.'</h5>
                                            <p class="price-cart"><span>£'.$price_sale.'</span> - £'.$price.'</p>
                                        </div>
                                    </div>
                                </div>';
                        }
                    
                    ?>
                        
                    <!-- <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp1.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Ellie Cosmetics Brush</h5>
                                <p class="price-cart"><span>£30.00</span> - £35.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp2.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Cosmetic Branding Cream</h5>
                                <p class="price-cart"><span>£3.00</span> - £2.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp3.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Liquid Container Green</h5>
                                <p class="price-cart"><span>£15.00</span> - £12.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-0 w-100" style="width: 18rem;">
                            <div class="img-cart">
                                <img src="public/images/sp4.png" class="card-img-top" alt="...">
                                <button class="btn-add">ADD TO CART</button>
                            </div>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <div class="card-body pl-0 pr-0">
                                <h5 class="card-title">Ellie Bath Salt</h5>
                                
                                <p class="price-cart"><span>£15.00</span> - £12.00</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <div class="hastag">
            <div class="info-intasgram d-flex justify-content-center">
                <div class="icon-info">
                    <i class="fab fa-instagram"></i>
                </div>
                <span class="pl-2">#ellie_shop</span>
            </div>
            <p class="d-flex justify-content-center">Hashtag #ellie your outfits on instagram or twitter & you’ll go in the draw to win!</p>
        </div>