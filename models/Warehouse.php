<?php

namespace app\models;

use yii\mongodb\ActiveRecord;
use yii\validators\NumberValidator;
use yii\validators\StringValidator;

class Warehouse extends ActiveRecord
{
    public static function collectionName(): string
    {
        return 'warehouse';
    }

    public function attributes(): array
    {
        return [
            '_id',
            'number'
        ];
    }

    public function rules(): array
    {
        return [
            [['number'], NumberValidator::class]
        ];
    }
}