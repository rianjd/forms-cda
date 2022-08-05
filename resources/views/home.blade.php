@extends('welcome')

@section('conteudo')

<div class="container-fluid" style="padding: 50px;">
  <div class="row ">
    <div class="col-md-3 mb-2">
            <div class="card mb-2" style="box-shadow: 2px 3px 9px #b9b8b8;" id="Tone">
                <div class="card-header" >
                        <a class="btn btn-link btn-block text-left"  href="/core" >
                            <img src="images/corebusiness_1200x300.png" width="120" height="30" class="d-inline-block align-top" alt="">
                        </a>
                </div>
                <div class="card-body text-center collapse show " style="padding: 0;">
                    <h5 class="card-title mt-3" >Criação de usuario CoreBusiness</h5>
                    <p class="card-text mb-4 p-2">Acesso ao sistema do Core.</p>
                    <a href="/core" class="btn btn-primary mb-3"  >Ir ao formulario</a>
                </div>
            </div>
            <div class="card mb-2" style="box-shadow: 2px 3px 9px #b9b8b8;">
                <div class="card-header" id="Two">
                    <a class="btn btn-link btn-block text-left" href="/chat" >
                        <img src="images/logo-mattermost.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    </a>
                </div>
                <div class="card-body text-center collapse show" style="padding: 0;" >
                    <h5 class="card-title mb-4 mt-3">Criação de Chat - Messenger</h5>
                    <a href="/chat" class="btn btn-primary mb-3">Ir ao formulario</a>
                </div>
            </div>
    </div>
    <div class="col-md-3 mb-2">
            <div class="card mb-2" style="box-shadow: 2px 3px 9px #b9b8b8;">
                <div class="card-header" id="Tres">
                    <a class="btn btn-link btn-block text-left" href="/dj">
                        <img src="images/djpdv.png" width="150" height="30" class="d-inline-block align-top" alt="">
                    </a>
                </div>
                <div class="card-body text-center collapse show" style="padding: 0;">
                    <h5 class="card-title mt-3">Criação de usuario no DJ</h5>
                    <p class="card-text mb-4 p-2">Acesso ao sistema PDV.</p>
                    <a href="/dj" class="btn btn-primary mb-3">Ir ao formulario</a>
                </div>
            </div>

            <div class="card mb-2" style="box-shadow: 2px 3px 9px #b9b8b8;">
                <div class="card-header" id="Four">
                    <a class="btn btn-link btn-block text-left" href="email" >
                        <img src="images/zimbra-black.png" width="120" height="30" class="d-inline-block align-top" alt="">
                    </a>
                </div>
                <div class="card-body text-center collapse show"  style="padding: 0;" >
                    <h5 class="card-title mb-4 mt-3">Criação de email</h5>
                    <a href="/email" class="btn btn-primary mb-3">Ir ao formulario</a>
                </div>
            </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 " style="box-shadow: 2px 3px 9px #b9b8b8;" >
                <div class="card-header text-center">
                        <h4>INSTRUÇÕES</h4>
                </div>
                <div class="card-body">
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(211, 175, 14);font-size:22px;"></i> Cada formulario é designado a um objetivo, preste atenção antes de selecionar.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(211, 175, 14);font-size:22px;"></i>  Para preencher os formularios o gerente da sua filial deve estar ciente, evitando mal entendidos.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(211, 175, 14);font-size:22px;"></i>  Todos os campos marcados com ( * ) são obrigatórios.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(211, 175, 14);font-size:22px;"></i>  Adicione ao campo 'observações' a maior quantidade de detalhes referente a sua solicitação.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(211, 175, 14);font-size:22px;"></i>  Em caso de falta de informações ou não entendimento da solicitação, entraremos em contato com o solicitante.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(211, 175, 14);font-size:22px;"></i>  Caso encontre erros ou falhas, entrar em contato com o Suporte.</p>
                  <p class="card-text"><small class="text-muted">Ainda com duvidas? Ligue 3090 (TI)</small></p>
                </div>
        </div>
    </div>

  </div>
  <div class="grid">
        <div class="col-md-6 " style="padding-right: 15px; padding-left: 0 ;">
            <div class="card" style="box-shadow: 2px 3px 9px #b9b8b8;">
                    <div class="card-header p-3" id="Five">
                        <a class="btn btn-link btn-block text-center" href="chamado" >
                            <img src="images/logo-preto.png" width="150" height="60" class="d-inline-block align-top" alt="">
                        </a>
                    </div>
                    <div class="collapse show card-body" style="padding: 0;" >
                        <div class="text-center" >
                            <h5 class="card-title mt-3">Abertura de chamados - Suporte TI</h5>
                            <p class="card-text mb-4 p-1">Abrir chamados para assistencia, ajuda ou solicitações diretamente com o TI.</p>
                            <a href="/chamado" class="btn btn-primary mb-3">Ir ao formulario</a>
                        </div>
                    </div>
            </div>
        </div>
   </div>
</div>

@endsection
