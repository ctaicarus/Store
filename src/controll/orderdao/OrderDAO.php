<? php
interface OrderDAO{
    public function addOrder($order);
    public function updateOrder($order);
    public function viewCustomer($customer);
    public function viewCart($cart);
    public function getShipment($shipment);
    public function getPayment($payment);    

}
?>