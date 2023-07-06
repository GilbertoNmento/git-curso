<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Listagem</h1>
    <table>
        <tr>
          <th>Id</th><hr> 
          <th>Nomedo jogo</th>
          <th>categoria</th>
          <th>Ano de criação</th>
          <th>Valor</th>
          <th>....</th>
          
        </tr>
        @foreach ($jogos as $jogo)
        <tr>
            <th>{{$jogo->id}}</th> 
            <th>{{$jogo->nome}}</th>
            <th>{{$jogo->categoria}}</th>
            <th>{{$jogo->ano_criacao}}</th>
            <th>{{$jogo->valor}}</th>
            
            <th> 
                <a href="{{route('jogos-edit', ['id'=>$jogo->id])}}">Edit</a>
            
                <form action="{{route('jogos-destroy', ['id'=>$jogo->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <BUTton type="submit">Deletar</BUTton>
                </form>
            
            </th>
          </tr>
            
        
        @endforeach

        
      </table>
    <br>
           <button  ><a href="/cadastro">Cadastrar</a></button>
    
</body>
</html>