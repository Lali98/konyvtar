<?php

include_once('Application.php');

class Author extends Application
{
    private $sql = array(
        'allAurhor' => 'select * from authors;'
    );
    public function __construct()
    {
        parent::__construct();
    }

    public function getAuthor(): array
    {
        return $this->getResultList($this->sql['allAurhor']);
    }

    public function delete($id)
    {
        if (!$this->isValidId($id))
        {
            return false;
        }
        return $this->deleteRecordById("books", $id);
    }
}