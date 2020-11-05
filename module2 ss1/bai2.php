<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["search"]) {
        echo findSum($_POST["search"]);

    }

} else {
    ?>

    <form method="post">
        <h1>Nhập Số Tính Tổng</h1>

        <input type="text" name="search" placeholder="Nhập số cần tính tổng">
        <button type="submit" id="submit">Tìm</button>

    </form>


    <?php
}

function findSum($search)
{
    $sum = 0;

    for ($i = 1; $i < $search; $i++) {

        if ($sum + $i > $search) break;
        else
            $sum += $i;
    }
    return $sum;
}

?>

