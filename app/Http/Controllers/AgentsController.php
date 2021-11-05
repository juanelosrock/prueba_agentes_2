<?php

namespace App\Http\Controllers;

use App\Agents;
use Illuminate\Http\Request;

class AgentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agents.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agents::truncate();

        $request->validate([
            'agentname1'=>'required',
            'zipcode1'=> 'required' , 
            'agentname2'=>'required',
            'zipcode2'=> 'required'            
        ]);

        $agent1 = new Agents([
            'name' => $request->get('agentname1'),
            'zipcode'=> $request->get('zipcode1')            
        ]);

        $agent2 = new Agents([
            'name' => $request->get('agentname2'),
            'zipcode'=> $request->get('zipcode2')            
        ]);

        if($agent1->save() && $agent2->save()){
            return redirect('/contacts')->with('success', 'Los agentes han sido creados, y hemos realizado una comparacion contra los contactos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function show(Agents $agents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function edit(Agents $agents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agents $agents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agents  $agents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agents $agents)
    {
        //
    }
}
