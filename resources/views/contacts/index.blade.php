@extends('agents.layouts.app')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <h3>
            Aca hacemos el Match entre Agentes y Contactos
        </h3>
        <p>
            <small>En este apartado vamos a presentar el Macth entre agentes y contactos</small>
        </p>
    </div>
</div>
<hr/> 
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <tr>
                <th>Agente</th>
                <th>Contactos</th>
            </tr>
            @php
                if(!empty($contactos)){
                    foreach($contactos as $data){
            @endphp
            <tr>
                <td>{{ $data['name'] }}</td>
                <td>
                @php
                    if(!empty($data['contactos'])){
                        foreach($data['contactos'] as $contacto){
                @endphp
                {{ $contacto['name'] }} {{ $contacto['zipcode'] }} </br>
                @php
                        }
                    }else{
                @endphp        
                        No existen coincidencias con este agente.
                @php
                    }
                @endphp
                </td>
            </tr>
            @php
                    }
                }
            @endphp
        </table>
    </div>
</div>   
<a class="btn btn-success" href="{{ route('agents.index') }}">Volver a la pagina principal</a>
@endsection