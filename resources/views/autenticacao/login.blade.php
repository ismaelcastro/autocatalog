@extends('layouts.principal')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <h1>Brand</h1>
        </div>
        <div class="span3">
            <a href="/registrar" class="btn btn-primary">Registrar-se</a>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="content">
			<div class="card">
				<div class="card-header text-color-white">Entrar</div>
				
					
				
				<form method="POST" action="/logar">			
					<fieldset>
						@csrf
						@if( session('msg') )
						<div class="alert label-important">
							{{session('msg')}}
						</div>
						@endif
						<div class="control-group">
							<label for="" class="control-label text-color-white">Email</label>
							<div class="controls">
								<input type="text" class="input-xxlarge" name="email" id="inputEmail">

								@if( $errors->has('email') )
									<div class="alert label-important" >
										{{ $errors->first('email') }}
									</div>
								@endif
							</div>
						</div>
						<div class="control-group">
							<label for="" class="control-label text-color-white">Senha</label>
							<div class="controls">
								<input type="password" class="input-xxlarge" name="password" id="password">

								@if( $errors->has('password') )
									<div class="alert label-important">
										{{ $errors->first('password') }}
									</div>
								@endif
							</div>
						</div>

						<div class="control-group">
							<label for="" class="checkbox text-color-white">
								<input type="checkbox"> Lembrar-me
							</label>

							<button type="submit" class="btn btn-primary input-xxlarge">Entrar</button>
							
						</div>
					</fieldset>
				</form>
				<div class="center link_"><a class="text-color-blue" href="">Recuperar senha</a></div>
					<div class="text-color-white center">Deseja criar seu usuário? 
					<a class="text-color-blue" href="">Registre-se</a>
				</div>
			</div>
		</div>
	</div>	
</div>
@stop