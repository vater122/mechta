<h1>Регистрация</h1>
<?php
use \yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['class' => 'form-horizontal']); ?>

<?= $form->field($model, 'mail')->textInput(['autofocus' => true])->hint('Введите ваш E-mail')->label('E-mail') ?>

<?= $form->field($model, 'password')->passwordInput()->hint('Введите ваш пароль')->label('Пароль') ?>

    <div>
       <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </div>

<?php ActiveForm::end(); ?>