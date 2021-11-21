<? php
class ShoesItemDAOImplement implements ShoesItemDAO{
	public function insertShoesItem($shoesItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_shoesItem WHERE shoesItem _id='$id'");
        }        
        $sql_insert_shoesItem  = mysqli_query($con,"INSERT INTO tbl_shoesItem (shoesItem _name,shoesItem _chitiet,shoes_mota,shoesItem _gia,shoesItem _giakhuyenmai,shoesItem _soluong,shoesItem _image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");          
    };

    public function updateShoesItem($shoesItem){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"updatet FROM tbl_shoesItem WHERE shoesItem _id='$id'");
        }        
        $sql_update_shoesItem  = mysqli_query($con,"UPDATE INTO tbl_shoesItem (shoesItem _name,shoesItem _chitiet,shoes_mota,shoesItem _gia,shoesItem _giakhuyenmai,shoesItem _soluong,shoesItem _image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");        
    };

    public function deleteShoesItem($shoesItem){
        if(isset($_GET['delete'])){
            $id= $_GET['delete'];
            $sql_delete = mysqli_query($con,"delete FROM tbl_shoesItem WHERE shoesItem _id='$id'");
        }        
        $sql_delete_shoesItem  = mysqli_query($con,"DELETE INTO tbl_shoesItem (shoesItem _name,shoesItem _chitiet,shoes_mota,shoesItem _gia,shoesItem _giakhuyenmai,shoesItem _soluong,shoesItem _image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");          
    };

}
?>