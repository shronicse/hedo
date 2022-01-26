<?php



namespace App\Http\Controllers;



use App\Models\Product;
use App\Models\Project;

use Illuminate\Http\Request;



class ProjectController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        $projects = Product::where([
            ['name','!=',Null],
            [function ($query) use ($request) {
                if(($term=$request->term)) {
                    $query->orwhere('name','LIKE','%' .$term . '%')->get();
                }
            }]
        ])
            ->orderBy("id","desc")
            ->paginate(10);
        //$projects = Project::latest()->paginate(2);



        return view('front.project',compact('projects'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back.projects.create');

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

        Project::create($input);

        return redirect()->route('projects.index')

            ->with('success','Project created successfully.');

    }



    /**

     * Display the specified resource.

     *

     * @param  \App\Project  $project

     * @return \Illuminate\Http\Response

     */

    public function show(Project $project)

    {

        return view('front.project',compact('project'));

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Project  $project

     * @return \Illuminate\Http\Response

     */

    public function edit(project $project)

    {

        return view('back.projects.edit',compact('project'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Project  $project

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Project $project)

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



        $project->update($input);


        return redirect()->route('projects.index')

            ->with('success','Project updated successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Project  $project

     * @return \Illuminate\Http\Response

     */

    public function destroy(Project $project)

    {

        $project->delete();



        return redirect()->route('projects.index')

            ->with('success','Project deleted successfully');

    }

}
