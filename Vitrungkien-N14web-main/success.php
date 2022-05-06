<?php
    include 'inc/header.php';
?>

<?php
    if(isset($_GET['orderid']) && $_GET['orderid']== 'order'){
        $customer_id = Session::get('customer_id');
        $insertOrder = $ct->insertOrder($customer_id);
        $delCart = $ct->del_all_data_cart();
        header('Location:success.php');
    }
    
?>
<!-- -----------------Single product-details----------------- -->
<style>
h2.success_order{
    text-align:center;
    color:red;
}
.success_note{
    text-align: center;
    padding: 8px;
    font-size: 17px; 
}
</style>
<form action="" method="POST">
    <div class="small-container single-product">
        <h2 class="success_order">Success Order</h2>
            <?php
                $customer_id = Session::get('customer_id');
                $get_amount = $ct->getAmountPrice($customer_id);
                if($get_amount){
                    $amount = 0;
                    while($result = $get_amount->fetch_assoc()){
                        $price = $result['price'];
                        $amount += $price; 

                    }
			    }
			?>
        <p class="success_note">Total Price You Have Bought From My Website: 
            <?php
                $vat = 0;
                $total = $vat + $amount;
                echo $fm->format_currency($total). ' VNĐ';


            ?>
        </p>
        <p class="success_note">We will contect as soon as possible. See your order detail here <a href="orderdetails.php">CLICK HERE</a></p>
    </div>
</form>
    
    
    
    
    
    
    

<?php
    include 'inc/footer.php';
?>

