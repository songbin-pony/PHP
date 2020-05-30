<?php
    function perform_query($query) {
            $con=mysqli_connect('localhost','pony','1','pony');
            $con->query("SET NAMES utf8");
            $result=$con->query($query);
            return $result;
    }
    $user_name=$_GET["user_name"];
    $title="speaker,message,time";
    $query="SELECT ".$title." FROM message WHERE message.user_name='".$user_name."' ORDER BY message.time";
    $query_res=perform_query($query);
    $array_to_return=array();
    while($row=mysqli_fetch_assoc($query_res)){
        $array_to_return[]=$row;
    }
    echo json_encode($array_to_return,JSON_UNESCAPED_UNICODE);
?>
