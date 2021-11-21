<? php
interface CustomerDAO{
    public function addCustomer($customer);
    public function editCustomer($customer);
    public function deleteCustomer($customer);
    public function viewOrder($order);

}
?>