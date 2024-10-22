<?php
// src/controllers/add_comment.php
require_once('src/model/comment.php');

function addComment(string $post, array $input)
{
    if (empty($input['author']) || empty($input['comment'])) {
        die('Les données du formulaire sont invalides.');
    }

    $author = $input['author'];
    $comment = $input['comment'];

    $success = createComment($post, $author, $comment);

    if (!$success) {
        die('Impossible d\'ajouter le commentaire !');
    }

    header('Location: index.php?action=post&id=' . $post);
    exit(); // Toujours bon d'ajouter exit après un header redirection
}