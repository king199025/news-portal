<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 27.11.2016
 * Time: 17:49
 */

namespace common\classes;



class Settings
{
    public static function get($key) {
        $s = \common\models\db\Settings::find()->where(['key' => $key])->one();
        return $s->value;
    }
}