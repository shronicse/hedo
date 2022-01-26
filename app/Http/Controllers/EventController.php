<?php



namespace App\Http\Controllers;



use App\Models\event;

use App\Models\Member;
use Illuminate\Http\Request;



class EventController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        $events = Event::where([
            ['slug','!=',Null],
            //['detail','!=',Null],
            [function ($query) use ($request) {
                if(($term=$request->term)) {
                    $query->orwhere('slug','LIKE','%' .$term . '%')->get();
                    $query->orwhere('detail','LIKE','%' .$term . '%')->get();
                }
            }]
        ])
            ->orderBy("id","desc")
            ->paginate(10);


        //$events = Event::latest()->paginate(2);



        return view('back.events.index',compact('events'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back.events.create');

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

            'slug' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

        event::create($input);

        return redirect()->route('events.index')

            ->with('success','event created successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\event  $event

     * @return \Illuminate\Http\Response

     */

    public function show(event $event)

    {

        return view('back.events.show',compact('event'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\event  $event

     * @return \Illuminate\Http\Response

     */

    public function edit(event $event)

    {

        return view('back.events.edit',compact('event'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\event  $event

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, event $event)

    {

        $request->validate([

            'slug' => 'required',

            'detail' => 'required',

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



        $event->update($input);


        return redirect()->route('events.index')

            ->with('success','event updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\event  $event

     * @return \Illuminate\Http\Response

     */

    public function destroy(event $event)

    {

        $event->delete();



        return redirect()->route('events.index')

            ->with('success','event deleted successfully');

    }

}
