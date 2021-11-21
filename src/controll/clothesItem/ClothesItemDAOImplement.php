<? php
interface ClothesItemDAOImplement implements ClothesItemDAO{
    public function insertClothesItem($clothesItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_clothesItem WHERE clothes_id='$id'");
        }        
        $sql_insert_clothesItem = mysqli_query($con,"INSERT INTO tbl_clothesItems(clothesItem_name,clothesItem_chitiet,clothesItem_mota,
            clothesItem_gia,clothesItem_giakhuyenmai,clothesItem_soluong,clothesItems_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");    
    };

    public function updateClothesItem($clothesItem){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_clothesItem WHERE clothes_id='$id'");
        }        
        $sql_update_clothesItem = mysqli_query($con,"UPDATE INTO tbl_clothesItems(clothesItem_name,clothesItem_chitiet,clothesItem_mota,
            clothesItem_gia,clothesItem_giakhuyenmai,clothesItem_soluong,clothesItems_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");             
    };

    public function deleteClothesItem($clothesItem){
        if(isset($_GET['dalete'])){
            $id= $_GET['dalete'];
            $sql_dalete = mysqli_query($con,"dalete FROM tbl_clothesItem WHERE clothes_id='$id'");
        }        
        $sql_dalete_clothesItem = mysqli_query($con,"DALETE INTO tbl_clothesItems(clothesItem_name,clothesItem_chitiet,clothesItem_mota,
            clothesItem_gia,clothesItem_giakhuyenmai,clothesItem_soluong,clothesItems_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");  
    };
    

}
?>