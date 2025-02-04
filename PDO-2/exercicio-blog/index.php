<?php
    require 'exercicio-blog.php';

    $post = new Blog();
    
    switch($_GET['operacao']) {

        case 'list':
            echo '<h3>Posts: </h3>';

            foreach ($post->list() as $value) {
                echo 'Id: ' . $value['id'] . '<br> Texto do Post: ' . $value['txtblog'] . '<hr>';
            }
            break;

        case 'insert':

            $status = $post->insert('Post Teste do Everton Rafael');

            if(!$status) {
                echo "Não foi possivel executar a operação!";
                return false;
            }

            echo "Registro inserido com sucesso!";

            break;

        case 'update':
            $status = $post->update('Post Alterado do Everton Rafael', 4);

            if(!$status) {
                echo "Não foi possivel executar a operação!";
                return false;
            }

            echo "Post atualizado com sucesso!";

            break;

        case 'delete':
            
            $status = $post->delete(3);
            
            if(!$status) {
                echo "Não foi possivel executar a operação!";
                return false;
            }

            echo "Post removido com sucesso!";


            break;
    }
?>