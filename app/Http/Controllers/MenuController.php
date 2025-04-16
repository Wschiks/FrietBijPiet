<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /** create en update */
    /** edit en update */



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Menu::all();
        return view("menu.index", compact("products"));
    }

    /**
     *
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "name"=> "required",
            "price"=> "required",
            "description"=>"required"
        ]);


        Menu::create($request->all());
        return redirect()->route('menu.index')->with('success','Menu toegevoegd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view("menu.show",compact("menu"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view("menu.edit", compact("menu"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            "description"=>"required"
        ]);

        $menu->update($request->all());
        return redirect()->route('menu.index')->with('success','Menu bijgewerkt!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Menu $menu)

    {
        $menu->delete($request->all());
        return redirect()->route('menu.index')->with('success','Menu verwijderd!');
    }


}
