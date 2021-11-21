<? php
class BookItemDAOImplement implements BookItemDAO{
	public function insertBookItem($bookItem){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"insert FROM tbl_bookitem WHERE bookitem_id='$id'");
        }        
        $sql_insert_bookitem = mysqli_query($con,"INSERT INTO tbl_bookitem(bookitem_name,bookitem_chitiet,
            bookitem_mota,bookitem_gia,book_giakhuyenmai,bookitem_soluong,bookitem_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    };

    public function updateBookItem($bookItem){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_book WHERE book_id='$id'");
        }     
        $sql_update_bookitem = mysqli_query($con,"UPDATE INTO tbl_bookitem(bookitem_name,bookitem_chitiet,
            bookitem_mota,bookitem_gia,book_giakhuyenmai,bookitem_soluong,bookitem_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    };

    public function deleteBookItem($bookItem){
        if(isset($_GET['xoa'])){
            $id= $_GET['xoa'];
            $sql_xoa = mysqli_query($con,"DELETE FROM tbl_book WHERE book_id='$id'");
        } 
         $sql_delete_bookitem = mysqli_query($con,"DELETE INTO tbl_bookitem(bookitem_name,bookitem_chitiet,
            bookitem_mota,bookitem_gia,book_giakhuyenmai,bookitem_soluong,bookitem_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");      
    };


}
?>