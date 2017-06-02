<?php namespace App\Services;

class ClearParService
{
    public function build($data)
    {
        $par = "()";
        $count = substr_count($data, $par);
        $result = "";

        for ($i = 0; $i < $count; $i++) {
            $result .= $par;
        }

        return $result;
    }
}