<?php
$this->title = '修改规则';
$this->params['breadcrumbs'] = \backend\components\Tools::buildBreadcrumbs($this,$this->title);
?>

<div class="panel panel-default">
    <div class="panel-heading">修改规则</div>
    <div class="panel-body">
        <?= $this->render('_form',['model'=>$model])?>
    </div>
</div>