<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php
    class customer
    {
        private $db;
        private $fm;
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Format();
        }
        
        public function insert_customers($data){
            $name = mysqli_real_escape_string($this->db->link, $data['name']);
            $email = mysqli_real_escape_string($this->db->link, $data['email']);
            $password = mysqli_real_escape_string($this->db->link, md5($data['password']));
            $address = mysqli_real_escape_string($this->db->link, $data['address']);
            $phone = mysqli_real_escape_string($this->db->link, $data['phone']);
            //////////////////
            if($name=="" || $email=="" || $password=="" || $address=="" || $phone==""){
                $alert = "<span class='error'>Fields must be not empty</span>";
                return $alert;
            } else {
                $check_email = "SELECT * FROM tbl_customer WHERE email='$email' LIMIT 1";
                $result_check = $this->db->select($check_email);
                if($result_check){
                    $alert = "<span class='error'>Email already existed</span>";
                    return $alert;
                } else {
                    $query = "INSERT INTO tbl_customer(name,email,password,address,phone) VALUES('$name','$email','$password','$address','$phone')";
                    $result = $this->db->insert($query);
                    if($result){
                        $alert = "<span class='success'>Customer created Successfully</span>";
                        return $alert;
                    } else {
                        $alert = "<span class='error'>Customer created not Success</span>";
                        return $alert;
                    }
                }
            }
        }
        public function update_customers($data, $id){
			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);
			$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
			
			if($name=="" || $email=="" || $address=="" || $phone ==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				$query = "UPDATE tbl_customer SET name='$name',email='$email',address='$address',phone='$phone' WHERE id ='$id'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Customer Updated Successfully</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Customer Updated Not Successfully</span>";
						return $alert;
				}
				
			}
		}

        public function login_customers($data){
            $email = mysqli_real_escape_string($this->db->link, $data['email']);
            $password = mysqli_real_escape_string($this->db->link, md5($data['password']));
            if($email=='' || $password=='' ){
                $alert = "<span class='error'>Email and password must be not empty</span>";
                return $alert;
            } else {
                $check_login = "SELECT * FROM tbl_customer WHERE email='$email' AND password='$password' ";
                $result_check = $this->db->select($check_login);
                if($result_check){
                    $value = $result_check->fetch_assoc();
                    Session::set('customer_login',true);
                    Session::set('customer_id', $value['id']);
                    Session::set('customer_name', $value['name']);
                    header('Location:order.php');
                } else {
                    $alert = "<span class='error'>Email or password doesn't match</span>";
                    return $alert;
                }
            }
        }

        public function show_customers($id){
			$query = "SELECT * FROM tbl_customer WHERE id='$id'";
			$result = $this->db->select($query);
			return $result;
		}

        

    }
           
?>