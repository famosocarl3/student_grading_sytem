<?php 

namespace Famoso\Gs\Model;
use Famoso\Gs\Core\Crud;
class StudentModel implements Crud{
    public int $id;
    public string $name;
    public string $course;
    public int $year_level;

    public function create(){
    }
    public function read(){
    }
    public function update(){
    }
    public function delete(){
    }
}