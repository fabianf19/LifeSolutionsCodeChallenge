<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\ContactNote;

class ContactController extends Controller
{
    
    public function index()
    {
        $all_contacts = Contact::all();
        foreach ($all_contacts as $contact) {
        	$contact['notes'] = $contact->notes;
        }

        return $all_contacts;
    }
 
    public function show($id){
        
        // Look for contact with specific id
        $contact = Contact::find($id);

        if (sizeof($contact) > 0){
        	$contact['notes'] = $contact->notes;
        	return $contact;
        }else{
        	return response('No contact with that specific id found', 404);
        }
    }

    public function store(Request $request){
        return Contact::create($request->all());
    }

    public function update(Request $request, $id){
        $contact = Contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $contact->update($request->all());

        return $contact;
    }

    public function delete(Request $request, $id){
        $contact = contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }
        
        $contact->delete();

        return 204;
    }

    public function contact_notes(Request $request){

    }
}
