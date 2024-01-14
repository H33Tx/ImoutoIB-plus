<?php

function encode_string($input, $salt)
{
    $encoded_string = "";
    $salt_length = strlen($salt);
    $input_length = strlen($input);

    for ($i = 0; $i < $input_length; $i++) {
        $salt_index = $i % $salt_length;
        $salt_char = ord($salt[$salt_index]);
        $input_char = ord($input[$i]);
        $encoded_char = $salt_char + $input_char;

        $encoded_string .= base_convert($encoded_char, 10, 36);
    }

    return $encoded_string;
}

function decode_string($encoded_string, $salt)
{
    $decoded_string = "";
    $salt_length = strlen($salt);
    $encoded_length = strlen($encoded_string);

    for ($i = 0; $i < $encoded_length; $i += 2) {
        $salt_index = $i / 2 % $salt_length;
        $salt_char = ord($salt[$salt_index]);
        $encoded_char = substr($encoded_string, $i, 2);
        $encoded_char = base_convert($encoded_char, 36, 10);
        $decoded_char = $encoded_char - $salt_char;

        $decoded_string .= chr($decoded_char);
    }

    return $decoded_string;
}

if (!function_exists("str_contains")) {
    function str_contains($haystack, $needle)
    {
        return $needle !== "" && mb_strpos($haystack, $needle) !== false;
    }
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

if (isset($_GET["captcha_gen"]) && str_contains($_SERVER["PHP_SELF"], "index.php")) {
    if (!isset($permitted_chars)) {
        // allow for changing this in config.php I guess
        $permitted_chars = '123456789ACDEFGHJKLMNPRSRUVWXY';
    }

    $string_length = 6;
    $captcha_string = generate_string($permitted_chars, $string_length);

    if (isset($_GET["get_captcha_code"])) {
        $captcha = encode_string($captcha_string, $config["captcha_crypt"]);
        $_SESSION["captcha"] = $captcha;
    }
}
