
<div class="benner-product">
    <img src="public/images/ribbon2.png" alt="">
    <nav class="nav-benner-product">
        <a href="">Home</a> / <a href="">ACCOUNT</a>
        <h1>Account</h1>
    </nav>
</div>

<section class="account pt-5 pb-5">
    <div class="container">
        <div class="row account-row d-flex justify-content-center">
            <div class="col-md-6">
                <h1 class="d-flex justify-content-center pb-4">LOGIN</h1>
                <form action="index.php?ctrl=login" method="post"> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label m-0" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="form-group login-submit mb-4">
                        <button type="submit" name="login" value="login" class="btn btn-primary m-0">
                            LOGIN
                        </button>
                    <?php
                        if (isset($canhbao) && ($canhbao)!="") {
                            echo $canhbao;
                        }
                    ?>
                    </div>
                    <div class="form-group d-flex justify-content-center footer-form">
                        <a href="" class="pass pr-1">Lost your password? </a> / 
                        <a href="" class="pl-1"> Register</a>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
</section>