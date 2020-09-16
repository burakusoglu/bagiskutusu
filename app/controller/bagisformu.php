<?php


$sorgu16 = $db->select('donatelist')
    ->where("donateLink", filterUrl(url(1)))
    ->join('category', '%s.categoryID = %s.categoryID')
    ->run(true);

if (empty(url(1))) {
    header('Refresh:0; url=' . site_url('index'));
} else {
    $formInfo = $db->select('donatelist')
        ->join('society', '%s.societyID = %s.societyID')
        ->where('donateLink', filterUrl(url(1)))
        ->run(true);
    if (!$formInfo) {
        header('Refresh:0; url=' . site_url('index'));
    }
}

$categoryList = $db->select('category')
    ->run();

if (post('paraForm')) {
    $dPara = post('dPara');
    $dName = post('dName');
    $dSName = post('dSName');
    $dMail = post('dMail');
    $dIsim = post('dIsim');
    $dHaber = post('dHaber');
    if (!$dPara || !$dName || !$dSName || !$dMail) {
        $errorForm = "Boş Alan Bırakmayınız.";
    } else {
        if (is_integer((int) $dPara) && $dPara > 0) {
            if (filter_var($dMail, FILTER_VALIDATE_EMAIL)) {
                setcookie("formPara",$dPara,0,"/");
                setcookie("formName",$dName,0,"/");
                setcookie("formDSName",$dSName,0,"/");
                setcookie("formMail",$dMail,0,"/");
                setcookie("formdIsim",$dIsim,0,"/");
                setcookie("formdHaber",$dHaber,0,"/");
                setcookie("donateListID",$sorgu16['donateListID'],0,"/");
                header("Refresh:0; url=".site_url("odeme"));
            } else {
                $errorForm = "Hata";
            }
        } else {
            $errorForm = "Geçerli bir para birimi giriniz.";
        }
    }
}

if (post('esyaForm')) {
    $dEsyaC = post('numberEsya');
    $dEsya = post('nameEsya');
    $dName = post('deName');
    $dSName = post('deSName');
    $dMail = post('deMail');
    $dIsim = post('deIsim');
    $dHaber = post('deHaber');
    if (!$dEsya || !$dName || !$dSName || !$dMail) {
        $errorForm = "Boş Alan Bırakmayınız.";
    } else {
        if (is_integer((int) $dEsyaC) && $dEsyaC > 0) {
            if (filter_var($dMail, FILTER_VALIDATE_EMAIL)) {
                setcookie("formEsyaC",$dEsyaC,0,"/");
                setcookie("formEsya",$dEsya,0,"/");
                setcookie("formName",$dName,0,"/");
                setcookie("formDSName",$dSName,0,"/");
                setcookie("formMail",$dMail,0,"/");
                setcookie("formdIsim",$dIsim,0,"/");
                setcookie("formdHaber",$dHaber,0,"/");
                setcookie("donateListID",$sorgu16['donateListID'],0,"/");
                header("Refresh:0; url=".site_url("esya"));
            } else {
                $errorForm = "Hata";
            }
        } else {
            $errorForm = "Geçerli bir eşya miktarı giriniz";
        }
    }
}
require view('bagisformu');
