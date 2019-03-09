<?php

class Task
{
    public $createDate;
    public $expirationDate;
    public $content;

    public function viewTask($dir)
    {
        $files = DBtxt::dir($dir);
        foreach($files as $file){
            $content = DBtxt::load($dir, $file);
            $item = explode("|", $content);
           // echo $content . '<br>';

           var_dump($item);
        }

    }

    public function allTask($dir)
    {
        $files = DBtxt::dir($dir);
        return $files;
    }

    public function addTask($path, $file, $date, $title, $expirationDate, $content)
    {
        DBtxt::save($path, $file, $date, $title, $expirationDate, $content);
    }

}