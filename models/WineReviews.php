<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wine_reviews".
 *
 * @property integer $id
 * @property string $wine_name
 * @property string $winery
 * @property string $region
 */
class WineReviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wine_reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wine_name', 'winery', 'region'], 'required'],
            [['wine_name', 'winery', 'region'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wine_name' => 'Wine Name',
            'winery' => 'Winery',
            'region' => 'Region',
        ];
    }
}
