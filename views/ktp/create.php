<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ktp */

$this->title = 'Create Ktp';
$this->params['breadcrumbs'][] = ['label' => 'Ktps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ktp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
