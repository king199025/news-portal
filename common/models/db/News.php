<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property integer $dt_add
 * @property integer $dt_update
 * @property string $slug
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['text'], 'string'],
            [['dt_add', 'dt_update'], 'integer'],
            [['title', 'img', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок новости',
            'text' => 'Текст новости',
            'img' => 'Изображение',
            'dt_add' => 'Dt Add',
            'dt_update' => 'Dt Update',
            'slug' => 'Slug',
        ];
    }
}
