<?php include "includes/header.php" ?>
<?php include "includes/nav.php"; ?>
<?php include "model/db.php"; ?>
<?php include "model/billModel.php";?>
<?php include "controller/billController.php"; ?>


<?php 
if(isset($_POST["generate_bill"])){
    $item = $_POST["item"];
    $quantity = $_POST["quantity"];
    $genBillRef = new billController();
    $genBillRef->makeBill($item,$quantity);
}
?>

<section>
    <h2>Check Out</h2>
   
    <form method="POST" action="cashier_landing.php">
    <p>Customer ID:</p>
    <input name="customerid">

    <br></br>
    <table id="table">
        <th>
        <p>Item ID</p>
        <input name = "item">
        </th>

        <th>
            <p>Quantity</p>
            <input name = "quantity">
        </th>


    </table>    
        <input type="button" id="addItem" name="additem" value="ADD"></input>
        <input type="submit" name="generate_bill" value="Genrate Bill">
    </form>


</section>

<!-- <script>
var tableRef= document.getElementById("table");
function addNewRow()
{
    tableRef.innerHTML+= "<tr><input name = "item"><input name = "quantity"></tr>";
}
</script> -->


<!-- 
echo "In the  model right now";
        $mysqli = $this->connect();
        $stmt = $mysqli->prepare("INSERT INTO bills(bill_id,product_id,category_id,date_purchased,qty_purchased) VALUES (1,?,1,NOW(),?);");
        $stmt->bind_param("ii",$item,$quantity);
        $result = $stmt->execute();
        if($result == 1){
            echo "Done";
        } -->