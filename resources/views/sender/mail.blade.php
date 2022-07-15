@if ($data['tipo'] == 'chatForm')<h2> Novo Chat:</h2>@endif
@if ($data['tipo'] == 'coreForm')<h2> Novo usuario Core:</h2>@endif
@if ($data['tipo'] == 'djForm')<h2> Novo usuario DJ:</h2>@endif
@if ($data['tipo'] == 'emailForm')<h2> Criar novo email:</h2>@endif

@if (isset($data['nome']))<p><strong>Nome: </strong>{{$data['nome'] }}</p>@endif
@if (isset($data['cpf']))<p><strong>CPF: </strong>{{$data['cpf'] }}</p>@endif
@if (isset($data['setor']))<p><strong>Setor: </strong>{{$data['setor'] }}</p>@endif
@if (isset($data['filial']))<p><strong>Filial: </strong>{{$data['filial'] }}</p>@endif
@if (isset($data['user']))<p><strong>Filial: </strong>{{$data['user'] }}</p>@endif
@if (isset($data['inDJ']))<p><strong>Incluir no DJ: </strong>{{$data['inDJ'] }}</p>@endif
@if (isset($data['msg']))<p><strong>Observações: </strong>{{$data['msg'] }}</p>@endif



@if ($data['tipo'] == 'chatForm')<p>Clique<a href="https://messenger.casasdaagua.com.br/signup_email?id=hrz53gtnrpyo3gux6pf1e9ierr"> AQUI </a> para criar um novo usuario. </p>@endif
@if ($data['tipo'] == 'coreForm')<p>Clique<a href="https://core.casasdaagua.com.br"> AQUI </a> para criar um novo usuario. </p>@endif

