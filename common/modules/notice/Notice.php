<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 02.12.2016
 * Time: 21:38
 */

namespace common\modules\notice;


interface Notice
{

    public function send($new_id);

    public function getType();

}