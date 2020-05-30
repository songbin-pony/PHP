<?php
    function perform_query($query) {
            $con=mysqli_connect('localhost','pony','1','pony');
            $con->query("SET NAMES utf8");
            $result=$con->query($query);
            return $result;
    }
    $user_name=$_GET["user_name"];
    $user_name_query="SELECT * FROM addorder WHERE addorder.user_name='".$user_name."' ORDER BY addorder.create_time DESC";
    $user_name_query_res=perform_query($user_name_query);
    $array_to_return=array();
    while($row=mysqli_fetch_assoc($user_name_query_res)){
        $array_to_return[]=$row;
    }
    echo json_encode($array_to_return,JSON_UNESCAPED_UNICODE);
?>