@extends('welcome')

@section('conteudo')

<div class="container-fluid" style="padding: 50px;">
  <div class="row ">
    <div class="col-md-6 mb-5">
        <div class="accordion " id="accordion">
            <div class="card" id="Tone">
                <div class="card-header" >
                        <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#one" aria-expanded="false" aria-controls="one">
                            <img src="images/corebusiness_1200x300.png" width="120" height="30" class="d-inline-block align-top" alt="">
                        </button>
                </div>
                <div class="card-body text-center collapse " id="one" aria-labelledby="Tone" data-parent="#accordion">
                    <h5 class="card-title">Criação de usuario CoreBusiness</h5>
                    <p class="card-text mb-5">Enviar informações do colaborador para a criação de acesso ao sistema do Core.</p>
                    <a href="/core" class="btn btn-primary"  >Ir ao formulario</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="Two">
                    <button class="btn btn-link btn-block text-left" data-toggle="collapse" href="#two" aria-expanded="false" aria-controls="two">
                        <img src="images/logo-mattermost.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    </button>
                </div>
                <div class="card-body text-center collapse" id="two" aria-labelledby="Two" data-parent="#accordion">
                    <h5 class="card-title">Criação de Chat - Messenger</h5>
                    <p class="card-text mb-5">Enviar informações do colaborador para a criação de login e senha no messenger.</p>
                    <a href="/chat" class="btn btn-primary ">Ir ao formulario</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="Tres">
                    <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#tres" aria-expanded="false" aria-controls="tres">
                        <img src="images/djpdv.png" width="150" height="30" class="d-inline-block align-top" alt="">
                    </button>
                </div>
                <div class="card-body text-center collapse" id="tres" aria-labelledby="Tres" data-parent="#accordion">
                    <h5 class="card-title">Criação de usuario no DJ</h5>
                    <p class="card-text mb-5">Enviar informações do colaborador para a criação de acesso ao PDV.</p>
                    <a href="/dj" class="btn btn-primary">Ir ao formulario</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="Four">
                    <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#four" aria-expanded="false" aria-controls="four">
                        <img src="images/zimbra-black.png" width="120" height="30" class="d-inline-block align-top" alt="">
                    </button>
                </div>
                <div class="card-body text-center collapse" id="four" aria-labelledby="Four" data-parent="#accordion">
                    <h5 class="card-title">Criação de email</h5>
                    <p class="card-text mb-5">Enviar informações do colaborador para a criação de login e senha.</p>
                    <a href="/email" class="btn btn-primary">Ir ao formulario</a>
                </div>
            </div>
            <div class="card">
                    <div class="card-header" id="Five">
                        <button class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#five" aria-expanded="true" aria-controls="five">
                            <img src="images/logo-preto.png" width="130" height="40" class="d-inline-block align-top" alt="">
                        </button>
                    </div>
                    <div class="card-body text-center collapse show" id="five" aria-labelledby="Five" data-parent="#accordion">
                        <h5 class="card-title">Abertura de chamados - Suporte TI</h5>
                        <p class="card-text mb-5">Abrir chamados para assistencia, ajuda ou solicitações.</p>
                        <a href="/chamado" class="btn btn-primary">Ir ao formulario</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 " >
                <div class="card-header text-center">
                        Instruções
                </div>
                <div class="card-body">
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(139, 4, 4);font-size:22px;"></i> Cada formulario é designado a um objetivo, preste atenção antes de selecionar.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(139, 4, 4);font-size:22px;"></i>  Para preencher os formularios o gerente da sua filial deve estar ciente, evitando mal entendidos.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(139, 4, 4);font-size:22px;"></i>  Todos os campos marcados com ( * ) são obrigatórios.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(139, 4, 4);font-size:22px;"></i>  Adicione ao campo 'observações' a maior quantidade de detalhes referente a sua solicitação.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(139, 4, 4);font-size:22px;"></i>  Em caso de falta de informações ou não entendimento da solicitação, entrareos em contato com o solicitante.</p>
                  <p class="card-text mb-3"><i class="bi bi-exclamation-diamond" style="color: rgb(139, 4, 4);font-size:22px;"></i>  Caso encontre erros ou falhas, entrar em contato com o Suporte.</p>
                  <p class="card-text"><small class="text-muted">Ainda com duvidas? Ligue 3090 (TI)</small></p>
                </div>
        </div>
    </div>

  </div>
</div>
<div class="modal fade" id="teste" tabindex="-1" role="dialog" aria-labelledby="teste" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
    </div>
  </div>
</div>

@endsection
