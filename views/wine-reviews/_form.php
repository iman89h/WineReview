<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WineReviews */
/* @var $form ActiveForm */
?>
<div class="wine-reviews-_form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'wine_name') ?>
        <?= $form->field($model, 'winery') ?>
        <?= $form->field($model, 'region') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- wine-reviews-_form -->
