<?php

    $sorgu = $db->select('blog')
             ->where("societID",session('admin_id'))
             ->run();

 require view('admin/blog_list');
 ?>
