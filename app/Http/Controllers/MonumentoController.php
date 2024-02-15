<?php

namespace App\Http\Controllers;

use App\Http\Requests\MonumentoRequest;
use App\Models\Monumento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $monumentos=Monumento::all();
      // $monumentos = Monumento::with('provincia')->get();
      return view('monumentos.index', compact('monumentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $users=User::all();
      $provincias = DB::table('provincias')->get();
      return view('monumentos.create', compact('provincias','users'));  //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MonumentoRequest $request)
    {
      // dd($request->all());
      Monumento::create($request->all());

      return redirect()->route('monumentos.index')->with('success', __('Monument created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Monumento $monumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monumento $monumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Monumento $monumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monumento $monumento)
    {
        //
    }
}
