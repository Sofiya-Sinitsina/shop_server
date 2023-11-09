<?php

namespace app\models;

use helpers\ActiveRecord;
use Yii;
use yii\base\NotSupportedException;
use yii\validators\EmailValidator;
use yii\validators\NumberValidator;
use yii\validators\StringValidator;

/**
 * class Users
 * @package app\models
 * @
 * @property string $login
 * @property string $email
 * @property string $password
 * @property double $card_num
 * @property string $auth_key
 */
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
//    public $id;
//    public $username;
//    public $password;
//    public $authKey;
//    public $accessToken;

    public static function collectionName(): string
    {
        return 'user';
    }

//    private static $users = [
//        '100' => [
//            'id' => '100',
//            'username' => 'admin',
//            'password' => 'admin',
//            'authKey' => 'test100key',
//            'accessToken' => '100-token',
//        ],
//        '101' => [
//            'id' => '101',
//            'username' => 'demo',
//            'password' => 'demo',
//            'authKey' => 'test101key',
//            'accessToken' => '101-token',
//        ],
//    ];
    public function attributes(): array
    {
        return [
            '_id',
            'login',
            'email',
            'password',
            'card_num',
            'auth_key'
        ];
    }

    public function rules(): array
    {
        return [
            [['login'], StringValidator::class],
            [['login'], 'string', 'max'=>60],
            [['email'], EmailValidator::class],
            [['password'], StringValidator::class, 'min'=>8],
            [['card_num'], NumberValidator::class]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null): \yii\web\IdentityInterface|static|null
    {
//        foreach (self::$users as $user) {
//            if ($user['accessToken'] === $token) {
//                return new static($user);
//            }
//        }
//
//        return null;
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $login
     * @return static|null
     */
    public static function findByUsername(string $login): static
    {
        return static::findOne(['login'=>$login]);
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return (string)$this->_id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey(): ?string
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($auth_key): ?bool
    {
        return $this->auth_key === $auth_key;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password): bool
    {
        return Yii::$app->security->validatePassword($password,$this->password_hash);
        //return $this->password === $password;
    }

    public function setPassword($password): void
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function beforeSave($insert): bool
    {
        if(parent::beforeSave($insert)){
            if($this->isNewRecord){
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }
}
