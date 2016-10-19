<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ComStatus */

$this->title = 'แก้ไขข้อมูล: ' . $model->com_status_id;
$this->params['breadcrumbs'][] = ['label' => 'แก้ไขข้อมูล', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->com_status_id, 'url' => ['view', 'id' => $model->com_status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="com-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
