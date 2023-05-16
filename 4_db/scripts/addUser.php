<?php
    foreach ($_POST as $key => $value){
        echo "$key: $value<br>";
        if(empty($value)){
            echo "<script>history.back();</script>";
            exit();
        }
    }

    require_once "./connect.php";
    $sql = "insert";
    $conn->query($sql);

    echo_$conn->affected_rows;