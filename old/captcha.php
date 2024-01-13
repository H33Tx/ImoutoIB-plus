<?php
session_start();

if (!isset($permitted_chars)) {
    // allow for changing this in config.php I guess
    $permitted_chars = '1234567ACDEFGHJKLMNPRSRUVWXY';
}

function generate_string(string $input, int $strength = 10): string
{
    $input_length = strlen($input);
    $random_string = '';
    for ($i = 0; $i < $strength; $i++) {
        $random_character = $input[random_int(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return strtolower($random_string);
}

$string_length = 6;
$captcha_string = generate_string($permitted_chars, $string_length);

$fonts = [__DIR__ . '/assets/fonts/atarist8x16systemfont.ttf'];

$_SESSION['captcha_text'] = [
    'value' => $captcha_string,
    'expiration_time' => time() + 300, // Set expiration time (e.g., 5 minutes)
];

$captcha_string = strtoupper($captcha_string);

$captcha_width = 198;
$captcha_height = 50;
$captcha_image = imagecreatetruecolor($captcha_width, $captcha_height);
$captcha_bg_color = imagecolorallocate($captcha_image, 249, 249, 249);
imagefill($captcha_image, 0, 0, $captcha_bg_color);

$text_color = imagecolorallocate($captcha_image, random_int(0, 150), random_int(0, 150), random_int(0, 150));

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

// Noise background
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

// Text
for ($i = 0; $i < $string_length; $i++) {
    $letter_space = 170 / $string_length;
    $initial = 15;

    $font_size = random_int(25, 35);
    $angle = random_int(-25, 25);

    imagettftext(
        $captcha_image,
        $font_size,
        $angle,
        $initial + $i * $letter_space,
        random_int(30, 50),
        $text_color,
        $fonts[array_rand($fonts)],
        $captcha_string[$i]
    );
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
