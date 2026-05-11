<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Document;



class ExpiringDocumentsController extends Controller
{
    public function OpenExpiringDocumentPage()
    {
        $document = Document::find(37);

        $expiryDate = Carbon::parse($document->expiry_date);
        $today = Carbon::today();

        // Days remaining
        $daysLeft = $today->diffInDays($expiryDate, false);

        // Check if under reminder days
        $isUnderReminder = $daysLeft <= $document->reminder_days;

        //return view('pages.expiringdocuments');
        
        //return $daysLeft . " days";
        return $isUnderReminder;
    }
}
