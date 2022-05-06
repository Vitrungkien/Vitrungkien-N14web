<?php
    include 'inc/header.php';
?>

<?php
    $login_check = Session::get('customer_login');
    if($login_check == false){
        header('Location:account.php');
    } 
?> 

<div class="small-container cart-page">
        <h2 class="title-cart">ORDER PAGE</h2>
        <div class="not_found">
            <h3>Order page</h3>
        </div>
    </div>
    
<?php
    include 'inc/footer.php';
?>
