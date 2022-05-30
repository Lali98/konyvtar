<?php
include_once('Application.php');

class Books extends Application
{
    private $sql = array(
        'allBooks' => 'select b.id, b.title, a.name  as "author", group_concat(c.name separator ", ") as "category" from books b left join authors a on b.author_id = a.id left join books_categories bc on b.id = bc.book_id left join categories c on bc.category_id = c.id group by b.title',
        'booksByCategory' => 'select b.title, a.name as "author", group_concat(c.name separator ", ") as "category" from books b left join authors a on b.author_id = a.id left join books_categories bc on b.id = bc.book_id left join categories c on bc.category_id = c.id where c.id = {id} group by b.title',
        'bookById' => 'select b.id, b.title, b.lang, b.page_size, b.release_date, a.name  as "author", group_concat(c.name separator ", ") as "category" from books b left join authors a on b.author_id = a.id left join books_categories bc on b.id = bc.book_id left join categories c on bc.category_id = c.id where b.id = {id} group by b.title'
    );

    public function __construct()
    {
        parent::__construct();

        // debug($this->getResultList('select * from library.books'));
    }

    public function getBooks(): array
    {
        $books = $this->getResultList($this->sql['allBooks']);
        return $books;
    }

    public function getBooksCategory($categoryId): array
    {
        if (!$this->isValidId($categoryId))
        {
            return array();
        }
        $params = array(
            '{id}' => $categoryId
        );
        $books = $this->getResultList(strtr($this->sql['booksByCategory'], $params));
        return $books;
    }

    public function getBookId($id)
    {
        if (!$this->isValidId($id))
        {
            return array();
        }
        $params = array(
            '{id}' => $id
        );
        $books = $this->getSingleResult(strtr($this->sql['bookById'], $params));
        return $books;
    }
}