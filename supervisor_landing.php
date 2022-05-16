<?php include "includes/header.php"; ?>
<?php include "includes/nav.php";
include "model/db.php";
include "model/searchProductModel.php";
include "controller/searchProductContr.php";?>

<?php 
if(isset($_POST['search_product'])){
    $value = $_POST['search'];
    $getP = new searchProductContr();
    $result = $getP->getProduct($value);
    $row = $result->fetch_assoc();
}
?>

<section>
    <h2>Update stock</h2>
</section>
<section>
    <h2>Search for a product</h2>
    <form method="POST" action="supervisor_landing.php">
        <input type="text" name="search" placeholder="Enter barcode or product name">
        <input type="submit" name="search_product" value="Search">
    </form>
    <table>
        <th>Item</th>
        <th>Quantity</th>
        <th>Collection</th>
        <?php if(isset($row)){ ?> 
        <tr>
            <td>
            <?php 
                echo $row['name'] . " ";
                echo $row['quentity'] . " "; 
                echo $row['price'] . " ";
            ?>
            </td>
        </tr>
        <?php }?>
    </table>
</section>
