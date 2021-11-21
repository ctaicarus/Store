<? php
interface CartDAO{
    public function addBookItemToCart($bookItem);
    public function addElectronicsItemToCart($electronicsItem);
    public function addShoesItemToCart($shoesItem);
    public function addClothesItemToCart($clothesItem);
    public function getPayment($payment);    

}
?>