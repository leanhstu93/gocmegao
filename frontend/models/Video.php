<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $source
 * @property int $date_create
 * @property int $user_id
 * @property int $status
 * @property int $option
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source', 'date_create', 'user_id', 'status', 'option'], 'required'],
            [['date_create', 'user_id', 'status', 'option'], 'integer'],
            [['source'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source' => 'Source',
            'date_create' => 'Date Create',
            'user_id' => 'User ID',
            'status' => 'Status',
            'option' => 'Option',
        ];
    }
}
