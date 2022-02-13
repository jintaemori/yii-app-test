<?php
    $comments = leavereq::model()->findAll();
    
    if ($comments == NULL){
        echo 'its null';
    }
    
    foreach($comments as $k=>$v) {
        echo $v->username . " " . $v->email . "  " . $v->password . "</br>";
    }
?>