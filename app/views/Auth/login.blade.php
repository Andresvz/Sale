@extends('template')

@section('content')
<div class="container" id="login-block">
    		<div class="row">
			    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
		
			       <div class="login-box clearfix animated flipInY">
			        	<div class="login-logo animated bounceInDown">
			        		<a href="#"><img src="{{asset('img/logotipo1.png')}}" alt="Company Logo" style="width:200px;height:100px;"/></a>
			        	</div> 
			        	<hr />
			        	<div class="login-form">
			        		<div class="alert alert-error">
								@if (count($errors) > 0)
									<div class="alert alert-danger">
									<strong>Whoops!</strong> There were some problems with your input.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
									</div>
								@endif
							</div>
			        		<form method="POST"  action="{{url('login')}}">
			        			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
						   		 <input type="email" name="email" placeholder="Correo electronico" required/> 
						   		 <input type="password" name="password" placeholder="password" required/> 
						   		 <button type="submit" class="btn btn-red">Entrar</button> 
							</form>	
							<div class="login-links"> 
					            
					            <br />
					            <a href="{{ url('Auth\Contacto') }}">Quieres Registrarte? <strong>Haz click aqui</strong>
					            </a>
							</div>  
			        	</div> 			        	
			       </div>
			  	   	
			       
			    </div>
			</div>
    	</div>
@endsection