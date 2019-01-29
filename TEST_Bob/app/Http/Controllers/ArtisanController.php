<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artisan;
class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artisans = Artisan::all();

        return view('Artisans.index', compact('artisans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Artisans.create');
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
        'email' => 'required',
        'departement' => 'required',
        'id_metier'=> 'required|integer',
        'artisan_nom'=>'required',
    ]);
       $artisan = new Artisan([
        'artisan_nom' => $request->get('artisan_nom'),
        'id_metier'=> $request->get('id_metier'),
        'departement'=> $request->get('departement'),
        'email' => $request->get('email')
    ]);
       $artisan->save();
       return redirect('/artisan')->with('success', 'Stock has been added');
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
        $artisan = Artisan::find($id);

        return view('edit', compact('artisan'));
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
            'nom'=>'required',
            'id_metier'=> 'required|integer',
            'departement' => 'required',
            'email' => 'required'
        ]);

        $artisan = Artisan::find($id);
        $artisan->nom = $request->get('nom');
        $artisan->id_metier = $request->get('id_metier');
        $artisan->departement = $request->get('departement');
        $artisan->email = $request->get('email');
        $artisan->save();

        return redirect('/shares')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artisan = Artisan::find($id);
       $artisan->delete();

       return redirect('/artisan')->with('success', 'Stock has been deleted Successfully');
   }
}
