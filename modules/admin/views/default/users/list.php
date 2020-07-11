<?
$this->title = 'Список Користувачів';
?>
<div id="container">

    <nav id="column-left">

        

    </nav>

    <div id="content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="pull-right">
                    <a href="" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Додати">
                        <i class="fa fa-plus"></i>
                    </a> 
                    <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" 
                            onclick="confirm('Данное действие необратимо. Вы уверены?') ? $('#form-category').submit() : false;" 
                            data-original-title="Удалить">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </div>
                <h1>Користувачі</h1>
                <ul class="breadcrumb">
                    <li><a href=""><i class="fa fa-home fa-lg"></i></a></li>
                    <li><a href="">Список Користувачів</a></li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i>Список Користувачів</h3>
                </div>
                <div class="panel-body">

                    <form action="" method="post" enctype="multipart/form-data" id="form-category">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td style="width: 1px;" class="text-center">
                                            <input type="checkbox" 
                                                onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                                        <td class="text-left">                    
                                            Користувачі
                                        </td>
                                        <td class="text-right">Действие</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <? foreach ($users as $user) {?>
                                    <tr>
                                        <td class="text-center">                    
                                            <input type="checkbox" name="selected[]" value="308">
                                        </td>
                                        <td class="text-left"><?=$user['username'];?></td>                                        
                                        <td class="text-right">
                                            <a href="/admin/default/user_edit/<?=$user['id'];?>" 
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
                    </form>
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