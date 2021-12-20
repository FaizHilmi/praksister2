<?php

namespace App\Http\Controllers;

use App\Models\DataMotor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showbyId(Request $request){
        $id = $request->id;

        return DataMotor::find($id);
    }
}
