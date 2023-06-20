<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Mygoproprodd;
class goproo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search']??"";
        if($search!="")
            {
                $data = Mygoproprodd::where('brand','=',$search)->get();
            }
            else{
                $data = Mygoproprodd::paginate(10);

            }
        //
        $prodd = Mygoproprodd::count();

        return view('student',compact(['data','search','prodd']));
        
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = 'heloow';
        return view('student',compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $name = $request->get('name');
        $price = $request->get('price');
        $brand = $request->get('brand');
       // $pimage = Input::file('image');
        //var_dump($pimage->getclientOriginalName());
        //$request->image->move(public_path('images'),$pimage);
        //$file = $request->file('upload_file');
        //$uniqueFileName = uniqid() . $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();
        //return $request->input();

        $prod = new Mygoproprodd();
        $prod->name= $name;
        $prod->price = $price;
        $prod->brand= $brand;
        $prod->save();
        return redirect('show');
        //$prod->image=
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
       

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
       
    }
}

