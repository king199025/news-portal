
<div class="row">
    <?= \yii\widgets\ListView::widget(
        [
            'dataProvider' => $dataProvider,
            'itemView' => '_list',

            'layout' => "{items}{pager}",
        ]
    )?>
</div>