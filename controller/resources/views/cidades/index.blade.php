<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>

<div class="alert alert-dark" role="alert" align="center">
        Gestão de Munícipios! <a href="{{route('cidades.create')}}" class="alert-link"> <br>CADASTRAR CIDADE</a>
   </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>PORTE</th>
                <th>EDITAR</th>
                <th>REMOVER</th>
            </tr>
        </thead>
        <tbody>
       @foreach ($cidades as $i)
           <tr>
               <td>{{ $i['id'] }}</td>
               <td>{{ $i['nome'] }}</td>
               <td>{{ $i['porte'] }}</td>
               <td><a type="button" class="btn btn-success" href="{{ route('cidades.edit', $i['id']) }}">EDITAR</a></td>
               <td>
                   <form action="{{ route('cidades.destroy', $i['id']) }}" method="POST">
                       @csrf
                       @method('DELETE')
                       <input type='submit' value='REMOVER' type="button" class="btn btn-danger">
                   </form>
               </td>
           </tr>
       @endforeach
   </tbody>
    </table>
</body>
</html>