<?php 
$sbj_col = [' <div class="subject col-sm-4">
    <div class="sbj_title d-flex align-items-center">
        <a class="container" href="">','lili','</a>
    </div>
</div>'];

function generate_a($txt){
    echo '<div class="row">';
    for($i=0; $i<5; $i++){
        echo '<div class="subject col-sm-4">';
            echo '<div class="sbj_title d-flex align-items-center">';
        echo '<a class="container" href="">','lili','</a>';
            echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}

generate_a("lilnn");

?>