<?php
// session_start();
include_once 'Model/product.php';
function addToCart($id)
{
    //lay thong tin san pham can them vao gio hang
    $product = getProductgByID($id);
    $bool = false;
    $i = 0;
    if (!isset($_SESSION['carts'])) {
        $_SESSION['carts'] = ['0' => ["id" => $id, "name" => $product['name'], "price" => $product['price'], "image" => $product['img'], "quantity" => 1]];
    } else {
        foreach ($_SESSION['carts'] as $item) {
            if ($item['id'] == $id) {
                array_splice($_SESSION['carts'], $i, 1, [["id" => $id, "name" => $product['name'], "price" => $product['price'], "image" => $product['img'], "quantity" => $item['quantity'] + 1]]);
                $bool = true;
            }
            $i++;
        }
        if ($bool == false) {
            array_push($_SESSION['carts'], ["id" => $id, "name" => $product['name'], "price" => $product['price'], "image" => $product['img'], "quantity" => 1]);
        }
    }
}
function addToOrder($fname,$add,$email,$phone,$total,$ngay)
{
    $query="insert into cart (name,address,email,phone,total,time)
    values('$fname','$add','$email','$phone','$total','$ngay')";
    $lastId = executeReturnID($query);
    return $lastId;//tra ve ma don hang moi vua them
}
function addToOrderDetail($madh)
{
    foreach ($_SESSION['carts'] as $item) 
    {
        $masp=$item['id'];
        $sl=$item['quantity'];
        $price=$item['price'];
        $query="insert into cartdetail (cart_id,product_id,quantity,price)
        values('$madh','$masp','$sl','$price')";
        $STH = execute($query);
        // return $STH;
    }

}
// function deleteCart($id){
//     getProductgByID($id);
//     $id = $_GET['id'];
//     if (isset($_GET['id']) && ($_GET['id'])) {
//         unset($_SESSION['carts'][$_GET['id']]);
//     }
// }


?>
