<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 29.11.2016
 * Time: 12:24
 */

namespace frontend\modules\news\models;


use common\classes\Settings;
use yii\data\ActiveDataProvider;

class News extends \common\models\db\News
{
    public function search()
    {
        $query = News::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => Settings::get('count_news'),
            ]
        ]);

        return $dataProvider;
    }
}