<?php
require_once '../includes/funcoes.php';
require_once '../core/conexao_mysql.php';
require_once '../core/sql.php';
require_once '../core/mysql.php';

insert_teste ('10', 'ta otimo', 1 ,  2 ,'1996-03-01 20:05:56');
buscar_teste();
update_teste(1, '7', 'bom até', 1 , 2,'1996-03-04 21:09:14');
buscar_teste();
delete_teste(7);

//Teste inserção banco de dados
function insert_teste($nota, $comentario, $usuario_id, $post_id, $data_criacao): void{

    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id' => $usuario_id, 'post_id' => $post_id, 'data_criacao' => $data_criacao]; 
    insere ('avaliacao', $dados);
}

//Teste select banco de dados
function buscar_teste(): void{
    $avaliacoes = buscar('avaliacao',['id', 'nota', 'comentario', 'usuario_id', 'post_id','data_criacao'], [], '');
    print_r($avaliacoes);
}

//Teste update banco de dados
function update_teste($id, $nota, $comentario, $usuario_id, $post_id, $data_criacao): void{

    $dados = ['nota' => $nota, 'comentario' => $comentario, 'usuario_id' => $usuario_id, 'post_id' => $post_id, 'data_criacao' => $data_criacao];
    $criterio = [['id', '=', $id]];
    atualiza('avaliacao', $dados, $criterio);
}

function delete_teste($id):void{
    $criterio = [['id','=',$id]];
    deleta('avaliacao',$criterio);
}


?>