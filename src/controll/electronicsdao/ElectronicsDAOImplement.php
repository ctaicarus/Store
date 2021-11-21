<? php
class ElectronicsDAOImplement implements ElectronicsDAO{
	public function insertElectronics($electronics){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_electronics WHERE electronics_id='$id'");
        }        
        $sql_insert_electronics = mysqli_query($con,"INSERT INTO tbl_electronics(electronics_name,electronics_chitiet,
            electronics_mota,electronics_gia,electronics_giakhuyenmai,electronics_soluong,electronics_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    };

    public function updateElectronics($electronics){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_electronics WHERE electronics_id='$id'");
        }     
        $sql_insert_electronics = mysqli_query($con,"INSERT INTO tbl_electronics(electronics_name,electronics_chitiet,
            electronics_mota,electronics_gia,electronics_giakhuyenmai,electronics_soluong,electronics_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");       
    };

    public function deleteElectronics($electronics){
        if(isset($_GET['xoa'])){
            $id= $_GET['xoa'];
            $sql_xoa = mysqli_query($con,"DELETE FROM tbl_electronics WHERE electronics_id='$id'");
        } 
        $sql_insert_electronics = mysqli_query($con,"INSERT INTO tbl_electronics(electronics_name,electronics_chitiet,
            electronics_mota,electronics_gia,electronics_giakhuyenmai,electronics_soluong,electronics_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");        
    };

}
?>