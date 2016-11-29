<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Настройки';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>
<div class="row">
    <div class="col-md-3">
        <?= $this->render('_menu') ?>
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Html::encode($this->title) ?>
            </div>
            <div class="panel-body">
                <?= Html::beginForm(); ?>

                <div>
                    <?= Html::label('Получать уведомления по email')?>
                    <?= Html::checkbox('notify_email', $model->notify_email); ?>
                </div>
                <div>
                    <?= Html::label('Получать уведомления в браузере')?>
                    <?= Html::checkbox('notify_browser', $model->notify_browser); ?>
                </div>

                <div>
                    <?= Html::submitButton('Сохранить',['class' => 'btn btn-success'])?>
                </div>

                <?= Html::endForm(); ?>
            </div>
        </div>
    </div>
</div>