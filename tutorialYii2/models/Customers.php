<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $customer_Id
 * @property string $customer_name
 * @property integer $customer_phone
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_phone'], 'integer'],
            [['customer_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_Id' => 'Customer  ID',
            'customer_name' => 'Customer Name',
            'customer_phone' => 'Customer Phone',
        ];
    }
}
