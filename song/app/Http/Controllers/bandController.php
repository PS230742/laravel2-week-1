<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\band;

class bandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::all();
        return View('bands.index', compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bands = new Band();

        $bands->name = request('name');
        $bands->founded = request('founded');
        $bands->genre = request('genre');
        $bands->active_til = request('active_til');

        $bands->save();

        return redirect('/bands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        return view('bands.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = Band::find($id);
        return view('bands.edit', compact('band'));
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
            'name' => 'required',
            'founded' => 'required',
            'genre' => 'required',
        
        ]);


    

       // Values van de edit form
        $band = Band::find($id);
        $band->name = $request->get('name');
        $band->founded = $request->get('founded');
        $band->genre = $request->get('genre');
        $band->active_til = $request->get('active_til');
        $band->save();

    return redirect('/bands')->with('success', 'Band is succesvol gewijzigd');
    


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $band = Band::find($id);
        $band->delete();

        return redirect('/bands')->with('success', 'Band is succesvol verwijderd');
    }
}
