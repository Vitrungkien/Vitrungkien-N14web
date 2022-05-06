<?php
    include 'inc/header.php';
?>
<?php
	if(isset($_GET['cartid'])){
        $cartid = $_GET['cartid']; 
        $delcart = $ct->del_product_cart($cartid);
    }
 	// if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
 	// 	$cartId = $_POST['cartId'];
    //     $quantity = $_POST['quantity'];
    //     $update_quantity_cart = $ct->update_quantity_cart($quantity, $cartId);
    //     if($quantity<=0){
    //     	$delcart = $ct->del_product_cart($cartId);
    //     }
    // }
?>

<!-- ------cart items details--- -->
    <div class="small-container cart-page">
        <h2 class="title-cart">Giỏ hàng của bạn</h2>
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
            // $subtotal=0;
            // $qty = 0;
                $get_product_cart = $ct->get_product_cart();
                if($get_product_cart){
                    $subtotal = 0;
                    // $qty = 0;
                    while($result = $get_product_cart->fetch_assoc()){
                        
                    
            ?>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="admin/uploads/<?php echo $result['image'] ?>">
                        <div>
                            <p><?php echo $result['productName'] ?></p>
                            <small><?php echo $result['price'] ?></small>
                            <br>
                            <a href="?cartid=<?php echo $result['cartId'] ?>">Xóa</a>
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
        <td colspan="1"><a href="payment.php" class="btn">Thanh Toán</a></td>
    </div>
<!-- ----End cart items details- -->


<?php
    include 'inc/footer.php';
?>


<!-- ------js for toggle menu -- -->
        <script>        //Hiển thị menu với màn hình khác nhau
            var MenuItems = document.getElementById("MenuItems")

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if (MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
<!-- ----End js for toggle menu- -->

</body>

</html>