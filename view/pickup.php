<?php 
    $home = "https://ketcha.xyz/extensions/he2/";


    
    function echo_name_and_url($name, $raw, $url){
        global $home;
        echo "<tr>";
        echo "<td> " . $name . "</td> ";
        echo "<td> <a href='". $url . "'>"; 
        echo "Go" ;
        echo "</a></td> ";
        echo "<td> <a href='". $url ."' download>"; //同じオリジンのときのみダウンロード有効
        echo "Download" ;
        echo "</a> </td> ";
        echo "</tr>";
    

    }
    

    function name_and_url(){
        global $home;
        // json/配下のjsonファイル一覽を取得する
        $json_files = glob("../json/*.json");
        //echo "========= JSON files =========<br>";
        ////print_r($json_files);
        foreach(array_reverse( $json_files )as $fn){
            echo_name_and_url(
                basename($fn), 
                $home . "json/". basename($fn),
                $home. "hej/?src=". $home . "json/". basename($fn)
            );
        }
        echo("\n");
    }

    name_and_url();        //////////////////DO THIS///////////////

?>