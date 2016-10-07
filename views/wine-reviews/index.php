<h1>Wine Reviews list</h1>
<table class="table table-striped">
    <tr>
        <th>Wine name</th>
        <th>Winery</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($winesList as $wine) {

        $id = $wine['id'];

    ?>
        <tr>
            <td><?= $wine['wine_name'] ?></td>
            <td><?= $wine['winery'] ?></td>
            <td><a href="/wine-reviews/view?id=<?= $id ?>">
                    <span class="glyphicon glyphicon-glass" aria-hidden="true"></span>
                    view</a></td>
        </tr>
        <?php
    }
?>
</table>

<?php
$data['yourName']="Iman";
echo $this->context->renderPartial('_advert',$data);
?>