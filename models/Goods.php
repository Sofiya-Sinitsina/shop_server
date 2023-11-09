<?php

namespace app\models;

use MongoDB\BSON\ObjectId;
use yii\mongodb\ActiveRecord;
use yii\validators\NumberValidator;
use yii\validators\StringValidator;
/**
 *class Goods
 *@package app\models
 * @property ObjectId $_id
 * @property string $name
 * @property string $category
 * @property string $description
 * @property int $price
 */
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
            [['name', 'description'], StringValidator::class, 'max' => '255'],
            [['category'], StringValidator::class, 'max' => '50'],
            [['price'], NumberValidator::class]
        ];
    }
}