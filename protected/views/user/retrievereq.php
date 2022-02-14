<?php
    $comments = Leavereq::model()->findAll();
    
    if ($comments == NULL){
        echo 'its null';
    }
    
    foreach($comments as $k=>$v) {
        echo $v->id . " " . $v->leavereq_id . "  " . $v->reason . "</br>";
    }
?>