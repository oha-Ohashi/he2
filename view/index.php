<?php
/*$namename = "default";
if(isset($_GET['name']) ){
    $namename = $_GET['name'];
}*/
$json_name = "json/" . $namename . ".json";

$cros_url = "https://ketcha.xyz/extensions/he2/json/default.json";
if(isset($_GET['src']) ){
    $cros_url = $_GET['src'];
}

function output_raw_json($url){
    $default_path_toRead = "json/json.json";
    $cros_json = readfile($url);
    //echo "cros___";
    //var_dump($cros_json);
    if($cros_json == false){
        //echo "not found";
        //include($default_path_toRead);
        return false;
    }else{
        //echo "sucsuc";
        return true;
    }
}


?>
<!DOCTYPE HTML> 
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP | でかブクマ</title>
    <meta name="description" content="hej hej let's go">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <div class="jumbotron">
        <h2 class="" id="bkm_title">Top Page</h2>
        <!--<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>-->
        <button type="button" class="btn btn-info" 
            onclick="location.href='https://github.com/oha-Ohashi/he2'">
            GitHub Repository
        </button>
    </div>

    <div class="container">

    <div id="contArea">
        <!--<h2>category <h2>-->
        <form action="../upload.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="15000" />
            <div class="mb-5">
                <label for="formFile" class="form-label">Upload Your JSON: </label>
                <input class="form-control" type="file" name="userfile" accept=".json" id="formFile">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </form>
        

       <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Bookmark Link</th>
            <th scope="col">Raw Data</th>
            </tr>
        </thead>
        <tbody>
            <!--<tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>-->
            <?php 
                include("pickup.php");
            ?>
        </tbody>
        </table>


        
    </div>
            
    </div>    
    <?php //include("fetch.php") ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!--<script>
        var sbjsn = 
            <?php       
                /*
                $res = output_raw_json($cros_url);
                if($res == false){
                    echo "alert('something wrong with JSON url');";
                    echo "location.href = './hej.php'";
                }else{
                    echo ";";
                }
                */
            ?>
    </script>
    <script src="sbj.js"></script>-->

    <!--
    <script type="text/javascript" src="aj.js"></script>
    <script type="text/javascript" src="hej_disp.js"></script>
    -->
</body>
</html>

