<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 05.12.2016
 * Time: 12:31
 * @var $news \common\models\db\News
 */
?>
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <?php if(count($news) > 1): ?>
        На сайте появились новые статьи
    <?php else: ?>
        Новая статья <?= \yii\helpers\Html::a($news[0]->title,['/news/default/view', 'slug'=>$news[0]->slug]) ?>
    <?php endif ?>
</div>
