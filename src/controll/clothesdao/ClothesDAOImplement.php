<? php
interface ClothesDAOImplement implements ClothesDAO{
    public function insertClothes($clothes){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insertFROM tbl_clothes WHERE clothes_id='$id'");
        }        
        $sql_insert_clothes = mysqli_query($con,"INSERT INTO tbl_clothes(clothes_name,clothes_chitiet,clothes_mota,
            clothes_gia,clothes_giakhuyenmai,clothes_soluong,clothes_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");        
    };

    public function updateClothes($clothes){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_clothes WHERE book_id='$id'");
        }     
        $sql_update_clothes = mysqli_query($con,"UPDATE INTO tbl_clothes(clothes_name,clothes_chitiet,clothes_mota,clothes_gia,book_giakhuyenmai,clothes_soluong,clothes_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");        
    };

    public function deleteClothes($clothes){
        if(isset($_GET['xoa'])){
            $id= $_GET['xoa'];
            $sql_xoa = mysqli_query($con,"DELETE FROM tbl_clothes WHERE clothes_id='$id'");
        } 
        $sql_dalete_clothes = mysqli_query($con,"DELETE INTO tbl_clothes(clothes_name,clothes_chitiet,clothes_mota,clothes_gia,
            clothes_giakhuyenmai,clothes_soluong,clothes_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");       
    };

    

}
?>