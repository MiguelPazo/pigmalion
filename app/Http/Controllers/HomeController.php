<?php namespace App\Http\Controllers;


use App\Services\Facades\ChangeStringFac;
use App\Services\Facades\ClearParFac;
use App\Services\Facades\CompleteRangeFac;

class HomeController extends Controller
{
    public function changeString($data)
    {
        if (strlen($data) <= 30) {
            $response = ChangeStringFac::build($data);

            return response()->json($response);
        } else {
            abort(500);
        }
    }

    public function clearPar($data)
    {
        if (strlen($data) <= 30) {
            $response = ClearParFac::build($data);

            return response()->json($response);
        } else {
            abort(500);
        }
    }

    public function completeRange($data)
    {
        if (strlen($data) <= 30) {
            $response = CompleteRangeFac::build($data);

            return response()->json($response);
        } else {
            abort(500);
        }
    }
}