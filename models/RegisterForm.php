<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public $username;
    public $password;
    public $email;

    public function rules()
    {
        return[
            [['username','password','email'], 'required'],
            ['username','string','min' => 3,'max' => 255],
            ['username', 'unique', 'targetClass' => 'app\models\User'],
            ['password','string','min' => 6,'max' => 16],
            ['email','string','min' => 7,'max' => 100],
        ];
    }

    public function register(){
        $model = new User();
        $model->username = $this->username;
        $model->password = Yii::$app->security->generatePasswordHash($this->password);
        $model->email = $this->email;
        $model->status = 1;
        if ($model->save()){
            return true;
        }else{
            debug($model->errors);
        }
    }
}