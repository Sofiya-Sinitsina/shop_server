<?php

namespace app\models;

use yii\mongodb\ActiveRecord;
use yii\validators\BooleanValidator;
use yii\validators\NumberValidator;
use yii\validators\StringValidator;

class Basket extends ActiveRecord
{
    public static function collectionName(): string
    {
        return 'basket';
    }

    public function attributes(): array
    {
        return [
            ['_id'],
            ['user_name'],
            ['good_name'],
            ['amount'],
            ['price']
        ];
    }

    public function rules(): array
    {
        return [
            [['user_name'], StringValidator::class],
            [['good_name'], StringValidator::class],
            [['amount'], NumberValidator::class],
            [['price'], NumberValidator::class]
        ];
    }
}