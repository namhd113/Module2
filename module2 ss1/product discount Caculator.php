<form method="post" action="display_discount.php">
    <input type="text" placeholder="Product Description">
    <input name="listPrice" placeholder="List Price">
    <input name="discountPercent" placeholder="Discount Percent">
    <button type="submit">Calculate Discount</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $listPrice = $_POST['listPrice'];
    $discountPercent = $_POST['discountPercent'];

    $discountAmount = $listPrice * $discountPercent * 0.01;

    $discountPrice = $listPrice - $discountAmount;
    echo $discountPrice;
    echo "</br>";
    echo $discountAmount;

}
