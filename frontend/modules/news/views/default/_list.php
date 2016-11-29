<?php
?>


<div class="col-xs-3">
    <a href="<?= \yii\helpers\Url::to(['/news/default/view', 'slug' => $model['slug']])?>">
        <img src="<?= $model['img']; ?>" alt="">
        <span><?= $model['title']; ?></span>
    </a>
</div>