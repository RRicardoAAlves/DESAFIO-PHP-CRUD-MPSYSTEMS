<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $data_nasc = $_POST['data_nasc'];
        $idade = $_POST['idade'];
        $situacao = $_POST['situacao'];

        $sql = "INSERT INTO alunos (nome, matricula, data_nasc, idade, situacao) VALUES ('{$nome}', '{$matricula}', '{$data_nasc}', '{$idade}', '{$situacao}')";

        $res = $conn->query($sql);

        if ($res == true) {

            print "<script>alert('Cadastrado com sucesso');</script>";

            print "<script>location.href='?page=pesquisar';</script>";
        } else {

            print "<script>alert('Não foi possivel cadastrar!!!');</script>";

            print "<script>location.href='?page=pesquisar';</script>";
        }




        break;

    case 'editar':
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $data_nasc = $_POST['data_nasc'];
        $idade = $_POST['idade'];
        $situacao = $_POST['situacao'];



        $sql = "UPDATE alunos SET nome='{$nome}', matricula='{$matricula}', data_nasc='{$data_nasc}', idade='{$idade}', situacao='{$situacao}' WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {

            print "<script>alert('Alterado com sucesso');</script>";

            print "<script>location.href='?page=pesquisar';</script>";
        } else {

            print "<script>alert('Não foi possivel alterar!!!');</script>";

            print "<script>location.href='?page=pesquisar';</script>";
        }




        break;

        case 'excluir':
           
    
    
    
            $sql = "DELETE FROM alunos WHERE id=" . $_REQUEST["id"];
    
            $res = $conn->query($sql);
    
            if ($res == true) {
    
                print "<script>alert('Excluido com sucesso');</script>";
    
                print "<script>location.href='?page=pesquisar';</script>";
            } else {
    
                print "<script>alert('Não foi possivel excluir!!!');</script>";
    
                print "<script>location.href='?page=pesquisar';</script>";
            }
    
    
    
    
            break;
}
