<?php
    $request = $db->select('request')
             ->join('city', '%s.cityID = %s.cityID')
             ->where("societyID",session('admin_id'))
             ->groupby('societyID')
             ->run();



 require view('admin/take_on_request');
 ?>
