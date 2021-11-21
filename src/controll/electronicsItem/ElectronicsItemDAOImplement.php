<? php
class ElectronicsItemDAOImplement implements ElectronicsItemDAO{
    public function insertElectronicsItem($electronicsItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_electronicsItem WHERE electronicsItem_id='$id'");
        }        
        $sql_insert_electronicsItem = mysqli_query($con,"INSERT INTO tbl_electronicsItem(electronicsItem_name,electronicsItem_chitiet,
            electronicsItem_mota,electronicsItem_gia,electronicsItem_giakhuyenmai,
            electronicsItem_soluong,electronicsItem_image,category_id) 
            values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    };

    public function updateElectronicsItem($electronicsItem){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_electronicsItem WHERE electronicsItem_id='$id'");
        }     
        $sql_update_electronicsItem = mysqli_query($con,"UPDATE INTO tbl_electronicsItem(electronicsItem_name,electronicsItem_chitiet,
            electronicsItem_mota,electronicsItem_gia,electronicsItem_giakhuyenmai,electronicsItem_soluong,electronicsItem_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");    
    };

    public function deleteElectronicsItem($electronicsItem){
        if(isset($_GET['xoa'])){
            $id= $_GET['xoa'];
            $sql_xoa = mysqli_query($con,"DELETE FROM tbl_electronicsItem WHERE electronicsItem_id='$id'");
        } 
        $sql_delete_electronicsItem = mysqli_query($con,"DALETE INTO tbl_electronicsItem(electronicsItem_name,electronicsItem_chitiet,
            electronicsItem_mota,electronicsItem_gia,electronicsItem_giakhuyenmai,
            electronicsItem_soluong,electronicsItem_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");       
    };

}
?>