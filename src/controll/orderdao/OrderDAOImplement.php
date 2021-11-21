<? php
interface OrderDAOImplement implements OrderDAO{
    public function addOrder($order){
         if(isset($_POST['themgiohang'])){
            $tensanpham = $_POST['tensanpham'];
            $sanpham_id = $_POST['sanpham_id'];
            $hinhanh = $_POST['hinhanh'];
            $gia = $_POST['giasanpham'];
            $soluong = $_POST['soluong'];   
            $sql_select_order = mysqli_query($con,"SELECT * FROM tbl_order WHERE sanpham_id='$sanpham_id'");
            $count = mysqli_num_rows($sql_select_order);
            if($count>0){
                $row_sanpham = mysqli_fetch_array($sql_select_order);
                $soluong = $row_sanpham['soluong'] + 1;
                $sql_giohang = "UPDATE tbl_order SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'";
            }else{
                $soluong = $soluong;
                $sql_giohang = "INSERT INTO tbl_order(tensanpham,sanpham_id,giasanpham,hinhanh,soluong) values ('$tensanpham','$sanpham_id','$gia','$hinhanh','$soluong')";

            }
            $insert_row = mysqli_query($con,$sql_giohang);
            // if($insert_row==0){
            //  header('Location:index.php?quanly=chitietsp&id='.$sanpham_id);  
            // }

         }        
    };

    public function updateOrder($order){
        if(isset($_POST['capnhatsoluong'])){
            
            for($i=0;$i<count($_POST['product_id']);$i++){
                $sanpham_id = $_POST['product_id'][$i];
                $soluong = $_POST['soluong'][$i];
                if($soluong<=0){
                    $sql_delete = mysqli_query($con,"DELETE FROM tbl_giohang WHERE sanpham_id='$sanpham_id'");
                }else{
                    $sql_update = mysqli_query($con,"UPDATE tbl_giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'");
                }
            }

         }        
    };

    public function viewCustomer($customer){
        if(isset($_GET['view_customer'])){
            $id= $_GET['view_customer'];
            $sql_select = mysqli_query($con,"select FROM tbl_customer");
        }        
        
        $sql_select_customer = mysqli_query($con,"SELECT INTO tbl_customer(customer_fullname,customer_address,customer_account,
            customer_id,customer_phone,customer_sex,customer_dob) values ('$customer->fullname','$customer->address',
            '$customer.account','$customer.id','$customer.phone','$customer.sex','$customer->dob')");
    };

    public function viewCart($cart){
        if(isset($_GET['view_cart'])){
            $id= $_GET['view_cart'];
            $sql_select = mysqli_query($con,"select FROM tbl_cart");
        }        

        $sql_select_cart = mysqli_query($con,"SELECT INTO tbl_cart(cart_dateCreate, cart_quantity, cart_totalPrice) values ('$cart_dateCreate', '$cart_quantity', '$cart_totalPrice')");        
    };

    public function getShipment($shipment){
        if(isset($_GET['view_shipment'])){
            $id= $_GET['view_shipment'];
            $sql_select = mysqli_query($con,"select FROM tbl_shipment");
        }     

        $sql_select_shipment = mysqli_query($con,"SELECT INTO tbl_shipment(shipment_name, shipment_price, shipment_address) values ('$shipmentt_name', '$shipment_price', '$shipment_address')");        
    };

    public function getPayment($payment){
        if(isset($_GET['view_payment'])){
            $id= $_GET['view_payment'];
            $sql_select = mysqli_query($con,"select FROM tbl_payment");
        }      

        $sql_select_payment = mysqli_query($con,"SELECT INTO tbl_payment(shipment_check, shipment_cash, shipment_credit) values ('$shipmentt_check', '$shipment_cash', '$shipment_credit')");           
    };    

}
?>