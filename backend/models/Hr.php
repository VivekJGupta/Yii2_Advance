<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hr".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $password
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $is_active
 *
 * @property Clients[] $clients
 */
class Hr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['created_at', 'updated_at', 'is_active'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_active' => 'Is Active',
        ];
    }

    /**
     * Gets query for [[Clients]].
     *
     * @return \yii\db\ActiveQuery|\backend\models\query\ClientsQuery
     */
    public function getClients()
    {
        return $this->hasMany(Clients::className(), ['hr_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \backend\models\query\HrQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\models\query\HrQuery(get_called_class());
    }
}
