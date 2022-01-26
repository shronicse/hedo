<?php


namespace App\Http\Controllers;



use App\Models\Member;

use Illuminate\Http\Request;



class MemberController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        $members = Member::where([
            ['name','!=',Null],
            [function ($query) use ($request) {
               if(($term=$request->term)) {
                   $query->orwhere('name','LIKE','%' .$term . '%')->get();
               }
           }]
        ])
             ->orderBy("id","desc")
            ->paginate(10);


       // $members = Member::latest()->paginate(5);


        return view('back.members.index',compact('members'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back.members.create');

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

        Member::create($input);


        return redirect()->route('members.index')

            ->with('success','Member created successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Member  $Member

     * @return \Illuminate\Http\Response

     */

    public function show(Member $member)

    {

        return view('back.members.show',compact('member'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Member  $Member

     * @return \Illuminate\Http\Response

     */

    public function edit(Member $member)

    {

        return view('back.members.edit',compact('member'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Member  $Member

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Member $Member)

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



        $Member->update($input);



        return redirect()->route('members.index')

            ->with('success','Member updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Member  $Member

     * @return \Illuminate\Http\Response

     */

    public function destroy(Member $Member)

    {

        $Member->delete();



        return redirect()->route('members.index')

            ->with('success','Member deleted successfully');

    }

}
