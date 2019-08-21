<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$user = Auth::user();
			$contacts = Contact::where('user_id', $user->id)->get();
			return view('contacts.index', compact('contacts'));
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
	    $user = Auth::user();
			
			$request->validate([
					'First_Name'=>'required',
					'Last_Name'=>'required',
					'Mobile_Phone'=>'required'
			]);

			$contact = new Contact([
					'First_Name' => $request->get('First_Name'),
					'Last_Name' => $request->get('Last_Name'),
					'Street' => $request->get('Street'),
					'City' => $request->get('City'),
					'State' => $request->get('State'),
					'Zip' => $request->get('Zip'),
					'Mobile_Phone' => $request->get('Mobile_Phone'),
					'Home_Phone' => $request->get('Home_Phone')
			]);
			
	    $user->contacts()->save($contact);
			return redirect('/contacts')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
			$contact = Contact::find($id);
			return view('contacts.edit', compact('contact'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
			$request->validate([
				'First_Name'=>'required',
				'Last_Name'=>'required',
				'Mobile_Phone'=>'required'
			]);

			$contact = Contact::find($id);
			$contact->First_Name = $request->get('First_Name');
			$contact->Last_Name = $request->get('Last_Name');
			$contact->Street = $request->get('Street');
			$contact->City = $request->get('City');
			$contact->State = $request->get('State');
			$contact->Zip = $request->get('Zip');
			$contact->Mobile_Phone = $request->get('Mobile_Phone');
			$contact->Home_Phone = $request->get('Home_Phone');
					
			$contact->save();

			return redirect('/contacts')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
