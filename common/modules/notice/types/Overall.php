<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 02.12.2016
 * Time: 21:48
 */

namespace common\modules\notice\types;


use common\models\db\News;
use common\models\User;


class Overall
{

    public function getNew($id)
    {
        return News::findOne(['id' => $id]);
    }

    public function getRecipients()
    {
        $users = User::find()
            ->leftJoin('options', '`options`.`user_id` = `user`.`id`')
            ->where(['`options`.`notify_'.$this->getType().'`' => 1])
            ->all();
        return $users;
    }

    public function getType(){}

}