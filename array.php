<?php
    $arraydata=array("html","css","js","php");
    var_dump($arraydata);
    $age=array("nirjala"=>22,"sujan"=>24,"ram"=>23);
    echo"<br>";
    var_dump($age);
    foreach($age as $key=>$value){
        echo"<br>";
        echo "$key $value";
    }

    $faculty=array(
        "nirjala"=>"BCA",
        "samikshya"=>"na padhne",
    );
    echo"<br>";
    foreach($faculty as $key=>$value){
        echo"<br>";
        echo "$key : $value";
    }
    
    
?>