<? php
class BookDAOImplement implements BookDAO{

	public function insertBook($book){
        if(isset($_GET['insert'])){
            $id= $_GET['insert'];
            $sql_insert = mysqli_query($con,"update FROM tbl_book WHERE book_id='$id'");
        }        
        $sql_insert_book = mysqli_query($con,"INSERT INTO tbl_book(book_name,book_chitiet,book_mota,bookm_gia,book_giakhuyenmai,book_soluong,book_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    };

    public function updateBook($book){
        if(isset($_GET['update'])){
            $id= $_GET['update'];
            $sql_update = mysqli_query($con,"update FROM tbl_book WHERE book_id='$id'");
        }     
        $sql_update_book = mysqli_query($con,"UPDATE INTO tbl_book(book_name,book_chitiet,book_mota,bookm_gia,book_giakhuyenmai,book_soluong,book_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    };
    
    public function deleteBook($book){
        if(isset($_GET['xoa'])){
            $id= $_GET['xoa'];
            $sql_xoa = mysqli_query($con,"DELETE FROM tbl_book WHERE book_id='$id'");
        } 
        $sql_dalete_book = mysqli_query($con,"DELETE INTO tbl_book(book_name,book_chitiet,book_mota,bookm_gia,book_giakhuyenmai,book_soluong,book_image,category_id) values ('$tensanpham','$chitiet','$mota','$gia','$giakhuyenmai','$soluong','$hinhanh','$danhmuc')");
    };

}
?>