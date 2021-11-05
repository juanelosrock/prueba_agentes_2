<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\Agents;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agentes = Agents::all();
        $contactos = array();
        if(!empty($agentes)){
            foreach($agentes as $agente){
                $contactos[$agente->agent_id]=array();
                $contactos[$agente->agent_id]['name']=$agente->name;
                $contactos[$agente->agent_id]['contactos']=array();
                $contacto = Contacts::where('zipcode','=', $agente->zipcode)->get();
                if(!empty($contacto)){
                    foreach($contacto as $data){
                        array_push($contactos[$agente->agent_id]['contactos'], array('name'=>$data->name, 'zipcode'=>$data->zipcode));
                    }
                }
            }
        }
        return view('contacts.index', compact(['contactos']));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
