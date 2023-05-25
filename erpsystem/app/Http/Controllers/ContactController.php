<?php
namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
class ContactController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['contacts'] = Contact::orderBy('id','asc')->paginate(5);
return view('contacts.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('contacts.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'subject' => 'required',
'email' => 'required',
'message' => 'required',
]);

        
$Contact = new Contact;
$Contact->name = $request->name;
$Contact->email = $request->email;
$Contact->subject = $request->subject;
$Contact->message = $request->message;



$Contact->save();
return redirect()->route('contacts.success')
->with('success','Your has been successfully delivered.');
}
/**
* Display the specified resource.
*
* @param  \App\Contact  $Contact
* @return \Illuminate\Http\Response
*/
public function show(Contact $Contact)
{
return view('contacts.show',compact('Contact'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Contact  $Contact
* @return \Illuminate\Http\Response
*/
public function edit(Contact $Contact)
{
return view('contacts.edit',compact('Contact'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Contact  $Contact
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
    'name' => 'required',
    'subject' => 'required',
    'email' => 'required',
    'message' => 'required',

    
]);
$Contact = Contact::find($id);
$Contact->name = $request->name;
$Contact->subject = $request->subject;
$Contact->email = $request->email;
$Contact->message = $request->message;

$Contact->save();
return redirect()->route('contacts.index')
->with('success','Student Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\contact  $contact
* @return \Illuminate\Http\Response
*/
public function destroy(Contact $Contact)
{
$Contact->delete();
return redirect()->route('contacts.index')
->with('success','Message has been deleted successfully');
}
}