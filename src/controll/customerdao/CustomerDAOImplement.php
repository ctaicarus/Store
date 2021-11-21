<? php
class CustomerDAOImplement implements CustomerDAO{
	public function addCustomer($customer){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_customer");
        }        
        $sql_insert_customer = mysqli_query($con,"INSERT INTO tbl_customer(customer_fullname,customer_address,customer_account,
            customer_id,customer_phone,customer_sex,customer_dob) values ('$customer->fullname','$customer->address',
            '$customer.account','$customer.id','$customer.phone','$customer.sex','$customer->dob')");
    };

    public function editCustomer($customer){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_customer");
        }        
        $sql_update_customer = mysqli_query($con,"UPDATE INTO tbl_customer(customer_fullname,customer_address,customer_account,
            customer_id,customer_phone,customer_sex,customer_dob) values ('$customer->fullname','$customer->address',
            '$customer.account','$customer.id','$customer.phone','$customer.sex','$customer->dob')");        
    };

    public function deleteCustomer($customer){
        if(isset($_GET['delete'])){
            $id= $_GET['delete'];
            $sql_delete = mysqli_query($con,"delete FROM tbl_customer");
        }        
        $sql_delete_customer = mysqli_query($con,"DELETE INTO tbl_customer(customer_fullname,customer_address,customer_account,
            customer_id,customer_phone,customer_sex,customer_dob) values ('$customer->fullname','$customer->address',
            '$customer.account','$customer.id','$customer.phone','$customer.sex','$customer->dob')"); 
    };
    
    public function viewOrder($order){
         if(isset($_POST['themgiohang'])){
            $tensanpham = $_POST['tensanpham'];
            $sanpham_id = $_POST['sanpham_id'];
            $hinhanh = $_POST['hinhanh'];
            $gia = $_POST['giasanpham'];
            $soluong = $_POST['soluong'];   
            $sql_select_giohang = mysqli_query($con,"SELECT * FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
            $count = mysqli_num_rows($sql_select_giohang);
            if($count>0){
                $row_sanpham = mysqli_fetch_array($sql_select_giohang);
                $soluong = $row_sanpham['soluong'] + 1;
                $sql_giohang = "UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'";
            }else{
                $soluong = $soluong;
                $sql_giohang = "INSERT INTO tbl_giohang(tensanpham,sanpham_id,giasanpham,hinhanh,soluong) values ('$tensanpham','$sanpham_id','$gia','$hinhanh','$soluong')";

            }
            $insert_row = mysqli_query($con,$sql_giohang);
            // if($insert_row==0){
            //  header('Location:index.php?quanly=chitietsp&id='.$sanpham_id);  
            // }

         }elseif(isset($_POST['capnhatsoluong'])){
            
            for($i=0;$i<count($_POST['product_id']);$i++){
                $sanpham_id = $_POST['product_id'][$i];
                $soluong = $_POST['soluong'][$i];
                if($soluong<=0){
                    $sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
                }else{
                    $sql_update = mysqli_query($con,"UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'");
                }
            }

         }elseif(isset($_GET['xoa'])){
            $id = $_GET['xoa'];
            $sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE giohang_id='$id'");

         }elseif(isset($_GET['dangxuat'])){
            $id = $_GET['dangxuat'];
            if($id==1){
                unset($_SESSION['dangnhap_home']);
            }

         
         }elseif(isset($_POST['thanhtoan'])){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $note = $_POST['note'];
            $address = $_POST['address'];
            $giaohang = $_POST['giaohang'];
         
            $sql_khachhang = mysqli_query($con,"INSERT INTO tbl_khachhang(name,phone,email,address,note,giaohang,password) values ('$name','$phone','$email','$address','$note','$giaohang','$password')");
            if($sql_khachhang){
                $sql_select_khachhang = mysqli_query($con,"SELECT * FROM tbl_khachhang ORDER BY khachhang_id DESC LIMIT 1");
                $mahang = rand(0,9999);
                $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
                $khachhang_id = $row_khachhang['khachhang_id'];
                $_SESSION['dangnhap_home'] = $row_khachhang['name'];
                $_SESSION['khachhang_id'] = $khachhang_id;
                for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
                    $sanpham_id = $_POST['thanhtoan_product_id'][$i];
                    $soluong = $_POST['thanhtoan_soluong'][$i];
                    $sql_donhang = mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
                    $sql_giaodich = mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
                    $sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
                }

            }
         }elseif(isset($_POST['thanhtoandangnhap'])){

            $khachhang_id = $_SESSION['khachhang_id'];
            $mahang = rand(0,9999); 
            for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
                    $sanpham_id = $_POST['thanhtoan_product_id'][$i];
                    $soluong = $_POST['thanhtoan_soluong'][$i];
                    $sql_donhang = mysqli_query($con,"INSERT INTO tbl_donhang(sanpham_id,khachhang_id,soluong,mahang) values ('$sanpham_id','$khachhang_id','$soluong','$mahang')");
                    $sql_giaodich = mysqli_query($con,"INSERT INTO tbl_giaodich(sanpham_id,soluong,magiaodich,khachhang_id) values ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
                    $sql_delete_thanhtoan = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
                }

            
            };
}
?>