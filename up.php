<?php   
    echo"up hello";

    $tempfile = $_FILES['userfile']['tmp_name'];
    $filename = 'json/'. time() . $_FILES['userfile']['name'];
    
    if (is_uploaded_file($tempfile)) {
        if ( move_uploaded_file($tempfile , $filename )) {
        echo $filename . "をアップロードしました。";
        } else {
            echo "ファイルをアップロードできません。";
        }
    } else {
        echo "ファイルが選択されていません。";
    } 
    
    echo "<h4><a href='view/'> TOPへ </a></h4>";
?>