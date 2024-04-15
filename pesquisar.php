<h1>Pesquisar aluno</h1>

<?php

$sql = "SELECT * FROM alunos";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {

    print "<table>";

    print "<tr>";

    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>Matricula</th>";
    print "<th>Data de nascimento</th>";
    print "<th>Idade</th>";
    print "<th>Situação</th>";

    print "</tr>";



    while ($row = $res->fetch_object()) {


        print "<tr>";

        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->nome . "</td>";
        print "<td>" . $row->matricula . "</td>";
        print "<td>" . $row->data_nasc . "</td>";
        print "<td>" . $row->idade . "</td>";
        print "<td>" . $row->situacao . "</td>";

        print "<td>

        <button onclick=\" location.href='?page=editar&id=" . $row->id . " ';\">Editar</button>

        <button onclick=\" if(confirm('Tem certeza que deseja excluir?')){ location.href='?page=salvar&acao=excluir&id=".$row->id." ';} else{false;}  \">Excluir</button>
        
        
       </td>";




        print "</tr>";
    }



    print "</table>";
} else {
    print "<p>Não encontramos resultados!!!</p>";
}




?>