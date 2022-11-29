<?php



function generate_password($lunghezza)
{
    // var_dump($lunghezza);
    if ($lunghezza > 86 or is_null($lunghezza) == true) {
        return null;
    } else {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz-_.:,;§°ç{})(/&$£^+[]';
        return substr(str_shuffle($data), 0, $lunghezza);
    }
}