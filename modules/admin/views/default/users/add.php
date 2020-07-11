<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Редактор Користувачів'
?>

<h2>Додати Користувача</h2>
<?php $form = ActiveForm::begin();?>
<div class="row">
    <div class="col-6">        
        <?=$form->field($user, 'username')->textInput();?>
    </div>
    <div class="col-6">
        <?=$form->field($user, 'password')->textInput();?>
    </div>
    <div class="col-6">
        <?=$form->field($user, 'purse')->textInput();?>
    </div>
    <div class="col-6">
        <?=$form->field($user, 'status')->dropDownList([            
            '0' =>  'Відключен',
            '1' =>  'Активний',
            '2' =>  'Удален'
        ]);?>
    </div>
    
    <div class="col-12">
        <?= Html::submitButton('Зберегти', ['class' => 'btn btn-success']);?>
        <a href="/admin/default/user_list" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Отменить"><i class="fa fa-reply"></i></a>
    </div>
</div>
<?php ActiveForm::end();?>