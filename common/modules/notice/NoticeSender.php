<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 02.12.2016
 * Time: 22:15
 */

namespace common\modules\notice;


use common\classes\Debug;
use common\modules\notice\types\Email;

class NoticeSender
{

    public static function sendNotice($new_id,$types){
        if(!empty($types)){
            foreach($types as $type){
                $type = '\common\modules\notice\types\\' . $type;
                $notice = new $type;
                $notice->send($new_id);
            }
        }
    }

}