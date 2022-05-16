<?php 

class billModel extends db{
    public function insertBill($item,$quantity){
        echo "In the BILL model right now";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare("INSERT INTO bills(bill_id,product_id,category_id,date_purchased,qty_purchased) VALUES (1,?,1,NOW(),?);");
        $stmt->bind_param("ii",$item,$quantity);
        $result = $stmt->execute();
        if($result == 1){
            echo "Done";
        }
    }
}


?>