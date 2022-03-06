<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\TankersImport;
use Maatwebsite\Excel\Validators\ValidationException;

class ExcelController extends Controller
{
    public function importView(Request $request)
    {
        return view('app.tankers.import');
    }

    public function import(Request $request)
    {
        if(!$request->import_file)
            return redirect()->back()->withError("File not selected!");

        try {

            \Excel::import(new TankersImport,$request->import_file);

        } catch(ValidationException $e)
        {
            $failure = $e->failures();
            $errors = $failure[0]->errors();

            return redirect()->back()->withError($errors[0]);
        }

        return redirect()
            ->route('tankers.index')
            ->withSuccess(__('crud.tankers.imported'));
    }
}
