<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 03.12.2016
 * Time: 12:11
 */

namespace common\modules\notice\types;


use common\modules\notice\Notice;

class Tel extends Overall implements Notice
{

    public function send($new_id)
    {
        // TODO: Implement send() method.
    }

    public function getType()
    {
        return 'tel';
    }

}