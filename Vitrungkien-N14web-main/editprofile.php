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
    $id = Session::get('customer_id');
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
        $UpdateCustomer = $cs->update_customers($_POST, $id);
    }
?>
<!-- -----------------Single product-details----------------- -->

    <div class="small-container single-product">
        <h3>Update Profile Customer</h3>
        <form action="" method="post">
        <table class="tblone">
            <tr>
                    <?php
                    if(isset($UpdateCustomer)){
                        echo '<td colspan="3">'.$UpdateCustomer.'</td>';
                    }
                    ?>
                
            </tr>
            <?php
            $id = Session::get('customer_id');
            $get_customers = $cs->show_customers($id);
            if($get_customers){
                while($result = $get_customers->fetch_assoc()){
            ?>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" class="profile" width="50" name="name" value="<?php echo $result['name']?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input class="profile" type="text" width="50px" name="email" value="<?php echo $result['email']?>"></td>
            </tr>
            <tr>
                <td colspan="4"><input type="submit" name="save" value="Save" class="btn"></td>
            </tr>
            <!-- <tr>
                <td>Name</td>
                <td>:</td>
                <td>Thang</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>Thang</td>
            </tr> -->
            <?php
                }
            }
            ?>
        </table>
        </form>

    </div>


<?php
    include 'inc/footer.php';
?>

