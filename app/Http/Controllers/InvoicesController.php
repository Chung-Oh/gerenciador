<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function list()
    {
        $invoices = Invoice::with(['category'])->get();

        return response()->json($invoices);
    }

    public function new(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'title'       => 'required|max:250',
        //     'description' => 'required|max:250',
        //     'category_id' => 'required|integer'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('home')->withErrors($validator)->withInput();
        // }

        dd($request->all());
    }
}
