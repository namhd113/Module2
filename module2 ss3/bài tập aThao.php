<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $User = $_POST["User"];
    $Password = $_POST["Password"];

    $arr = array(
        array("admin", "admin"),
        array("Quỳnh", "ecuanam"),
        array("namhd113", "namhd113")
    );
    $login = false;
    foreach ($arr as $value) {
        if ($User == $value[0] && $Password == $value[1]) {
            //echo "sjjjjjjjjjjjjjjjj";
            $login = true;
            break;
        }
    }

    if($login ){
        echo "Em chào anh Nam";
    }
    else{
        echo "Không phải Nam thì cút";
    }
}
else {
    ?>
    <form method="post">
        <h1>Thanh vien C11</h1>
        <input type="text" name="User" placeholder="Nhap vao day"> <br>
        <input type="password" name="Password" placeholder="Nhap vao day"> <br>
        <button type="submit" name="btn" id="submit">Dang nhap</button>
    </form>
    <?php
}
?>

