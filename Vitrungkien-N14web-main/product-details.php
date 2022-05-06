<?php
    include 'inc/header.php';
?>

<?php
    if(!isset($_GET['proid']) || $_GET['proid']==NULL){
        echo "<script>window.location ='404.php'</script>";
    }else{
        $id = $_GET['proid']; 
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $quantity = $_POST['quantity'];
        $AddtoCart = $ct->add_to_cart($quantity, $id);
        
    }
?>
<!-- -----------------Single product-details----------------- -->

    <div class="small-container single-product">
        <?php
            $get_product_details = $product->get_details($id);
            if($get_product_details){
                while($result_details = $get_product_details->fetch_assoc()){

               
        ?>
        <div class="row">
            <div class="col-2">
                <img src="admin/uploads/<?php echo $result_details['image'] ?>" width="100%" id="ProductImg">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="imgs/acer1.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="imgs/small-acer1.1.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="imgs/small-acer1.2.png" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="imgs/small-acer1.3.png" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / Acer</p>
                <h1><?php echo $result_details['productName'] ?></h1>
                <h4><?php echo $result_details['price']." "."VNĐ" ?></h4>
                <select>
                    <option>Sellect RAM</option>
                    <option>4 GB</option>
                    <option>8 GB</option>
                    <option>12 GB</option>
                    <option>16 GB</option>
                </select>

                <!-- <input type="number" value="1">
                <a href="cart.php" class="btn">Thêm vào giỏ hàng</a> -->
                <!-- <input type="number" value="1">
                <a action="" method="post" class="btn">Thêm vào giỏ hàng</a> -->
                <div class="add-cart">
                    <form action="" method="post">
                        <input type="number" name="quantity" value="1" min="1"/>
                        <input type="submit" class="btn" name="submit" value="Thêm vào giỏ hàng"/>
                        
                    </form>
                    <?php
                        if(isset($AddtoCart)){
                            echo'<span style="color:red;font-size:18px;">Product already added</span>';
                        }
                    ?>
                </div>

                <h3>Chi tiết sản phẩm <i class="fa fa-indent"></i></h3>
                <br>
                <h5><?php echo $result_details['product_desc'] ?></h5><br>
                <!-- <br>
                <p>CPU: Intel core i7 11800H</p><br>
                <p>RAM: 8GB DDR4</p> <br>
                <p>Ổ cứng: SSD 512GB NVMe</p> <br>
                <p>Card đồ họa: Card rời RTX 3050Ti 4GB</p><br>
                <p>Màn hình: 15.6 Inch Full HD 144Hz</p> -->
            </div>
        </div>
        <?php
         }
        }
        ?>

    </div>
<!-- ---------title---------- -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Sản phẩm liên quan</h2>
            <p class="xemthem">Xem thêm</p>
        </div>
    </div>

<!-- ---------------products--------------- -->
    <div class="small-container">

        <div class="row">   <!-- Products 13-16 Lenovo -->
            <div class="col-4">
                <img src="imgs/le1.jpg">
                <h4>LENONO LEGION 7 16ACHG6</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>67.990.000đ</p>
            </div>
            <div class="col-4">
                <img src="imgs/le2.jpg">
                <h4>LENONO LEGION 5 PRO 2021 </h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>39.490.000đ</p>
            </div>
            <div class="col-4">
                <img src="imgs/le3.jpg">
                <h4>LENONO LEGION S7</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>38.990.000đ</p>
            </div>
            <div class="col-4">
                <img src="imgs/le4.jpg">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>35.990.000đ</p>
            </div>
        </div> 

        <div class="page-btn">  <!---- Nút chuyển trang ---->
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>

    </div>

<?php
    include 'inc/footer.php';
?>

<!-- -------------- js for toggle menu ------------------ -->
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

<!-- ---------------js for product gallery------------ -->
        <script>  //click ảnh nhỏ sẽ hiện ra ảnh lớn sp
            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }
        </script>
</body>
</html>