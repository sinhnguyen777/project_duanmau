
        <div class="benner-product">
            <img src="public/images/ribbon2.png" alt="">
            <nav class="nav-benner-product">
                <a href="">Home</a> / <a href="">cart</a>
                <h1>Cart</h1>
            </nav>
        </div>
        <section class="check-cart mt-5 mb-5">
            <div class="container">
                <div class="row cart-row d-flex justify-content-center">
                    <form action="View/cart/index.php&action=submit" method="post" class="w-100" >
                    
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">PRODUCT</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">QUANTITY</th>
                                    <th scope="col">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                    if(isset($_SESSION['carts'])){
                                
                                        foreach ($_SESSION['carts'] as $p){
                                        
                                            echo '<tr>
                                                    <td>
                                                        <a href="index.php?ctrl=cart&action=delete='.$p['id'].'">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="img-sp-cart">
                                                            <img src="public/images/'.$p['image'].'" alt="">
                                                        </div>
                                                    </td>
                                                    <td>'.$p['name'].'</td>
                                                    <td>'.$p['price'].'</td>
                                                    <td>
                                                        <div class="quatily-cart">
                                                            '.$p['quantity'].'
                                                        </div>
                                                    </td>
                                                    <td>£'.($p['price'] * $p['quantity']).'</td>
                                                </tr>';
                                        }
                                    }
                                    
                                ?>
                                <!-- <tr>
                                    <td><a href="">Xoá</a></td>
                                    <td>
                                        <div class="img-sp-cart">
                                            <img src="public/images/sp1.png" alt="">
                                        </div>
                                    </td>
                                    <td>Liquid Container Green</td>
                                    <td>£12.00</td>
                                    <td>
                                        <div class="quatily-cart">
                                            <input type="number" name="" id="">
                                        </div>
                                    </td>
                                    <td>£12.00</td>
                            </tr> -->
                            <!-- <tr class="table-primary">
                                <td><a href="">&nbsp;</a></td>
                                <td>
                                    <h3>Tổng tiền</h3>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>£12.00</td>
                            </tr> -->
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-dark float-right" name="update_cart">update</button>
                    </form>
                </div>
                <div class="row form-cart mt-3">
                    <div class="col-md-6">
                        <h3>Billing details</h3>

                        <?php
                            if (isset($_POST['order_click']) && $_POSTgit['order_click'] )  {
                                echo "dang chay send email";
                            }else{
                        
                        ?>

                        <form action="index.php?ctrl=cart&action=checkout" method="post" >
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="fullName" value="<?php $fname ?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php $email ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="address" <?php $add ?> required />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="number" class="form-control" id="exampleInputPassword1" name="phone" value="<?php $phone ?>" required />
                            </div>
                            <button type="submit" class="btn btn-primary" name="order_click" value="order_click">order</button>
                        </form>
                            
                        <?php } ?>

                    </div>

                    <div class="col-md-6">
                        <h3>Cart totals</h3>
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Tổng sản phẩm</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody >
                                <tr>
                                    <?php
                                        $total_quantity = 0;
                                        $total_price = 0;
                                        if(isset($_SESSION['carts']) && $_SESSION['carts'])
                                        {
                                            foreach ($_SESSION['carts'] as $cart){
                                                $total_quantity += $cart['quantity'];
                                                $total_price += $cart['price'] * $cart['quantity'];
                                            }
                                        }
                                    ?>
                                    <td>
                                        <?= $total_quantity ?>
                                    </td>
                                    <td>
                                        £<?php 
                                       $total= number_format($total_price, 2, '.', "00");
                                        echo $total;
                                        $_SESSION['total']=$total_price; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>