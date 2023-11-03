<?php

namespace app\models;

use yii\mongodb\ActiveRecord;
use yii\validators\BooleanValidator;
use yii\validators\NumberValidator;
use yii\validators\StringValidator;

class Orders extends ActiveRecord
{
    public static function collectionName(): string
    {
        return 'order';
    }

    public function attributes(): array
    {
        return [
            ['_id'],
            ['order_number'],
            ['good_name'],
            ['user_name'],
            ['paid']
        ];
    }

    public function rules(): array
    {
        return [
            [['order_number'], NumberValidator::class],
            [['good_name'], StringValidator::class],
            [['user_name'], StringValidator::class],
            [['paid'], BooleanValidator::class]
        ];
    }
}