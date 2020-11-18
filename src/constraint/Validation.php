<?php

namespace App\src\constraint;

use App\config\Parameter;

class Validation{
    public function validate(Parameter $data, string $name){
        $classValidationName = ucfirst($name).'Validation';
        $this->createValidateClass($classValidationName, $data);
    }
    public function createValidateClass($classValidationName, $data){
        $classValidtion = new $classValidationName;
        $errors = $classValidtion->check($data);
        return $errors;
    }
}