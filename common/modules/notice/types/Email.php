<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 02.12.2016
 * Time: 21:43
 */

namespace common\modules\notice\types;

use common\modules\notice\Notice;
use Yii;
use yii\debug\models\search\Debug;

class Email extends Overall implements Notice
{

    public function send($new_id)
    {
        foreach($this->getRecipients() as $recipient){
            Yii::$app->mailer->compose('email',['new'=>$this->getNew($new_id)])
                ->setFrom('admin@domain.com')
                ->setTo($recipient->email)
                ->setSubject('Новость')
                ->send();
        }
    }

    public function getType()
    {
        return 'email';
    }

}