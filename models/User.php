<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class User extends CommonModel implements \yii\web\IdentityInterface
{
    public $newPassword;

    public function rules()
    {
        return [
            [['username','password','email','avatar','full_name','address','newPassword'],'string'],
            [['status'],'integer']
        ];
    }

    public static function tableName(){
        return 'user';
    }


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::find()->all() as $user) {
            if (strcasecmp($user->username, $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
//    public function validatePassword($password)
//    {
//        return Yii::$app->getSecurity()->validatePassword($password,$this->password);
//    }

    public static function getCount()
    {
        return self::find()->count();
    }

    public function validatePassword($password)
    {
//                echo Yii::$app->security->generatePasswordHash('123456');die;
        return Yii::$app->getSecurity()->validatePassword($password,$this->password);
    }




}
