<?php
$this->params['breadcrumbs'][]=['label'=>'Wine Reviews','url'=>['/wine-reviews']];
$this->params['breadcrumbs'][]=$wine_name;
?>
<h1>Review for Wine ID <?= $id ?> </h1>

<table class="table table-striped table-bordered">
    <tr>
        <td>Wine Name</td>
        <td><?=$wine_name ?></td>
    </tr>
    <tr>
        <td>Winery</td>
        <td><?=$winery?></td>
    </tr>
    <tr>
        <td>Type</td>
        <td><?=$type?></td>
    </tr>
</table>

<?php
echo $this->context->renderPartial('_advert');
?>