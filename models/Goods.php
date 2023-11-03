<?php

namespace app\models;

use yii\mongodb\ActiveRecord;
use yii\validators\NumberValidator;
use yii\validators\StringValidator;

class Goods extends ActiveRecord
{
    public static function collectionName(): string
    {
        return 'goods';
    }

    public function attributes(): array
    {
        return [
            '_id',
            'name',
            'category',
            'description',
            'price'
        ];
    }

    public function rules(): array
    {
        return [
            [['name'], StringValidator::class, 'max' => '255'],
            [['category'], StringValidator::class, 'max' => '50'],
            [['price'], NumberValidator::class]
        ];
    }
}