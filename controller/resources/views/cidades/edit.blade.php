<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cidade</title>
</head>
<body>

<form action="{{ route('cidades.update', $dados['id']) }}" method="POST">
   @csrf
   @method('PUT')
   <div class="alert alert-dark" role="alert" align="center">
        Gestão de Munícipios! <a href="{{route('cidades.index')}}" class="alert-link"> <br>TELA INICIAL</a>
   </div>

   <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Cidade</span>
        </div>
        <input type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default" name='nome' value='{{$dados['nome']}}'>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Opções</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name='porte' value='{{$dados['nome']}}'>
            <option value="Pequeno">Pequeno</option>
            <option value="Médio">Médio</option>
            <option value="Grande">Grande</option>
        </select>
    </div>

   
   <input type="submit" value="Salvar" class="btn btn-secondary">
</form>

</body>
</html>