<?php

require_once('src/model/comment.php');
require_once('src/lib/database.php');

function addComment(string $post, array $input)
{
    $author = null;
    $comment = null;

    if (!empty($input['author']) && !empty($input['comment'])) {
        $author = $input['author'];
        $comment = $input['comment'];
    } else {
        throw new Exception('Les données du formulaire sont invalides.');
    }

    $databaseConnection = new DatabaseConnection();
    $commentRepository = new CommentRepository();
    $commentRepository->connection = $databaseConnection;

    $success = $commentRepository->createComment($post, $author, $comment);
    
    if (!$success) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $post);
    }
}
