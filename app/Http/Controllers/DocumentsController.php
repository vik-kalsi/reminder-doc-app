<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Document;
use App\Models\User;


class DocumentsController extends Controller
{
    public function OpenAddDocumentsPage()
    {
        return view('pages.adddocuments');
    }


    public function AddDocumentToDB(Request $request)
    {
        $validated = $request->validate([
            'document' => 'required',
            'expiry_date' => 'required',
        ]);
        
        $document = new Document(['name' => $request->document, 'expiry_date'=> $request->expiry_date, 'reminder_days'=> 30]);
        $user = User::find(auth()->user()->id);

        $user->documents()->save($document);

        return redirect()->action([DocumentsController::class, "OpenDocumentsListsPage"])
        ->with('documentAdded', 'Document has been added');
    }



    public function OpenDocumentsListsPage()
    {
        $documents = User::find(auth()->user()->id)->documents;
        return view('pages.documentslist', ["documents" => $documents]);
    }



    public function DeleteSelectedDocument($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();

        return redirect()->action([DocumentsController::class, "OpenDocumentsListsPage"])
        ->with('documentDeletedSuccess', 'Document has been deleted succesfully');
    }


    public function OpenDocumentToEdit($id)
    {
        $documentContent = Document::findOrFail($id);
        $userID = auth()->id();

        if ($documentContent->user_id === $userID) {
            return view('pages.editdocument', ["documentToEdit" => $documentContent]);
        }

        else {
            return redirect()->action([DocumentsController::class, "OpenDocumentsListsPage"]);
        }

    }


}
