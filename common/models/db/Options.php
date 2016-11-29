<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "options".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $notify_email
 * @property integer $notify_browser
 */
class Options extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'options';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'notify_email', 'notify_browser'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'notify_email' => 'Notify Email',
            'notify_browser' => 'Notify Browser',
        ];
    }
}
