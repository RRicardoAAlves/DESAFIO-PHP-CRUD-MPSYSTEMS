<h1>Cadastrar aluno</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    

    <div>
        <label for="">Nome:</label>
        <input type="text" name=nome >
    </div>

    <div>
        <label for="">Matricula:</label>
        <input type="number" name=matricula >
    </div>

    <div>
        <label for="">Data de nascimento:</label>
        <input type="date" name=data_nasc >
    </div>

    <div>
        <label for="">Idade:</label>
        <input type="number" name=idade >
    </div>

    <div>
        <label for="">Situação:</label>
        <input type="text" name=situacao >
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>