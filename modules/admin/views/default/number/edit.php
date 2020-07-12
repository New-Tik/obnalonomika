<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Редактор number';?>

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
                <?=$form->field($number, 'status')->dropDownList([            
                    '0' =>  'Відключен',
                    '1' =>  'Активний',
                ]);?>
            </div>
            <div class="col-12">
                <?= Html::submitButton('Зберегти', ['class' => 'btn btn-success']);?>
                <a href="/admin/default/number_list" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Отменить">
                    <i class="fa fa-reply"></i>
                </a>
            </div>
            
            <?php ActiveForm::end();?>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i>История пополнений</h3>
                </div>
                <div class="panel-body">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>                                    
                                    <td class="text-left">                    
                                        numbers
                                    </td>
                                    <td class="text-right"></td>
                                </tr>
                            </thead>
                            <tbody>
                                <? foreach ($numbers as $number) {?>
                                <tr>
                                    <td class="text-center">                    
                                        <input type="checkbox" name="selected[]" value="308">
                                    </td>
                                    <td class="text-left"><?=$number['id'];?></td>                                        
                                    <td class="text-right">
                                        <a href="/admin/default/number_edit/<?=$number['id'];?>" 
                                           data-toggle="tooltip" title="" class="btn btn-primary" 
                                           data-original-title="Редактировать">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>   
                                <? } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="">2</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">Показано с 1 по 20 из 540 (страниц: 27)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
