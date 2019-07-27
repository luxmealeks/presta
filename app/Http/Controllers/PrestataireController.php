<?php

namespace App\Http\Controllers;

use App\Models\Prestataire;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PrestataireController extends Controller
{
    public function list(Request $request)
    {
        // $prestataire = Prestataire::with('type')->get();
        $prestataire = Prestataire::get();

        return Datatables::of($prestataire)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prestataires.tableprestataire');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('prestataires.createprestataire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request, [
                'ninea' => 'required|string|max:50',
                'bp' => 'required|string|max:50',
                'telephone' => 'required|max:30|unique:prestataires,telephone',
                'email' => 'required|email|max:255|unique:prestataires,email',
                'registreCommerce' => 'required|string|max:50',
                'raisonSociale' => 'required|string|max:50',
            ]
        );

        return view('prestataires.tableprestataire');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Prestataire $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Prestataire $prestataire)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Prestataire $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestataire $prestataire)
    {
        $prestataire = Prestataire::find($id);
        // $user = $prestataire->user;

        // return $user; //on le fait pour tester ce qu'il retourne.

        $message = 'modifier'.$prestataire->raisonSociale.'Edition effectuée';

        // return redirect()->route('prestataires.edit')->with(compact('message'));

        return view('layout.prestataires.edit')->with(compact('prestataire', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Prestataire         $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestataire $prestataire)
    {
        return view('layout.prestataires.update')->with(compact('prestataire', 'id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Prestataire $prestataire
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestataire $prestataire)
    {
        $prestataire = Prestataire::find($id);
        $prestataire->delete();
        $message = $prestataire->raisonSociale.' a été supprimé(e)';

        return redirect()->route('prestataires.index')->with(compact('message'));
    }
}
