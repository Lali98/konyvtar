<?php
include_once('Books.php');
include_once('Author.php');

switch ($_GET['t'])
{
    case 'books':
        $books = new Books();
        $res = $books->delete(intval($_GET['id']));

        if (!$res)
        {
            echo 'Hiba';
        }

        break;
    case 'authors':
        $author = new Author();

        $res = $author->delete(intval($_GET['id']));

        if (!$res)
        {
            echo 'Hiba';
        }
        break;

    default:
        break;
}
