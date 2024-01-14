<?php

// Very simple plugin, adds this function :D
function getRandomImage($dir_path = __DIR__ . "/../../public/assets/img/banners")
{
    $files = scandir($dir_path);
    $count = count($files);
    if ($count > 2) {
        $index = rand(2, ($count - 1));
        $filename = $files[$index];
        return $filename;
    }
}

$smarty->assign("banner_image", getRandomImage());
