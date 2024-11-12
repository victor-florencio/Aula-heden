<?php
    include "functions.php";
    conectarDB(
        'localhost',
        'root',
        '',
        'escola'
    );

    if(isset($_POST['cadastrar'])){
        $id = time();
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];
        $transporte_escolar = $_POST['transporte_escolar'];
        $esportes = $_POST['esportes'];  
        
        $sql = "INSERT INTO aluno VALUES('$id','$nome','$curso','$transporte_escolar')";
        executarSQL($sql);
        $ano = date('Y',time());
        foreach($esportes as $e){
            if($e == "futsal"){
                $sql  = "INSERT INTO aluno_esporte";
                $sql .= "(ano,id_aluno,id_esporte)";
                $sql .= "VALUES ('$ano','$id',1)";
                executarSQL($sql);
            }
            if($e == "volei"){
                $sql  = "INSERT INTO aluno_esporte";
                $sql .= "(ano,id_aluno,id_esporte)";
                $sql .= "VALUES ('$ano','$id',2)";
                executarSQL($sql);
            }
            if($e == "basquete"){
                $sql  = "INSERT INTO aluno_esporte";
                $sql .= "(ano,id_aluno,id_esporte)";
                $sql .= "VALUES ('$ano','$id',3)";
                executarSQL($sql);
            }
        }
        header("Location:index.php");
    }
?>