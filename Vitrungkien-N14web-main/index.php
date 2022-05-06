<?php
    include 'inc/header.php';
?>
<div class="header">
    <div class="container2">
        <div class="row">
                <div class="col-2">
                    <h1>Laptop 2022<br> rẻ nhất thị trường</h1>
                    <p>Laptop mới, laptop cũ, laptop gaming,<br>laptop học sinh, 
                    sinh viên, laptop văn phòng,...</p>
                    <a href="./products.php" class="btn">Khám phá ngay &#8594</a>
                </div>
                <div class="col-2">
                    <img src="imgs/home1.png">
                </div>
        </div>
    </div>
</div>
<!-- ----------End menu--------- -->

<!-- ------Feature Categories--- -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="imgs/acer1.jpg">
                </div>
                <div class="col-3">
                    <img src="imgs/le2.jpg">
                </div>
                <div class="col-3">
                    <img src="imgs/msi2.jpg">
                </div>
            </div>
        </div>
    </div>
<!-- ----End Feature Categories- -->

<!-- -------Feature Products --- -->
    <div class="small-container">
        <h2 class="title">Sản phẩm nổi bật</h2>
        <div class="row">   <!-- Products 1-4 -->
        <!-- ngay 29/4 -->
        <?php
            $product_feathered = $product->getproduct_feathered();
            if($product_feathered){
                while($result = $product_feathered->fetch_assoc()){
            
        ?>
            <div class="col-4">
                <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><img src="admin/uploads/<?php echo $result['image'] ?>"></a>
                <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><h4><?php echo $result['productName'] ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p><?php echo $result['price']." "."VNĐ" ?></p>
            </div>
        <?php
            }
        }
        ?>    
            <!-- ngay 30/4 -->
        </div>
        <h2 class="title">Sản phẩm mới nhất</h2>
        <div class="row">   
        <?php
            $product_new = $product->getproduct_new();
            if($product_new){
                while($result_new = $product_new->fetch_assoc()){
            
        ?>
            <div class="col-4">
                <a href="product-details.php?proid=<?php echo $result_new['productId']  ?>"><img src="admin/uploads/<?php echo $result_new['image'] ?>"></a>
                <a href="product-details.php?proid=<?php echo $result_new['productId']  ?>"><h4><?php echo $result_new['productName'] ?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p><?php echo $result_new['price']." "."VNĐ" ?></p>
            </div>
            <?php
            }
        }
        ?>    

        <!-- </div>
        <div class="row">   Products 9-12 -->
            <!-- <div class="col-4">
                <img src="imgs/msi1.jpg">
                <h4>MSI BRAVO 15 B5DD 264VN</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>20.990.000 đ</p>
            </div>
            

        </div>   -->
    </div>
<!-- -----End Feature Products-- -->

<!-- ------------Brands--------- -->
    <div class="brands">
        <h2 class="title">Thương hiệu nổi bật</h2>
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-lenovo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-dell.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-acer.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-razer.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-hp.png">
                </div>
            </div>
        </div>
    </div>
<!-- ----------End Brands------- -->


<!-- ---------End Footer-------- -->

<!-- ------js for toggle menu -- -->
        <script>
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

<?php
    include 'inc/footer.php';
?>