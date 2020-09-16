<?php

$activityList = $db->select('activity')
                ->run();

$blogList = $db->select('blog')
       ->run();
       
$sponsorList = $db->select('sponsor')
->run();


require view('index');
 ?>
