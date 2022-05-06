<?php
    include 'inc/header.php';
?>

<?php
    $login_check = Session::get('customer_login');
    if($login_check == false){
        header('Location:account.php');
    } 
?>

<?php
    // if(!isset($_GET['proid']) || $_GET['proid']==NULL){
    //     echo "<script>window.location ='404.php'</script>";
    // }else{
    //     $id = $_GET['proid']; 
    // }
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    //     $quantity = $_POST['quantity'];
    //     $AddtoCart = $ct->add_to_cart($quantity, $id);
        
    // }
?>
<!-- -----------------Single product-details----------------- -->
    <style>
        h3.payment{
            text-align:center;
            font-size: 20px;
            font-weight: bold;
            text-decoration: underline;
        }
        .wrapper_method{
            text-align:center;
            width: 550px;
            margin: 0 auto;
            /* border: 1px solid #666; */
            border: none;
            padding: 20px;
            background: white;
        }
        .wrapper_method h3 {
            margin-bottom: 20px;
        }
    </style>

    <div class="small-container single-product">
        <h2>PAYMENT METHOD</h2>
        <br>
        <div class="wrapper_method">
        <h3 class="payment">Choose your method payment</h3>
        <br>
        <a href="offlinepayment.php" class="btn">Offline payment</a>
        
        <a href="onlinepayment.php" class="btn">Online payment</a>
        <br>
        <a style="background:grey" href="cart.php"> << Previous </a>
        </div>
        
    </div>
    <!-- <div class="">
    
    </div> -->
        

<?php
    include 'inc/footer.php';
?>

