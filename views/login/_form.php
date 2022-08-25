<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="Login-form">

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'f_name')->textInput([]) ?>

    <?= $form->field($model, 'm_name')->textInput([]) ?>

    <?= $form->field($model, 'l_name')->textInput([]) ?>

    <?= $form->field($model, 'desig')->textInput([]) ?>

    <?= $form->field($model, 'mo_no')->textInput([]) ?>

    <?= $form->field($model, 'dis')->textInput([]) ?>

    <?= $form->field($model, 'tal')->textInput([]) ?>

    <?= $form->field($model, 'gha')->textInput([]) ?>

    <?= $form->field($model, 'email')->textInput([]) ?>

    <?= $form->field($model, 'pass')->textInput([]) ?>

    <?= $form->field($model, 'profile_picture')->fileInput() ?>

    <?= $form->field($model, 'isdeleted')->textInput() ?>

    <?= $form->field($model, 'isactive')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>