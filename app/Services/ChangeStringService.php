<?php namespace App\Services;

class ChangeStringService
{
    public function build($data)
    {
        $alphabet = "abcdefghijklmnñopqrstuvwxyz";
        $dataArr = str_split($data);
        $result = "";

        foreach ($dataArr as $key => $value) {
            $upper = ctype_upper($value) ? true : false;
            $alphabet = ($upper) ? strtoupper($alphabet) : strtolower($alphabet);
            $pos = strpos($alphabet, $value);

            if ($pos !== false) {
                if ($pos < strlen($alphabet) - 1) {
                    $result .= substr($alphabet, $pos + 1, 1);
                } else {
                    $result .= substr($alphabet, 0, 1);
                }
            } else {
                $result .= $value;
            }
        }

        return $result;
    }
}