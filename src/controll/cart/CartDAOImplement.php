<? php
interface CartDAOImplement implements CartDAO{
    public function addBookItemToCart($bookItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_bookItem WHERE book_id='$id'");
        }        
        $sql_insert_bookitem = mysqli_query($con,"INSERT INTO tbl_bookItem(bookItem_name,bookItem_chitiet,bookItem_mota,
            bookItem_gia,bookItem_giakhuyenmai,bookItem_soluong,bookItem_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");        
    };

    public function addElectronicsItemToCart($electronicsItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert  FROM tbl_electronic WHERE electronic_id='$id'");
        }        
        $sql_insert_electronicitem = mysqli_query($con,"INSERT INTO tbl_electronic(electronic_name,electronic_chitiet,electronic_mota,electronic_gia,electronic_giakhuyenmai,electronic_soluong,electronic_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");      
    };

    public function addShoesItemToCart($shoesItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert  FROM tbl_shoesItem WHERE shoesItemc_id='$id'");
        }        
        $sql_insert_shoesItem = mysqli_query($con,"INSERT INTO tbl_shoesItemc(shoesItem_name,shoesItem_chitiet,shoesItem_mota,
            shoesItem_gia,shoesItem_giakhuyenmai,shoesItem_soluong,shoesItemc_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");          
    };

    public function addClothesItemToCart($clothesItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_clothesItem WHERE book_id='$id'");
        }        
        $sql_insert_clothesItem = mysqli_query($con,"INSERT INTO tbl_clothesItem(clothesItem_name,clothesItem_chitiet,
            clothesItem_mota,bookm_gia,clothesItem_giakhuyenmai,clothesItem_soluong,clothesItem_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");           
    };

    public function getPayment($payment){
         if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_select = mysqli_query($con,"select FROM tbl_payment WHERE payment='$id'");
        }        
        $sql_select_payment = mysqli_query($con,"select INTO tbl_payment(payment_name,payment_chitiet,
            payment_mota,payment_gia,payment_giakhuyenmai,payment_soluong,payment_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");          
    };    

}
?>