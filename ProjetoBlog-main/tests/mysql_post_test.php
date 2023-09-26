<?php
require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

insert_teste ('Prova', 'coisa linda dms', 1,'1996-03-01 20:30:50');
buscar_teste();
update_teste(1, 'Topzera', 'coisa feia', 1, '1996-03-01 20:30:50');
buscar_teste();

//Teste inserção banco de dados
function insert_teste($titulo, $texto, $usuario_id, $data_postagem): void{

    $dados = ['titulo' => $titulo, 'texto' => $texto, 'usuario_id' => $usuario_id, 'data_postagem' => $data_postagem]; 
    insere ('post', $dados);
}

//Teste select banco de dados
function buscar_teste(): void{
    $post = buscar('post',['id', 'titulo', 'texto','usuario_id','data_postagem'], [], '');
    print_r($post);
}

//Teste update banco de dados

function update_teste($id, $nome, $email): void{

    $dados = ['nome' => $nome, 'email' => $email];
    $criterio = [['id', '=', $id]];
    atualiza('usuario', $dados, $criterio);
}



?>