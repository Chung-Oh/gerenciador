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
}
