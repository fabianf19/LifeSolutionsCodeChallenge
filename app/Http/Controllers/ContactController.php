<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\ContactNote;

class ContactController extends Controller
{
    
    /**
		* Retrieves all contacts from the database with their contacts
		*
		* A *description*, that can span multiple lines, to go _in-depth_ into the details of this element
		* and to provide some background information or textual references.
		*
		* @param string $myArgument With a *description* of this argument, these may also
		*    span multiple lines.
		*
		* @return array of type Contact with 
	*/
    public function index()
    {
        $all_contacts = Contact::all();
        foreach ($all_contacts as $contact) {
        	$contact['notes'] = $contact->notes;
        }

        $dict = array('data' => $all_contacts );

        return $dict;
    }
 
 	/**
		* Retrieves a specific contact from the database with 
		*
		* @param int $id The contact_id 
		*
		* @return void
	*/
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

    // --------------------------------------------------------------------------------------------------------
	// --------------------------------------------------------------------------------------------------------
	// CRUD Contact notes
	// --------------------------------------------------------------------------------------------------------
	// --------------------------------------------------------------------------------------------------------

    public function contact_notes(Request $request, $id){
    	$contact = Contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        return $contact->notes;
    }

    public function create_note_contact(Request $request, $id){
		$contact = Contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $notes = $request->input('notes');

        $note = ContactNote::create(['notes' => $notes]);
        $contact->notes()->save($note);

		return $note;
    }

    public function update_note(Request $request, $id_contact, $id_note){
    	// This query could also be directly searched via relationships, similar to
    	// $contact_notes = ContactNote::find($id_note)->where('id_contact','=',$id_contact)->get();

    	$contact = Contact::find($id_contact);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $all_notes = $contact->notes;

        $found_note = null;

        foreach ($all_notes as $note) {
        	if ($note->id == $id_note){
        		$note->notes = $request->input('notes');
        		$found_note = $note;
        		$note->save();
        		break;
        	}
        }

        if ($found_note == null){
        	return response('No contact note with that specific id found', 404);
        }

        return $found_note;
    }

    public function delete_note(Request $request, $id_contact, $id_note){
    	$contact = Contact::find($id_contact);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $all_notes = $contact->notes;

        $found_note = null;

        foreach ($all_notes as $note) {
        	if ($note->id == $id_note){
        		$found_note = $note;
        		break;
        	}
        }

        if ($found_note == null){
        	return response('No contact note with that specific id found', 404);
        }

        $found_note->delete();

        return 204;
    }

    public function delete_note_id(Request $request, $id_note){
    	$note = ContactNote::find($id_note);

        if (sizeof($note) == 0){
        	return response('No contact note with that specific id found', 404);
        }

        $note->delete();

        return 204;
    }
}
