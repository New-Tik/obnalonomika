<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $title;?>

<div class="row">
    <div id="content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>numbers</h1>
                <ul class="breadcrumb">
                    <li><a href="/admin/default/index"><i class="fa fa-home fa-lg"></i></a></li>
                    <li><a href="/admin/default/number_list">Список numbers</a></li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            
            <?php $form = ActiveForm::begin();?>
            
            <div class="col-6">        
                <?=$form->field($number, 'number')->textInput();?>
            </div>
            <div class="col-6">
                <?=$form->field($number, 'password')->textInput();?>
            </div>
            <div class="col-6">
                <?=$form->field($number, 'status')->dropDownList(['0' => 'Відключен','1' => 'Активний',]);?>
            </div>
            <div class="col-12">
                <?= Html::submitButton('Зберегти', ['class' => 'btn btn-success']);?>
                <a href="/admin/default/number_list" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Отменить">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
            
            <?php ActiveForm::end();?>           
            
        </div>
    </div>
</div>
