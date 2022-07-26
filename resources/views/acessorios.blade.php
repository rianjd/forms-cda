@extends('welcome')

@section('conteudo')

<div class="content">
<!--FORM CORE-->
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center mb-5">Novo usuario - Core</h3>
            <form class="mb-5" action="{{ route('form.store')}}" method="post" id="tipo" name="tipo" value="coreForm">
              {{ csrf_field() }}

              <div class="row">
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">Nome completo *</label>
                  <input type="text" class="form-control" name="nome" id="nome" required="" placeholder="Seu nome">
                </div>
                <div class="col-md-6 form-group mb-5">
                  <label for="" class="col-form-label">CPF *</label>
                  <input type="cpf" class="form-control" name="cpf" id="cpf" required=""  placeholder="Seu CPF">
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 form-group mb-5">
                    <label for="setor" class="col-form-label">Setor *</label>
                    <select class="form-control" name="setor" required="">
                    <option value="">Escolha...</option>
                    <option>Crediario</option>
                    <option>Pacote</option>
                    <option>Caixa</option>
                    <option>Vendas</option>
                    <option>Logistica</option>
                    <option>ADM</option>
                    <option>Volante</option>
                    <option>Gerencia</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, escolha um setor.
                    </div>
                </div>
                <div class="col-md-4 offset-md-2 form-group align-self-end mb-5">
                    <label for="filial" class="col-form-label">Filial *</label>
                    <select class="form-control" name="filial" required="">
                    <option value="">Escolha...</option>
                    <option>99 - Matriz</option>
                    <option>01 - Joinville</option><option>02 - Biguaçu</option><option>03 - Palhoça</option><option>04 - Itajaí</option><option>06 - Balneario</option><option>08 - Centro</option>
                    <option>09 - Trindade</option><option>11 - Joinville(America)</option><option>12 - Blumenau</option><option>21 - Estreito</option><option>24 - Rio do Sul</option><option>26 - Itapema</option>
                    <option>27 - Jaraguá</option><option>28 - Blumenau</option><option>29 - Tijucas</option><option>30 - Brusque</option><option>32 - Vargem Grande</option><option>34 - Porto Belo</option>
                    <option>35 - Campeche</option><option>100 - Loja Online</option>
                    </select>
                    <div class="invalid-feedback">
                        Por favor, escolha umA FILIAL.
                    </div>
                </div>

              </div>
              <div class="row">
                <div class="col-md-4 form-group mb-5">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input " name="inDJ" id="inDJ" value="Sim" >
                        <label class="form-check-label" for="inDJ" value="">Incluir no DJ</label>
                    </div>
                </div>
            </div>
              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Funções adicionais (Opcional)</label>
                  <textarea class="form-control" name="msg" id="msg" cols="30" rows="2"  placeholder="Permissões, usuarios para clonar, limitações...."></textarea>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-4 form-group text-center">
                  <input type="submit" value="Enviar" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
              <input type="hidden" id="tipo" name="tipo" value="Core">
            </form>

            <div class="max-width mt-5">
                <!--FORM VALIDATE-->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Formulario enviado com sucesso!</strong> <br>Sua solicitação foi enviada, aguarde o retorno.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                @endif
            </div>


          </div>
        </div>
      </div>
    </div>

  </div>


@endsection
