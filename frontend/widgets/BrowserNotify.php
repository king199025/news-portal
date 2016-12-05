<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 05.12.2016
 * Time: 11:35
 */

namespace frontend\widgets;


use common\classes\Debug;
use common\models\db\News;
use common\models\db\Options;
use Yii;
use yii\base\Widget;

class BrowserNotify extends Widget
{

    public function run()
    {
        if(Yii::$app->user->isGuest === false){
            $opt = Options::find()->where(['user_id'=>Yii::$app->user->id])->one();
            $last_visit = $opt->last_visit;
            $opt->last_visit = time();
            $opt->save();

            if($opt->notify_browser == 1){
                $news = News::find()->where(['>','dt_add', $last_visit])->all();
                if(!empty($news)){
                    return $this->render('browser_notify', [
                        'news' => $news,
                    ]);
                }
            }
        }
    }

}