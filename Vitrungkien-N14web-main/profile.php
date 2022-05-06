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

    <div class="small-container single-product">
        <h3>Profile Customer</h3>
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

    </div>


<?php
    include 'inc/footer.php';
?>

