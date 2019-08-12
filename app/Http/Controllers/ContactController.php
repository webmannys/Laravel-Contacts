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
        //
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
					'First'=>'required',
					'Last'=>'required',
					'Mobile_Phone'=>'required'
			]);

			$contact = new Contact([
					'uid' => Auth::user()->id,
					'First' => $request->get('First'),
					'Last' => $request->get('Last'),
					'Street' => $request->get('Street'),
					'City' => $request->get('City'),
					'State' => $request->get('State'),
					'Zip' => $request->get('Zip'),
					'Mobile_Phone' => $request->get('Mobile_Phone'),
					'Home_Phone' => $request->get('Home_Phone')
			]);
			
			$contact->save();
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
        //
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
        //
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
