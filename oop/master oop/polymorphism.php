<?php
/*
polymorphisim
-abstract method can't have implementation 
*/
interface DBconnects
{
    public function getAllUsers();
    public function getArticles();
    public function showStats();
}
class Mysql implements DBconnects
{
    public function getAllUsers()
    {
        echo "select * from users";
    }
    public function getArticles()
    {
        echo "select * from articles";
    }
    public function showStats()
    {
        echo "select * from stats";
    }
}


class Oracle implements DBconnects
{
    public function getAllUsers()
    {
        echo "hello  from users";
    }
    public function getArticles()
    {
        echo "hello  from articles";
    }
    public function showStats()
    {
        echo "hello  from stats";
    }
}

$row = new Mysql();
$row->getAllUsers();
$row->getArticles();
$row->showStats();
echo "<pre>";
print_r($row);
echo "</pre>";