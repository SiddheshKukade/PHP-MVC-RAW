<?php


namespace app\models;


use app\core\Model;

class RegisterModel extends Model
{
    public $name, $email, $password, $passwordConfirm;

    public function register()
    {
        echo "new";
    }

    public function validate()
    {
    }

    public function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_EMAIL, self::RULE_REQUIRED],
            "password" => [self::RULE_REQUIRED , [self::RULE_MIN , 'min'=>8] , [self::RULE_MAX , 'max'=>15]],
            "passwordConfirm" => [self::RULE_REQxUIRED, [self::RULE_MATCH , "match"=>"password"]]];
    }
}