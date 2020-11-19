<?php

namespace frontend\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "form".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property int $date
 * @property string $desc
 * @property int $status
 */
class Form extends \yii\db\ActiveRecord
{
    const STATUS_APPROVED = 3;
    const STATUS_UNAPPROVED = 1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'status', 'province_id'], 'integer'],
            [['desc'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 12],
            [['email'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Họ tên',
            'phone' => 'Điện thoại',
            'email' => 'Email',
            'date' => 'Ngày',
            'desc' => 'Tin nhắn',
            'status' => 'Trạng thái',
            'province_id' => 'Tỉnh thành',
        ];
    }

    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }

    public function search($params) {
        $query = self::find()->joinWith(['province']);

        $dataProvider = new ActiveDataProvider([
            'query'=>$query,
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]]
        ]);


        if (!($this->load($params))) {

            return $dataProvider;
        }

        $query->andFilterWhere([
            'id'=>$this->id,
            'name'=>$this->name,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'date'=>$this->date,
            'desc'=>$this->desc,
            'status'=>$this->status,
            'province_id' => $this->province_id,
        ]);
        // filter by order amount

        return $dataProvider;
    }

    /**
     * @return array
     */
    public static function listStatus()
    {
        return [
            self::STATUS_APPROVED => 'Đã duyệt',
            self::STATUS_UNAPPROVED => 'Chưa duyệt',
        ];
    }
}
