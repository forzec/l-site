<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "castle".
 *
 * @property integer $id
 * @property string $name
 * @property integer $tax_percent
 * @property string $treasury
 * @property integer $town_id
 * @property string $last_siege_date
 * @property string $own_date
 * @property string $siege_date
 */
class Castle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'castle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'tax_percent', 'town_id', 'last_siege_date', 'own_date', 'siege_date'], 'required'],
            [['id', 'tax_percent', 'treasury', 'town_id', 'last_siege_date', 'own_date', 'siege_date'], 'integer'],
            [['name'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'tax_percent' => 'Tax Percent',
            'treasury' => 'Treasury',
            'town_id' => 'Town ID',
            'last_siege_date' => 'Last Siege Date',
            'own_date' => 'Own Date',
            'siege_date' => 'Siege Date',
        ];
    }
}
