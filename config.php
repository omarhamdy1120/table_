<?php include_once("db_config.php"); ?>
<?php
    $sql ="SELECT * FROM coins, small, large, bar";
    $result =mysqli_query($conn , $sql);
    $json_array = array();
    while ($row = mysqli_fetch_assoc($result)){
        $json_array[]=$row;
    }
    //write to json file
    $fp = fopen('data.json', 'w');
    fwrite($fp, json_encode($json_array));
    fclose($fp);
?>
