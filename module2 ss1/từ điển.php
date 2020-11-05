<html>
<head>
</head>

<body>
<form method="post">
    <h1>TỪ ĐIỂN ANH VIỆT</h1>

    <input type="text" name="search" placeholder="Nhập từ cần tìm">
    <button type="submit" id="submit">Tìm</button>

</form>

<?php
$dictionary = array ("hello"=>"xin chào", "dog" =>"chó", "cat"=>"mèo", "bird" =>"chim");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word === $searchword) {
            echo "Từ: $word có nghĩa là $description";
            echo "</br>";
            $flag = 1;
        }
    }
    if ($flag ===0) {
        echo "Không tìm thấy trong từ điển";
    }



}




?>



</body>

</html>










