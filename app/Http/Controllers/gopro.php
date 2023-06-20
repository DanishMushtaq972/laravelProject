<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Mygoproprodd;
class gopro extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request['search']??"";
        if($search!="")
        {
          $data = Mygoproprodd::where('name','=',$search)->get();
        }else{
            $data = Mygoproprodd::all();
        }
       $prod = Mygoproprodd::count();
        return view('home1', compact(['data','search','prod']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $prod = Mygoproprodd::find($id);
        if(is_null($prod)){
            return redirect('show');
        }else{
            $data = compact('prod');
            return view('edit')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $prod = Mygoproprodd::find($id);
        $name = $request->get('name');
        $price = $request->get('price');
        $brand = $request->get('brand');
        $prod->name= $name; 
        $prod->price = $price;
        $prod->brand = $brand;
        $prod->update();
        return redirect()->back()->with('status','Student Updated Successfully'); 
       }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $prod = Mygoproprodd::find($id);
        $prod->delete();
        return redirect('insert');
        //echo "<pre>";
        //print_r($prod);
        //$prod->delete();
        //return redirect('home')->with('status','deleted');
        //DB::delete('delete from student where id = ?',[$id]);
      //echo "Record deleted successfully.<br/>";
      //echo '<a href = "/delete-records">Click Here</a> to go back.';
      //$prod = goproprod::where('id',$id)->delete();
    }
}

