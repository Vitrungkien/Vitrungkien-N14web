<?php
    include 'inc/header.php';
?>

<?php
    $login_check = Session::get('customer_login');
    if($login_check ){
        header('Location:order.php');
    } 
?> 

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertCustomers = $cs->insert_customers($_POST);
        
    }
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_Customers = $cs->login_customers($_POST);
        
    }
?>

<!-- --------Account page------- -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="imgs/home1.png" width="700px" height="500px">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Đăng nhập</span>
                            <span onclick="register()">Đăng ký</span>
                            <hr id="Indicator">
                        </div>
                        <!-- Dang nhap -->
                        <?php
                        if(isset($login_Customers)){
                            echo $login_Customers;
                        }
                        ?>
                        <form id="LoginForm" action="" method="POST">
                            <input type="text" name="email" placeholder="Email người dùng">
                            <input type="password" name="password" placeholder="Mật khẩu">
                            <button type="submit" name="login" class="btn">Đăng nhập</button>
                            <a href="">Quên mật khẩu</a>
                        </form>
                        <!-- Dang ky -->
                        <?php
                        if(isset($insertCustomers)){
                            echo $insertCustomers;
                        }
                        ?>
                        <form id="RegForm" action="" method="POST">
                            <input type="text" name="name" placeholder="Tên người dùng">
                            <input type="text" name="email" placeholder="Email">
                            <input type="text" name="password" placeholder="Mật khẩu">
                            <!-- <input type="text" name="email" placeholder="Email">
                            <input type="text" name="password" placeholder="Mật khẩu"> -->
                            <button type="submit" name="submit" class="btn" value="submit">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ------End Account page----- -->


<?php
    include 'inc/footer.php';
?>


<!-- -----js for toggle menu---- -->
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
<!-- ---End js for toggle menu-- -->


<!-- -----js for toogle form---- -->
        <script>

            var LoginForm = document.getElementById("LoginForm");
            var RegForm = document.getElementById("RegForm");
            var Indicator = document.getElementById("Indicator");
                function register(){
                    RegForm.style.transform = "translateX(0px)";
                    LoginForm.style.transform = "translateX(0px)";
                    Indicator.style.transform = "translateX(100px)";
                }

                function login(){
                    RegForm.style.transform = "translateX(300px)";
                    LoginForm.style.transform = "translateX(300px)";
                    Indicator.style.transform = "translateX(0px)";
                }
        </script>
 <!-- --End js for toogle form-- -->
</body>

</html>
