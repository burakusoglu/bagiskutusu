<?php

function imageText($resim, $metin)
{
    ob_start();

    $font = dir.'\assets\webfonts\arial.ttf';
    $resim_yaz = imagecreatefrompng("$resim");
    $siyah = imagecolorallocate($resim_yaz, 56, 56, 56);
    imagettftext($resim_yaz, 16, 0, 335, 300, $siyah, $font, $metin);
    imagepng($resim_yaz);
    imagedestroy($resim_yaz);
    $contents = ob_get_contents();
    ob_end_clean();
    return $base64 = base64_encode($contents);
}

//resimleri base64 çevirme 2 taraflı şifreleme
function imageToBase64($resim)
{
    ob_start();
    $resim_yaz = imagecreatefrompng("$resim");
    imagepng($resim_yaz);
    imagedestroy($resim_yaz);
    $contents = ob_get_contents();
    ob_end_clean();
    return $base64 = base64_encode($contents);
}

