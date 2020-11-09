<html>
<head>

</head>
<body>

<form method="post">
    Nhập kích thước chiều dài mảng:
    <input type="text" name="widthNumber"><br/>
    Nhập kích thước chiều rộng mảng:
    <input type="text" name="heightNumber"><br/>
    Nhập các giá trị vào mảng:
    <input type="text" name="number"><br/>

    <button type="submit">Gửi</button>
</form>

<?php
[];
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $widthNumber = $_POST['widthNumber'];
    $heightNumber = $_POST['heightNumber'];
    $number = $_POST['number'];


}



?>




</body>


</html>