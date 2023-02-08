<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Company;
use App\Models\PlateType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PlateTypeController extends Controller
{
    public function store(Request $request)
    {
        $branch = $request->post('branch');

        if ($branch)
        {
            $parent = Branch::find($request->post('branch'));
        }else {
            $parent = Company::find($request->post('company'));
        }

        $plateType = new PlateType();
        $plateType->name = $request->post('name');
        $plateType->code = Str::slug($request->post('name'));
        $plateType->parent()->associate($parent);
        $plateType->save();

        return redirect()->route('plate-types.index');
    }
}