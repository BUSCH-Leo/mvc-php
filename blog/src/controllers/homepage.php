<?php

require_once('src/model/post.php'); // Mettez à jour ici

function homepage()
{
    $posts = getPosts();
    require('templates/homepage.php');
}