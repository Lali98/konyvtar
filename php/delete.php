<?php
include_once('Books.php');
include_once('Categories.php');
include_once('Author.php');


switch ($_GET['t'])
{
    case 'books':
        $books = new Books();
        $res = $books->delete(intval($_GET['id']));

        if (!$res)
        {
            echo 'Hiba a könyv tölése során: ' . $_GET['id'];
        }

        break;
    case 'authors':
        $author = new Author();
        $res = $author->delete(intval($_GET['id']));

        if (!$res)
        {
            echo 'Hiba a szerző tölése során: ' . $_GET['id'];
        }
        break;

    case 'categories':
        $categories = new Categories();
        $res = $categories->delete(intval($_GET['id']));

        if (!$res)
        {
            echo 'Hiba a kategoria tölése során: ' . $_GET['id'];
        }
        break;

    default:
        break;
}

if ($res)
{
    header('Location: ../admin/index.php');
}
