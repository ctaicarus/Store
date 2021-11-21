<? php
interface PaymentDAOImplement implements PaymentDAO{
    public function addPayment($payment){
        if(isset($_GET['addPayment'])){
            $id= $_GET['addPayment'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_payment");
        }      

        $sql_insert_payment = mysqli_query($con,"INSERT INTO tbl_payment(payment_check, payment_cash, payment_credit) 
            values ('$payment_check', '$payment_cash', '$payment_credit')");            
    };
    

}
?>