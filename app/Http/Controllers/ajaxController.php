<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ajaxController extends Controller
{
    public function getProjectDetail(Request $request)
    {
        return response()->json(project::getProjectData(strtolower($request->input('name'))));
    }
}
