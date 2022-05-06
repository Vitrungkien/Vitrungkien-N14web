<?php
   include 'lib/session.php';
   Session::init();
?>

<?php
	include 'lib/database.php';
	include 'helpers/format.php';

   spl_autoload_register(function($className){
		include_once "classes/".$className.".php";
	});

   $db = new Database();
	$fm = new Format();
	$ct = new cart();
	$us = new user();
	$cat = new category();
	$cs = new customer();
	$product = new product();
?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapStore - Laptop, Máy tính xách tay giá tốt nhất Việt Nam</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- ------------Menu----------- -->
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" width="180px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="products.php">Sản phẩm</a></li>
                    <li><a href="about.php">About</a></li>
                    <?php
                    $login_check = Session::get('customer_login');
                    if($login_check == false){
                        echo '';
                    } else {
                        echo '<li><a href="profile.php">Profile</a></li>';
                    }
                    ?>
                    
                    <?php
                    if(isset($_GET['customer_id'])){
                        // $customer_id = $_GET['customer_id'];
                        $delCart = $ct->del_all_data_cart();
                        // $delCompare = $ct->del_compare($customer_id);
                        Session::destroy();
                    }
                    ?>
                    <li>
                    <?php
                    $login_check = Session::get('customer_login');
                    if($login_check == false){
                        echo '<a href="account.php">Đăng nhập</a></li>';
                    } else {
                        echo '<a href="?customer_id='.Session::get('customer_id').'">Đăng xuất</a></li>';
                    }
                    ?>    
                    </li>
                </ul>
            </nav>
            <?php
                $check_cart = $ct->check_cart();
                if($check_cart == true){
                    echo '<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>';
                }else{
                    echo '';
                }
            ?>
            <!-- <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a> -->
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>
</div>