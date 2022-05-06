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
.box_left {
    width: 50%;
    border: 1px solid #666;
    float: left;
    padding: 4px;
}
.box_right {
    width: 47%;
    border: 1px solid #666;
    float: right;
    padding: 4px;
    cursor: pointer;
}
/* .a_order {
    padding: 7px 20px;
    border:none;
    background: red;
    font-size: 21px;
    color: #fff;
    margin: 10px;
    cursor: pointer;
} */
</style>
<form action="" method="POST">
    <div class="small-container single-product">
        <h2>OFFLINE PAYMENT</h2>
        <div class="box_left">
        <div class="">
        <h4 class="title-cart">Giỏ hàng của bạn</h4>
        <?php
			if(isset($delcart)){
			echo $delcart;
			}
		?>
        <table>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Tổng</th>
            </tr>
            <?php
           
                $get_product_cart = $ct->get_product_cart();
                if($get_product_cart){
                    $subtotal = 0;
                    // $i = 0;
                    while($result = $get_product_cart->fetch_assoc()){
                        // $i++;
            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        
                        <div>
                            
                            <p><?php echo $result['productName'] ?></p>
                            <small><?php echo $result['price'] ?></small>
                            <br>
                            
                        </div>
                    </div>
                </td>
                <td><?php echo $result['quantity'] ?></td>
                <td><?php 
                    $total = $result['price'] * $result['quantity'];
                    // echo $total;
                    echo $fm->format_currency($total)." "."VNĐ";
                ?></td>
            </tr>
            <?php
            $subtotal += $total;
            // $qty = $qty + $result['quantity'];
                }
            }
            ?>
            
        </table>

        <?php
			$check_cart = $ct->check_cart();
			if($check_cart){

			?>

        <div class="total-price">
            <table>
                <tr>
                    <td>Tổng</td>
                    <td><?php
                    // 
                    echo $fm->format_currency($subtotal)." "."VNĐ";
                    ?></td>
                </tr>
                <tr>
                    <td>Thuế</td>
                    <td><?php
                        $vat = 0;
                        echo $vat;
                    ?></td>
                </tr>
                <tr>
                    <td>Tổng hết</td>
                    <td><?php
                    $gtotal = $subtotal + $vat;
                    // echo $gtotal;
                    echo $fm->format_currency($gtotal)." "."VNĐ";
                    ?></td>
                </tr>
            </table>
            <?php
                } else {
                    echo 'Your cart is empty! Please shopping now';
                }
            ?>
        </div>
    </div>
    </div>
    
    <div class="box_right">
        <table class="tblone">
            <?php
            $id = Session::get('customer_id');
            $get_customers = $cs->show_customers($id);
            if($get_customers){
                while($result = $get_customers->fetch_assoc()){
            ?>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $result['name']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $result['email']?></td>
            </tr>
            <tr>
                <td colspan="3"><a href="editprofile.php">Update Profile</a></td>
            </tr>
            
            <?php
                }
            }
            ?>
        </table>

        <!-- <table class="tblone">
            <?php
            $id = Session::get('customer_id');
            $get_customers = $cs->show_customers($id);
            if($get_customers){
                while($result = $get_customers->fetch_assoc()){
            ?>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $result['name']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $result['email']?></td>
            </tr>
            <tr>
                <td colspan="3"><a href="editprofile.php">Update Profile</a></td>
            </tr>
            
            <?php
                }
            }
            ?>
        </table> -->
        </div>
        <center><a href="?orderid=order" class="btn">Order Now</a></center>
        
    </div>
    
</form>
    
    
    

<?php
    // include 'inc/footer.php';
?>

