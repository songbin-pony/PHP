<?php
    function perform_query($query) {
            $con=mysqli_connect('localhost','pony','1','pony');
            $con->query("SET NAMES utf8");
            $result=$con->query($query);
            return $result;
    }
    $scenery_name=$_GET["scenery_name"];
    $caption="name,rank,addr,score,province,scenery_name,small_image_link,big_image_link,detail_link,bright_spot";
    $scenery_name_query="SELECT ".$caption." FROM table_2 WHERE table_2.scenery_name='".$scenery_name."' ORDER BY table_2.rank";
    $scenery_name_query_res=perform_query($scenery_name_query);
    $array_to_return=array();
    while($row=mysqli_fetch_assoc($scenery_name_query_res)){
        $array_to_return[]=$row;
    }
    echo json_encode($array_to_return,JSON_UNESCAPED_UNICODE);
?>
