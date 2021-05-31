<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

  // public $table = "tasks";

  protected $fillable = [
    'title',
    'description',
    'employee_id'
  ];
}
