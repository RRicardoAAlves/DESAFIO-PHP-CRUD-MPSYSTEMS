<h1>Alterar aluno</h1>

<?php

$sql = "SELECT * FROM alunos WHERE id=".$_REQUEST["id"];

$res = $conn->query($sql);

$row = $res->fetch_object();

?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id  ?>">

    <div>
        <label for="">Nome:</label>
        <input type="text" name=nome value="<?php print $row->nome  ?>">
    </div>

    <div>
        <label for="">Matricula:</label>
        <input type="number" name=matricula value="<?php print $row->matricula  ?>">
    </div>

    <div>
        <label for="">Data de nascimento:</label>
        <input type="date" name=data_nasc value="<?php print $row->data_nasc  ?>">
    </div>

    <div>
        <label for="">Idade:</label>
        <input type="number" name=idade value="<?php print $row->idade  ?>">
    </div>

    <div>
        <label for="">Situação:</label>
        <input type="text" name=situacao value="<?php print $row->situacao  ?>">
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>











</form>