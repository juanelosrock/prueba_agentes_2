@extends('agents.layouts.app')
 
@section('content')
<div class="row">
		<div class="col-md-12">
			<h3>
				Ingrese los agentes para realizar match.
			</h3>
			<p>
				<small>En este apartado vamos a registar los dos agentes que deseamos hagan MATCH contra los Contactos registrados en el sistema</small>
			</p>
		</div>
	</div>
    <hr/>            
    <form action="{{ route('agents.store') }}" method="POST">
    @csrf
	<div class="row">
		<div class="col-md-4">			
            <div class="form-group">
                    
                <label for="agentname1">
                    Nombre Agente 1
                </label>
                <input type="text" class="form-control" id="agentname1" name="agentname1" />
            </div>
            <div class="form-group">
                    
                <label for="zipcode1">
                    Zipcode 1
                </label>
                <input type="number" class="form-control" id="zipcode1" name="zipcode1" />
            </div>								 							
		</div>
		<div class="col-md-4">
			 
			<button type="submit" class="btn btn-success btn-block btn-lg">
				Match
			</button>            
		</div>
		<div class="col-md-4">
            <div class="form-group">
                    
                <label for="agentname2">
                    Nombre Agente 2
                </label>
                <input type="text" class="form-control" id="agentname2" name="agentname2" />
            </div>
            <div class="form-group">
                    
                <label for="zipcode2">
                    Zipcode 2
                </label>
                <input type="number" class="form-control" id="zipcode2" name="zipcode2" />
            </div>											
		</div>
	</div>
    </form>
@endsection