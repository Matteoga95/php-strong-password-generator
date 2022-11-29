<?php



function generate_password($lunghezza, $lettere, $numeri, $Simboli, $repeat)
{
    // var_dump($lunghezza);
    if ($lunghezza > 86 or is_null($lunghezza) == true) {
        return null;
    } else {

        if (isset($lettere)) {
            $letData = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        } else {
            $letData = '';
        };

        if (isset($numeri)) {
            $numData = '1234567890';
        } else {
            $numData = '';
        };

        if (isset($Simboli)) {
            $simbData = '-_.:,;§°ç{})(/&$£^+[]';
        } else {
            $simbData = '';
        };

        $data = $letData . $simbData . $numData;

        if ($repeat == "yes") {

            $parola = "";

            for ($i = 0; $i < $lunghezza; $i++) {
                $parola .= $data[rand(0, strlen($data)  - 1)];
            }

            return $parola;
        } else {


            return substr(str_shuffle($data), 0, $lunghezza);
        };
    }
}