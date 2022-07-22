<?php
switch($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome= $_POST["nome"];
        $email= $_POST["email"];
        $senha= md5($_POST["senha"]);
        $data_nasc= $_POST["data_nasc"];

        $sql= "INSERT INTO usuario1 (nome,email,senha,data_nasc) values('{$nome}','{$email}','{$senha}','{$data_nasc}')";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastrado com Sucesso!!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possivel cadastrar!!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }

    break;    
    case 'editar':
        $nome= $_POST["nome"];
        $email= $_POST["email"];
        $senha= md5($_POST["senha"]);
        $data_nasc= $_POST["data_nasc"];
        
        $sql="UPDATE usuario1 SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editado com Sucesso!!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possivel Editar!!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
    break;    
    case 'excluir':  
        $sql="DELETE FROM usuario1 WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Excluído com Sucesso!!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possivel Excluir!!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
    break;    

}
    

?>