<?php

require_once('src/model/post.php'); // Mettez à jour ici
require_once('src/model/comment.php');

function post(string $identifier)
{
    $post = getPost($identifier);
    $comments = getComments($identifier);
    require('templates/post.php');
}