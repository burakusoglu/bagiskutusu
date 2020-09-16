<?php
$donateList = $db->select('donatelist')
    ->join('society', '%s.societyID = %s.societyID')
    ->join('category', '%s.categoryID = %s.categoryID')
    ->run();



$category = $db->select('category')
    ->run();
require view('bagislisteleri');
