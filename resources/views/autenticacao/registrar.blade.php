@extends('layouts.principal')
@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span9">
            <h1>Brand</h1>
        </div>
        <div class="span3">
            <a href="/" class="btn btn-primary">Entrar</a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="content">
            <div class="card">
                <div class="card-header text-color-white">Criar usuário</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="control-group">
                            <label for="nome" class="control-label text-color-white">Nome</label>
                            <div class="controls">
                                <input id="name" type="text" name="name" class="input-xxlarge" required autofocus>
                                @if ($errors->has('name'))
                                    <span>
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label for="email" class="control-label text-color-white">Email</label>
                            <div class="controls">
                                <input id="email" class="input-xxlarge" type="email" name="email" required>
                                @if ($errors->has('email'))
                                    <span>
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label for="password" class="control-label text-color-white">Senha</label>
                            <div class="controls">
                                <input id="password" class="input-xxlarge" type="password" name="password" required>
                                @if($errors->has('password'))
                                    <span>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label for="password-confirm" class="control-label text-color-white">Confirme sua senha</label>
                            <div class="controls">
                                <input id="password-confirm" class="input-xxlarge" type="password" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-primary input-xxlarge">Criar</button>
                            </div>
                        </div>

                    </form>
                
            </div>
        </div>
    </div>
</div>
                        

                       
@stop