<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('school.index',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('school.create');
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
            "scname" => 'required',
            "scemail" => 'required',
            "scphone"=>'required',
            "scaddress"=>'required',
            "image" => 'required|mimes:jpeg,png,jpg|max:50000'

        ]);

         $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        

        School::create([
          "scname" => request('scname'),
          "scemail" => request('scemail'),
          "scphone" => request('scphone'),
          "scaddress" => request('scaddress'),
          "scprofile" => $imageName

        ]);

        return redirect()->route('school.index');



           
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
        
        $school = School::find($id);
        return view('school.edit', compact('school'));
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
            "scname" => 'required',
            "scemail" => 'required',
            "scphone"=>'required',
            "scaddress"=>'required',
            "image" => 'required|mimes:jpeg,png,jpg|max:50000'
            
            
    ]);
if($request->hasfile('image')){
         
             $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
         }else {
            $imageName=request('oldimg');
        }
        
         $school = School::find($id);
         $school->scname = request('scname');
         $school->scemail = request('scemail');
         $school->scphone = request('scphone');
         $school->scaddress = request('scaddress');
         $school->scprofile = $imageName;
         

         $school->save();
         return redirect()->route('school.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $school = School::find($id);
        $school->delete();
        return redirect()->route('school.index');
}

}
