<? php
class ShoesDAOImplement implements ShoesDAO{
	public function insertShoes($shoes){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_shoes WHERE shoes_id='$id'");
        }        
        $sql_insert_shoes = mysqli_query($con,"INSERT INTO tbl_shoes(shoes_name,shoes_chitiet,shoes_mota,shoes_gia,shoes_giakhuyenmai,shoes_soluong,shoes_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");        
    };

    public function updateShoes($shoes){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_shoes WHERE shoes_id='$id'");
        }        
        $sql_update_shoes = mysqli_query($con,"UPDATE INTO tbl_shoes(shoes_name,shoes_chitiet,shoes_mota,shoes_gia,shoes_giakhuyenmai,shoes_soluong,shoes_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");         
    };

    public function deleteShoes($shoes){
        if(isset($_GET['delete'])){
            $id= $_GET['delete'];
            $sql_delete = mysqli_query($con,"delete FROM tbl_shoes WHERE shoes_id='$id'");
        }        
        $sql_delete_shoes = mysqli_query($con,"DELETE INTO tbl_shoes(shoes_name,shoes_chitiet,shoes_mota,shoes_gia,shoes_giakhuyenmai,shoes_soluong,shoes_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");        
    };

}
?>