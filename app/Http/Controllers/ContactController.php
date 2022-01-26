<?php

namespace App\Http\Controllers;

use App\Models\contact;

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

        $contacts = contact::latest()->paginate(5);



        return view('back.contacts.index',compact('contacts'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back.contacts.create');

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
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

        Contact::create($input);



        return redirect()->route('contact')

            ->with('success','Information submitted successfully!.Please wait for admin approval.!');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\contact  $contact

     * @return \Illuminate\Http\Response

     */

    public function show(contact $contact)

    {

        return view('back.contacts.show',compact('contact'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\contact  $contact

     * @return \Illuminate\Http\Response

     */

    public function edit(contact $contact)

    {

        return view('back.contacts.edit',compact('contact'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\contact  $contact

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, contact $contact)

    {

        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',


        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }



        $contact->update($input);



        return redirect()->route('contacts.index')

            ->with('success','Information updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\contact  $contact

     * @return \Illuminate\Http\Response

     */

    public function destroy(contact $contact)

    {

        $contact->delete();



        return redirect()->route('contacts.index')

            ->with('success','Information deleted successfully');

    }

}
