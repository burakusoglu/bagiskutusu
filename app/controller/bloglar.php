<?php

$blogList = $db->select('blog')
       ->run();

require view('bloglar');
?>
