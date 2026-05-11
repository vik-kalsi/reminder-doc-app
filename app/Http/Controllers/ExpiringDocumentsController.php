<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;


class ExpiringDocumentsController extends Controller
{
    public function OpenExpiringDocumentPage()
    {
        $documents = auth()->user()
            ->documents()
            ->whereDate('expiry_date', '<=', Carbon::now()->addDays(30))
            ->get();

        return view('pages.expiringdocuments', compact('documents'));   
    }
}
