<?php

// session_start();

require_once "../../libraries/autoload.php";

if (!isset($_SESSION["captcha"]) || empty($_SESSION["captcha"])) {
    die();
}

$captcha_string = strtoupper(decode_string($_SESSION["captcha"], $config["captcha_crypt"]));
// die($captcha_string);

$fonts = [__DIR__ . '/../assets/fonts/atarist8x16systemfont.ttf'];

// $_SESSION['captcha_text'] = [
//     'value' => $captcha_string,
//     'expiration_time' => time() + 300, // Set expiration time (e.g., 5 minutes)
// ];

$captcha_width = 198;
$captcha_height = 50;
$captcha_image = imagecreatetruecolor($captcha_width, $captcha_height);
$captcha_bg_color = imagecolorallocate($captcha_image, 249, 249, 249);
imagefill($captcha_image, 0, 0, $captcha_bg_color);

$color_1 = random_int(80, 150);
$color_2 = random_int(80, 150);
$color_3 = random_int(80, 150);
// $text_color = imagecolorallocate($captcha_image, random_int(0, 150), random_int(0, 150), random_int(0, 150));
$text_color = imagecolorallocate($captcha_image, $color_1, $color_2, $color_3);
$text_color_alt = imagecolorallocate($captcha_image, $color_1 - 80, $color_2 - 80, $color_3 - 80);

// Annoying lines
for ($i = 0; $i < 50; $i++) {
    imagesetthickness($captcha_image, random_int(1, 2));
    imagearc(
        $captcha_image,
        random_int(1, $captcha_width),
        random_int(1, $captcha_height),
        random_int(1, $captcha_width),
        random_int(1, $captcha_height),
        random_int(1, 300),
        random_int(1, 300),
        imagecolorallocate($captcha_image, 0, 0, 0)
    );
}

// Text
for ($i = 0; $i < 6; $i++) {
    $letter_space = 170 / 6;
    $initial = 15;

    $font_size = random_int(27, 32); // Slightly bigger font size
    $angle = random_int(-15, 15);
    $y = random_int(30, 50);

    // Draw the text with a slightly bigger size for the outline effect
    imagettftext(
        $captcha_image,
        $font_size + 6,
        $angle,
        $initial + $i * $letter_space,
        $y + 2,
        $text_color_alt,
        // imagecolorallocate($captcha_image, 255, 0, 255), # alternative $text_color_alt, but it needs to be a little
        $fonts[array_rand($fonts)],
        $captcha_string[$i]
    );

    imagettftext(
        $captcha_image,
        $font_size,
        $angle,
        $initial + $i * $letter_space,
        $y,
        $text_color,
        $fonts[array_rand($fonts)],
        $captcha_string[$i]
    );
}

// Noise background
# I moved this in the foreground, it actually comes before the text, but oh well, that was.. too easy,.
for ($i = 0; $i < $captcha_width; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    for ($j = 0; $j < $captcha_height; $j++) {
        if ($j % 3 === 0) {
            continue;
        }
        if (random_int(0, 1) === 1) {
            imagesetpixel($captcha_image, $i, $j, imagecolorallocate($captcha_image, 0, 0, 0));
        }
    }
}

// Noise foreground
for ($i = 0; $i < 50; $i++) {
    imagesetpixel($captcha_image, random_int(0, $captcha_width), random_int(0, $captcha_height), imagecolorallocate($captcha_image, 0, 0, 0));
}

// Additional hidden field
// echo '<input type="hidden" name="captcha_hidden" value="' . md5($captcha_string . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']) . '">';

header('Content-type: image/png');
imagepng($captcha_image);
imagedestroy($captcha_image);
