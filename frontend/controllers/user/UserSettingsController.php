<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 29.11.2016
 * Time: 14:40
 */

namespace frontend\controllers\user;


use common\classes\Debug;
use common\models\db\Options;
use dektrium\user\controllers\SettingsController;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class UserSettingsController extends SettingsController
{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'disconnect' => ['post'],
                    'delete'     => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow'   => true,
                        'actions' => ['profile', 'account', 'networks', 'disconnect', 'delete', 'options'],
                        'roles'   => ['@'],
                    ],
                    [
                        'allow'   => true,
                        'actions' => ['confirm'],
                        'roles'   => ['?', '@'],
                    ],
                ],
            ],
        ];
    }

    public function actionOptions(){
        $model = Options::find()->where(['user_id' => \Yii::$app->user->id])->one();

        if (\Yii::$app->request->post()) {
            $model->notify_email = \Yii::$app->request->post('notify_email');
            $model->notify_browser = \Yii::$app->request->post('notify_browser');
            $model->save();
        }
        return $this->render('options', ['model' => $model]);
    }
}