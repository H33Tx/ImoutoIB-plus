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
