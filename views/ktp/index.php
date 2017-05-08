<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KtpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ktp';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ktp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ktp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nik',
            'nama',
            'tempat',
            'tgl_lahir',
            'alamat',
            // 'jenis_kelamin',
            // 'agama',
            // 'pekerjaan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
