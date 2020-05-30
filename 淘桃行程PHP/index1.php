<?php
    function perform_query($query) {
            $con=mysqli_connect('localhost','pony','1','pony');
            $con->query("SET NAMES utf8");
            $result=$con->query($query);
            return $result;
    }
    $scenery_name_query="SELECT * FROM table_1";
    $scenery_name_query_res=perform_query($scenery_name_query);
    $array_to_return=array();
    while($row=mysqli_fetch_assoc($scenery_name_query_res)){
        $array_to_return[]=$row;
    }
    echo json_encode($array_to_return,JSON_UNESCAPED_UNICODE);
?>
