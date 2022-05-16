<?php
include "includes/header.php";
include "includes/nav.php";
include "model/db.php";
include "model/getWeeklySale.php";
include "controller/getWeeklySaleContr.php";
?>

<?php 
if(isset($_POST['fetch_sales'])){
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $getSale = new getWeeklySaleContr();
    $resultSet = $getSale->getSalefromDate($start_date,$end_date); 
    $rowSet = $resultSet->num_rows;
}

?>

<section id="weekly_sale">
    <h2>This weeks sale</h2>
    <!-- Add table to show this weeks sale summary -->
    <table>
        <th>Item</th>
        <th>Quantity</th>
        <th>Collection</th>
        <?php  
        $getWS = new getWeeklySaleContr();
        $result = $getWS->getws();
        $row = $result->num_rows;
        if($row > 0){
            while($row = $result->fetch_assoc()){?>
                <tr>
                <td>
                <?php echo $row['product_id'] . " " .$row['qty_purchased']. " " .$row['category_id'] ?>
                </td>
            </tr>

        <?php } }?>
    </table>
    <?php $result = $getWS->getSales();?>
    <p>Total collection this week: <?php echo $result['sum']; ?></p>
</section>
<section>
    <h2>Select dates to get sales according to dates: </h2>
    <form method = "POST" action="admin_landing.php">
        <div class="form-group">
            <label for="start_date" class="sr-only">From:</label>
            <input type="date" name="start_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="end_date" class="sr-only">To:</label>
            <input type="date" name="end_date" class="form-control">
        </div>
        <input type="submit" name="fetch_sales" class="btn btn-custom btn-lg btn-block" value="Get sales">
    </form>
    <?php 
    if(isset($rowSet)){?>
     <table>
        <th>Item</th>
        <th>Quantity</th>
        <th>Collection</th>
        <?php 
            while($rowSet = $resultSet->fetch_assoc()){?>
                <tr>
                <td>
                    <?php echo $rowSet['item'] . " " .$rowSet['quantity']. " " .$rowSet['price'] ?>
                </td>
            </tr>

        <?php } }?>
    </table>
</section>
    
</body>
</html>
