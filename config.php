<?php

$link = mysqli_connect("localhost","root","","codemanbd");



function DataSave($link,$query){

    if($link==true){      
    
        
    $sql = mysqli_query($link,$query);
    
            if($sql==true){
                echo "Data Save Done";
            }
            else{
                echo "Sorry gure ai";
            }
    
    }
    else{
       
    }
}

?>