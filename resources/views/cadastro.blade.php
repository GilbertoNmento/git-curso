
<H1>Cadastro de jogos</H1> <hr>

<form action="{{route('jogo.criar')}}" method="POST">
@csrf
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" placeholder="Digite o nome do jogo"> <br><br>

    <label for="categoria">Categoria:</label>
    <input type="text" id="categoria" name="categoria" placeholder="Digite a categoria do jogo"><br><br>

    <label for="ano_criacao">Ano de criação</label>
    <input type="text" id="ano_criacao" name="ano_criacao" placeholder="Digite o ano de criação"><br><br>

    <label for="Valor">valor</label>
    <input type="text" id="valor" name="valor" placeholder="Digite o valor"><br><br>
    
    <input type="submit">

</form>