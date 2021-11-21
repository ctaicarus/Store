<? php
interface ShipmentDAOImplement implements ShipmentDAO{
    public function addShipment($shipment){
        if(isset($_GET['addShipment'])){
            $id= $_GET['addShipment'];
            $sql_select = mysqli_query($con,"insert FROM tbl_shipment");
        }      

        $sql_select_payment = mysqli_query($con,"SELECT INTO tbl_shipment(shipment_name, shipment_price, shipment_address) values ('$shipmentt_name', '$shipment_price', '$shipment_address')");    
    };

    public function updateShipment($shipment){
        if(isset($_GET['updateShipment'])){
            $id= $_GET['updateShipment'];
            $sql_update = mysqli_query($con,"update FROM tbl_shipmentt");
        }      

        $sql_update_payment = mysqli_query($con,"UPDATE INTO tbl_shipment(shipment_name, shipment_price, shipment_address) values ('$shipmentt_name', '$shipment_price', '$shipment_address')");            
    };
    public function deleteShipment($shipment){
        if(isset($_GET['deleteShipment'])){
            $id= $_GET['deleteShipment'];
            $sql_delete = mysqli_query($con,"delete FROM tbl_shipment");
        }      

        $sql_delete_payment = mysqli_query($con,"delete INTO tbl_shipment(shipment_name, shipment_price, shipment_address) values ('$shipmentt_name', '$shipment_price', '$shipment_address')");             
    };

}
?>