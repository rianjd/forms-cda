@extends('welcome')

@section('conteudo')

<div class="container">
  <div class="row mb-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <a class="navbar-brand" href="#">
                    <img src="images/corebusiness_1200x300.png" width="120" height="30" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Criação de usuario CoreBusiness</h5>
                <p class="card-text mb-5">Enviar informações do colaborador para a criação de acesso ao sistema do Core.</p>
                <a href="/core" class="btn btn-primary">Ir ao formulario</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <a class="navbar-brand" href="#">
                    <img src="images/logo-mattermost.png" width="30" height="30" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Criação de Chat - Messenger</h5>
                <p class="card-text mb-5">Enviar informações do colaborador para a criação de login e senha no messenger.</p>
                <a href="/chat" class="btn btn-primary ">Ir ao formulario</a>
            </div>
        </div>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <a class="navbar-brand" href="#">
                    <img src="images/djpdv.png" width="150" height="30" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Criação de usuario no DJ</h5>
                <p class="card-text mb-5">Enviar informações do colaborador para a criação de acesso ao PDV.</p>
                <a href="/dj" class="btn btn-primary">Ir ao formulario</a>
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <a class="navbar-brand" href="#">
                    <img src="images/zimbra-black.png" width="120" height="30" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Criação de email</h5>
                <p class="card-text mb-5">Enviar informações do colaborador para a criação de login e senha.</p>
                <a href="/email" class="btn btn-primary">Ir ao formulario</a>
            </div>
        </div>
    </div>
  </div>
</div>

@endsection
