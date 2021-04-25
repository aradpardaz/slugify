<?php
function slugify($string)
{
    $string = transliterator_transliterate("Any-Latin; Latin-ASCII; [\u0080-\u7fff] remove; Lower();", $string);
    $string = preg_replace('/[-\s]+/', '-', $string);
    return trim($string, '-');
}

echo slugify('ثبت‌نام دانش‌آموزان کلاس اولی الکترونیکی شد'); 

//thbtnam-danshamwzan-klas-awly-alktrwnyky-shd

?>