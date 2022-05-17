<?php
    include 'inc/header.php';
?>


<!-- --------All Products------- -->
    <div class="small-container">
        <div class="row row-2">
            <h2>Tất cả sản phẩm</h2>
            <select>
                <option>Giá giảm dần</option>
                <option>Giá tăng dần</option>
                <option>Phổ biến nhất</option>
                <option>Đánh giá</option>
                <option>Bán chạy</option>
            </select>
        </div>
        <h2>Acer</h2>
        <div class="row"><!-- Products 1-4 Acer-->
        <?php
            $product_bybrand = $product->get_product_by_brand();
            if($product_bybrand){
                while($result = $product_bybrand->fetch_assoc()){
            
        ?>
            <div class="col-4">
                <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><img src="admin/uploads/<?php echo $result['image']?>"></a>
                <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><h4><?php echo $result['productName']?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p><?php echo $result['price']?></p>
            </div>
        <?php
        }}
        ?> 

        <h2>Lenovo</h2>
        <div class="row">   <!-- Products 13-16 Lenovo -->
        <?php
            $product_bybrand_lenovo = $product->get_product_by_brand_lenovo();
            if($product_bybrand_lenovo){
                while($result = $product_bybrand_lenovo->fetch_assoc()){
            
        ?>
            <div class="col-4">
            <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><img src="admin/uploads/<?php echo $result['image']?>"></a>
            <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><h4><?php echo $result['productName']?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p><?php echo $result['price']?></p>
            </div>
        <?php
        }}
        ?>     

        <!-- </div>  -->


        <h2>MSI</h2>
        <div class="row">   <!-- Products 16-19 MSI -->
        <?php
            $product_bybrand_msi = $product->get_product_by_brand_msi();
            if($product_bybrand_msi){
                while($result = $product_bybrand_msi->fetch_assoc()){
            
        ?>
            <div class="col-4">
            <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><img src="admin/uploads/<?php echo $result['image']?>"></a>
            <a href="product-details.php?proid=<?php echo $result['productId']  ?>"><h4><?php echo $result['productName']?></h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p><?php echo $result['price']?></p>
            </div>
            <?php
            }}
            ?> 
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
<!-- ------End All products----- -->

<?php
    include 'inc/footer.php';
?>

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

</body>
</html>