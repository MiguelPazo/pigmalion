<?php namespace App\Http\Controllers;


use App\Services\Facades\ChangeStringFac;
use App\Services\Facades\ClearParFac;
use App\Services\Facades\CompleteRangeFac;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function changeString(Request $request)
    {
        $data = $request->get('data');

        if (strlen($data) <= 100) {
            $response = ChangeStringFac::build($data);

            return response()->json($response);
        } else {
            abort(500);
        }
    }

    public function clearPar(Request $request)
    {
        $data = $request->get('data');

        if (strlen($data) <= 100) {
            $response = ClearParFac::build($data);

            return response()->json($response);
        } else {
            abort(500);
        }
    }

    public function completeRange(Request $request)
    {
        $data = $request->get('data');

        if (strlen($data) <= 100) {
            $response = CompleteRangeFac::build($data);

            return response()->json($response);
        } else {
            abort(500);
        }
    }
}