<?php
include_once('Application.php');

class Categories extends Application
{
    private $sql = array(
        'allCategories' => 'select * from categories;'
    );

    public function __construct()
    {
        parent::__construct();
    }

    public function getCategories(): array
    {
        return $this->getResultList($this->sql['allCategories']);
    }
}