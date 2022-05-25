<?php
include_once('Application.php');

class Books extends Application
{
    private $sql = array(
        'allBooks' => 'select b.title, a.name as "author", group_concat(c.name separator ", ") as "category" from books b left join authors a on b.author_id = a.id left join books_categories bc on b.id = bc.book_id left join categories c on bc.category_id = c.id group by b.title'
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
}