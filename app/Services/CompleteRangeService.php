<?php namespace App\Services;

class CompleteRangeService
{
    public function build($data)
    {
        $result = "";
        $numbers = explode(',', $data);
        $numberClean = [];

        foreach ($numbers as $key => $number) {
            if (is_numeric($number)) {
                $number = (int)$number;

                if ($number > 0 && $number < 101) {
                    if (!in_array($number, $numberClean)) {
                        $numberClean[] = $number;
                    }
                }
            }
        }

        sort($numberClean);

        for ($i = 0; $i < count($numberClean) - 1; $i++) {
            $result .= $this->calcRange($numberClean[$i], $numberClean[$i + 1]);
        }

        $result .= $numberClean[count($numberClean) - 1];

        return $result;
    }

    public function calcRange($begin, $end)
    {
        $result = "";

        for ($begin; $begin < $end; $begin++) {
            $result .= "$begin,";
        }

        return $result;
    }
}