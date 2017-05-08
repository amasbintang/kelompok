<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ktp */

$this->title = 'Update Ktp: ' . $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Ktps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nik, 'url' => ['view', 'id' => $model->nik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ktp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
