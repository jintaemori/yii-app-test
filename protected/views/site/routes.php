<?php

    // 

    // $command = $connection->createCommand('use testdrive; SELECT * FROM tbl_user;');
    // $posts = $command->queryAll();
    // echo "<pre>";
    // var_dump($posts);
    // // print_r($posts);
    // //print_r($command);
    // echo "<pre>";
    // echo "cc";


    // working SQL
    // $connection=new CDbConnection('mysql:host=localhost','root','saisasank');
    // $connection->active=true;
    // $command = $connection->createCommand("use testdrive; INSERT INTO tbl_user (username, password, email) VALUES ('test32', 'pass32', 'test32@example.com');");
    // $command->execute();

    // usable orm code    
    // $criteria = array("condition" => 'username like "test1%"');
    // $criteria = array('condition' => 'username = "test1"');

    // $u = "test122";
    // $criteria = array('condition' => "username = '$u'");
    // $comments = User::model()->find($criteria);

    // if ($comments == NULL){
    //     echo 'its null';
    // }
    
    // foreach($comments as $k=>$v) {
    //     echo $v->username . " " . $v->email . "  " . $v->password . "</br>";
    // }
    // echo $comments->username . $comments->email . $comments->password;

    $comments = User::model()->findAll();
    
    if ($comments == NULL){
        echo 'its null';
    }
    
    foreach($comments as $k=>$v) {
        echo $v->username . " " . $v->email . "  " . $v->password . "</br>";
    }
    echo Yii::app()->user->id;
    // test32 delete
    // $connection=new CDbConnection('mysql:host=localhost','root','saisasank');
    // $connection->active=true;
    // $command = $connection->createCommand("use testdrive; DELETE FROM tbl_user WHERE password = 'pass32';");
    // $command->execute();

    //echo Yii::app()->user->lastLoginTime;
?>
    