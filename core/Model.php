<?php


namespace app\core;


abstract class Model
{
    public const RULE_REQUIRED  = "required";
    public const RULE_EMAIL  = "email";
    public const RULE_MIN  = "min";
    public const RULE_MAX  = "max";
    public const RULE_MATCH  = "match";
    public function loadData($data)
    {
        print "<hr/>";
        echo " In mode";
        var_dump($data);
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                //{$key } will help to create variables in the current Model object dynamically.
                $this->{$key} = value;
            }
        }
    }

    abstract public function rules():array;

    public function validate()
    {
        foreach ($this->rules() as $attribute => $rules ){
            $value = $this->{$attribute};
            foreach ($rules as $rule){

            }

        }
    }

}