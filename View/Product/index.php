
        <div class="benner-product">
            <img src="public/images/ribbon2.png" alt="">
            <nav class="nav-benner-product">
                <a href="">Home</a> / <a href="">shop</a>
                <h1>Shop</h1>
            </nav>
        </div>
        <section class="content-product">
            <div class="shop-product col-md-12">
                <div class="row">
                    <aside class="col-md-3 mb-5 mt-3 pr-3 p-0">
                        <aside class="aside-item p-0">
                            <div class="accordion" id="accordionExample">
                                <div class="title-product d-flex justify-content-center">
                                    <h3 class="m-0">PRODUCT CATEGORIES</h3>
                                </div>
                            </div>
                        </aside>
                        <aside class="aside-item">
                            <ul class="pl-3 pb-3 mt-1 mb-2 ul-overflow">
                            
                                <?php
                                    foreach ($dsdm_hot as $cata){
                                        $id = $cata['id'];
                                        $name = $cata['name'];
                                        echo '<li class="befor-check">
                                                <div class="form-check pt-2 pb-2">
                                                    <label class="form-check-label">
                                                        <a href="index.php?ctrl=product&action=product&cataId='.$id.'">'.$name.' ('.$id.')</a>
                                                    </label>
                                                </div>
                                            </li>';
                                    }
                                    
                                    // $dsdm1=getcataloglevel1();
                                    // foreach ($dsdm1 as $dm1){
                                    //     $id = $dm1['id'];
                                    //     $dm2=getcataloglevel2($id);
                                    //     $name = $dm1['name'];
                                    //     echo '<li class="befor-check">
                                    //             <div class="form-check pt-2 pb-2">
                                    //                 <a href="#li-2"  class="list dropdown-toggle" data-toggle="collapse" aria-expanded="true">
                                    //                     <a href="">'.$name.'</a>
                                    //                 </a>
                                    //                 <ul  class="collapse lisst-unstyled" id="li-2">';
                                    //                 foreach ($dm2 as $dm2) {
                                    //                     echo '
                                    //                     <li class="pt-2"><a href="">'.$dm2['name'].'</a></li>';
                                    //                 }
                                    //         echo  '</ul>
                                    //             </div>
                                    //         </li>';
                                    // }
                                
                                ?>
                              
                                <!-- <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <a href="#li-1"  class="list dropdown-toggle" data-toggle="collapse" aria-expanded="true">
                                            <a href="index.php">Cosmetics</a>
                                        </a>
                                        <ul class="collapse lisst-unstyled" id="li-1">
                                            <li class="pt-2"><a href="">Natural</a></li>
                                            <li class="pt-2"><a href="">Spa & Saloon</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Herbal Collection</a>
                                        </label>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <a href="#li-2"  class="list dropdown-toggle" data-toggle="collapse" aria-expanded="true">
                                            <a href="">Makeup</a>
                                        </a>
                                        <ul  class="collapse lisst-unstyled" id="li-2">
                                            <li class="pt-2"><a href="">Body</a></li>
                                            <li class="pt-2"><a href="">Lips & Face</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Personal Care</a>
                                        </label>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Skin</a>
                                        </label>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Uncategorized</a>
                                        </label>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Wellness </a>
                                        </label>
                                    </div>
                                </li> -->
                            </ul>
                        </aside>

                        <!-- <script defer>
                            $(document).ready(function () {

                                $('.icon-show').click(function () {

                                    if($(this).attr('data-expanded') == true)
                                        $(this).attr('data-expanded', '1');
                                    else
                                        $(this).attr('data-expanded', '2');
                                    
                                    var ul_child = $(this).parent().find('ul');

                                    ul_child.addClass('collapsing').removeClass('collapse');
                                    ul_child.css('height', '64px');
                                    
                                    setTimeout(
                                        function() 
                                        {
                                            ul_child.toggleClass('show');
                                            ul_child.removeAttr('style');
                                            ul_child.addClass('collapse').removeClass('collapsing');
                                        }
                                    ,350);
                                });
                            });
                        </script> -->

                        <aside class="aside-item p-0">
                            <div class="accordion" id="accordionExample">
                                <div class="title-product d-flex justify-content-center">
                                    <h3 class="m-0">SEARCH</h3>
                                </div>
                                <input type="search" name="" id="" value="" placeholder="Search products…">
                                <button><i class="fas fa-search"></i></button>
                            </div>
                        </aside>
                        <aside class="aside-item mt-4">
                            <div class="accordion pb-3 mt-3 mb-2 ul-overflow" id="accordionExample">
                                <div class="title-product d-flex justify-content-center">
                                    <h3 class="m-0">PRODUCT CATEGORIES</h3>
                                </div>
                            </div>
                            <ul class="pl-3 pb-3 mt-1 mb-2 ul-overflow">
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Black</a>
                                        </label>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Blue</a>
                                        </label>
                                    </div>
                                </li>
                                <li class="befor-check">
                                    <div class="form-check pt-2 pb-2">
                                        <label class="form-check-label">
                                            <a href="">Green</a>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </aside>
                    </aside>
                    <section class="col-md-9 mb-5 mt-3 pr-0">
                        <div class="card-products">
                            <div class="sort-cate pt-2 pb-2">
                                <p> Showing 1–12 of 23 results</p>
                                <!-- <div class="dropup">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropup
                                    </button>
                                    <div class="dropdown-menu">
                                        euhn
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <section id="product">
                            <div class="col-md-12 p-0 card-product">
                                <div class="row">
                                    <?php
                                        foreach ($products as $sp){
                                            $id = $sp['id'];
                                            $name = $sp['name'];
                                            $img = $sp['img'];
                                            $price = $sp['price'];
                                            $price_sale = $sp['price_sale'];
                                            $link="index.php?ctrl=product&action=product-detail&idsp=".$id;
                                            $linkadd="index.php?ctrl=cart&action=addtocart&idsp=".$id;
                                            echo '<div class="col-md-4">
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

                                    
                                    <!-- <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    </div> -->
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
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
                                </div> -->
                            </div>
                        </section>
                        <nav aria-label="Page navigation example" class="pt-3 d-flex justify-content-center">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                    </section>
                </div>
            </div>
        </section>
        <div class="clear" style="clear: both;"></div>

