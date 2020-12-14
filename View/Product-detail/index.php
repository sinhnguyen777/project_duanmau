<div class="benner-product">
            <img src="public/images/ribbon2.png" alt="">
            <nav class="nav-benner-product">
                <a href="">Home</a> / <a href="">shop</a>
                <h1>Shop</h1>
            </nav>
        </div>

        <section class="content-product-detail mb-5">
            <div class="container">
                <div class="row pl-5 pr-5">
                    
                <?php
                    foreach ($Pro as $pro) {
                        $id = $pro['id'];
                        $name = $pro['name'];
                        $img = $pro['img'];
                        $price = $pro['price'];
                        $price_sale = $pro['price_sale'];
                        $content = $pro['content'];
                        $linkadd="index.php?ctrl=cart&action=addtocart&idsp=".$id;
                        echo '<div class="col-md-6 pr-4">
                                <ul>
                                    <li><img src="public/images/sp1.png" alt=""></li>
                                    <li><img src="public/images/sp2.png" alt=""></li>
                                    <li><img src="public/images/sp3.png" alt=""></li>
                                    <li><img src="public/images/sp4.png" alt=""></li>
                                </ul>
                                <div class="img-card-detail">
                                    <img src="public/images/'.$img.'" alt="">
                                    
                                </div>
                            </div>
                            <div class="col-md-6 pl-4">
                                <h1>'.$name.'</h1>
                                <p class="price-cart"><span>£'.$price_sale.'</span> - £'.$price.'</p>
                                <p>'.$content.'</p>
                                <form action="" class="pb-4">
                                    <div class="quatily">
                                        <input type="number" name="" id="" placeholder="1">
                                        <a href="'.$linkadd.'">
                                            <button type="button" class="btn btn-primary m-0">ADD TO CART</button>
                                        </a>
                                    </div>
                                </form>
                                <p class="m-0"><i class="far fa-bookmark"></i> CATEGORIES: BODY, MAKEUP, PERSONAL CARE, WELLNESS</p>
                                <p class="m-0"><i class="fas fa-tags"></i> TAGS: FREEDOM, LOVE, STORM</p>
                            </div>';
                    }
                ?>

                    <!-- <div class="col-md-6 pr-3">
                        <ul>
                            <li><img src="public/images/sp1.png" alt=""></li>
                            <li><img src="public/images/sp2.png" alt=""></li>
                            <li><img src="public/images/sp3.png" alt=""></li>
                            <li><img src="public/images/sp4.png" alt=""></li>
                        </ul>
                        <div class="img-card-detail">
                            <img src="public/images/sp1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 pl-3">
                        <h1>Ellie Cosmetics Brush</h1>
                        <p class="price-cart"><span>£30.00</span> - £35.00</p>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        <form action="" class="pb-4">
                            <div class="quatily">
                                <input type="number" name="" id="" placeholder="1">
                                <button href="" class="btn-add">ADD TO CART</button>
                            </div>
                        </form>
                        <p class="m-0"><i class="far fa-bookmark"></i> CATEGORIES: BODY, MAKEUP, PERSONAL CARE, WELLNESS</p>
                        <p class="m-0"><i class="fas fa-tags"></i> TAGS: FREEDOM, LOVE, STORM</p>
                    </div> -->
                </div>
            </div>
        </section>

        <section class="tile_detail mb-5">
            <div class="container">
                <div class="row pt-5 pb-3 d-flex justify-content-center">
                    <div class="col-md-10">
                        <h3 class="pt-4 pb-5 d-flex justify-content-center">DESCRIPTION</h3>
                        <p class=" pb-5 float-left">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="comment mb-5">
            <div class="container">
                <div class="row pt-5 pb-3 d-flex justify-content-center">
                    <div class="col-md-7">
                        <h1 class="pt-4 pb-4 d-flex justify-content-center">2 reviews for Ellie Cosmetics Brush</h1>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6">
                                <p>
                                    <span class="span-1">Cobus Bester</span> - <span class="span-2">June 7, 2013</span>
                                </p>
                                <p>This album proves why The Woo are the best band ever. Best music ever!</p>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <span class="span-1">Maria</span> - <span class="span-2">June 7, 2013</span>
                                </p>
                                <p>Can’t wait to start mixin’ with this one! Irba-irr-Up-up-up-up-date your theme!</p>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                ADD A REVIEW
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close p-2 m-0" data-dismiss="modal" >
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0">
                                        
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>