<?php
ob_start();
    include_once 'Model/cart.php';
    include 'vendor/phpmailer/phpmailer/src/Exception.php';
    include 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    include 'vendor/phpmailer/phpmailer/src/SMTP.php';
    include 'vendor/phpmailer/phpmailer/src/OAuth.php';
    include 'vendor/phpmailer/phpmailer/src/POP3.php';


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    $action='index';
    if(isset($_GET['action'])){
        $action=$_GET['action'];
    }
    switch($action){
        case 'index':
            include('View/cart/index.php');
        break;
        case 'addtocart':
            //lay product theo id cate
            if(isset($_GET['idsp']) && $_GET['idsp']){
                $id=$_GET['idsp'];
                addToCart($id);
            }
            include('View/cart/index.php');
        break;
        // case 'delete':
        //     if(isset($_GET['idsp']) && $_GET['idsp']){
        //         $id=$_GET['idsp'];
        //         $product = deleteCart($id);
        //     }
        //     header('location: index.php?ctrl=cart&action=delete='.$id);
        // break;
        //    echo '<script type="text/javascript">
        //          window.location="index.php?ctrl=cart";  
        // </script>';
        
        case 'checkout':
            //luu thong tin don hang
            if(isset($_POST['order_click'])&& $_POST['order_click']){
                if(isset($_SESSION['total'])){
                    $total=$_SESSION['total'];
                }
                $fname=$_POST['fullName'];
                $add=$_POST['address'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $ngay=date('Y-m-d H:i:s');//ngay thang nam, gio,.. hien tai
                $madh=addToOrder($fname,$add,$email,$phone,$total,$ngay);
                //luu chi tiet don hang
                addToOrderDetail($madh);
                unset($total);
                unset($_SESSION['carts']);//xoa gio hang
                

                // Load Composer's autoloader
                include 'vendor/autoload.php';

                // Instantiation and passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    // $mail->SMTPDebug = 4;                      // Enable verbose debug output
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'nts.musicaudio@gmail.com';                     // SMTP username
                    $mail->Password   = 'mamlatao148';                               // SMTP password
                    // $mail->SMTPSecure = 'tls';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;
                    $mail->CharSet    = 'UTF-8';                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients

                    $fullName = $_POST['fullName'];
                    $emailorder = $_POST['email'];

                    $mail->setFrom('ellie@xxxx.com', 'shopping card');
                    $mail->addAddress($emailorder, $fullName);     // Add a recipient
                    // $mail->addAddress('ellen@example.com');               // Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');

                    // Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                    $mail->addAttachment('public/images/logo.png');    // Optional name

                    // Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Hello đây là thông tin bạn vừa order';
                    $mail->Body    = 'Cảm ơn bạn đã mua hàng bên chúng tôi';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    // echo 'Đã gửi đơn hàng thành công';
                } catch (Exception $e) {
                    echo "Lỗi gửi mail: {$mail->ErrorInfo}";
                }

                // echo '<script type="text/javascript">
                //         alert("Order Success");
                //         window.location="index.php?ctrl=cart&action=checkout";
                //     </script>';

            }

            
            
        break;



    }
?>
