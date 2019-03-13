<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.03.2019
 * Time: 22:57
 */

class TaskController
{
  public $create_date;
  public $exp_date;
  public $title;
  public $task;
  public $user_id;

  public function action()
  {
    $currentUserId = $_COOKIE['user'];

    $table = 'tasks';
    $tasks = Model::getRows($table, 'user_id', $currentUserId, 'Task');
    $this->template = 'tasks';
    View::render($this->template, $currentUser, $tasks);
  }

}