<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Template offcanvas, usando Bootstrap.</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Estilos customizados para esse template -->
</head>


<div class="container">

    @if ($data['tipo'] == 'chatForm')<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow"><img class="mr-3" id="logo-messenger" src={{"https://github.com/rianjd/forms-cda/blob/master/public/images/logo-mattermost.png?raw=true"}} width="50" height="50" style="display:block;" alt=""> <h3 class="text-dark">Messenger</h3> @endif
    @if ($data['tipo'] == 'coreForm')<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-secondary rounded shadow"><img class="mr-3" id="corebusiness_1200x300" src={{"https://github.com/rianjd/forms-cda/blob/master/public/images/corebusiness_1200x300.png?raw=true"}} width="160" height="40" style="display:block;" alt=""> @endif
    @if ($data['tipo'] == 'djForm')<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow"><img class="mr-3" id="djpdv" src={{"https://github.com/rianjd/forms-cda/blob/master/public/images/djpdv.png?raw=true"}} width="150" height="40" style="display:block;" alt="">  @endif
    @if ($data['tipo'] == 'emailForm')<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-info rounded shadow"><img class="mr-3" id="email" src={{"https://github.com/rianjd/forms-cda/blob/master/public/images/zimbra-black.png?raw=true"}} width="150" height="40" style="display:block;" alt="">  @endif

    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-4 mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 20 20">
                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
              </svg> Nova solicitação </h5>
        @if (isset($data['nome']))<div class="text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Nome: </strong>{{$data['nome'] }}</p></div></div>@endif
        @if (isset($data['cpf']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>CPF: </strong>{{$data['cpf'] }}</p></div></div>@endif
        @if (isset($data['setor']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Setor: </strong>{{$data['setor'] }}</p></div></div>@endif
        @if (isset($data['filial']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Filial: </strong>{{$data['filial'] }}</p></div></div>@endif
            @if (isset($data['user']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Filial: </strong>{{$data['user'] }}</p></div></div>@endif
        @if (isset($data['inDJ']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Incluir no DJ: </strong>{{$data['inDJ'] }}</p></div></div>@endif
        @if (isset($data['msg']))<div class="media text-muted pt-4">
            <div class="media-body pb-3 mb-0 med lh-125 border-bottom border-gray"><p><strong>Observações: </strong>{{$data['msg'] }}</p></div></div>@endif




<div class="text-center mt-3">
    @if ($data['tipo'] == 'chatForm')<button type="button" href="https://messenger.casasdaagua.com.br/signup_email?id=hrz53gtnrpyo3gux6pf1e9ierr" class="btn btn-primary btn-md">Clique aqui para criar</button> @endif
    @if ($data['tipo'] == 'coreForm')<button  href="https://core.casasdaagua.com.br" type="button" class="btn btn-secondary btn-md">Clique aqui para criar</button>@endif
    @if ($data['tipo'] == 'djForm')<button type="button" href="http://wiki.casasdaagua.com.br/index.php/PROCEDIMENTOS_DE_SUPORTE" class="btn btn-primary btn-md">Clique aqui para criar</button> @endif
    @if ($data['tipo'] == 'emailForm')<button  href="https://zimbra1.lupainformatica.com.br:7071/zimbraAdmin/" type="button" class="btn btn-info btn-md">Clique aqui para criar</button>@endif
</div>
</div>
