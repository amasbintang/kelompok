<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ktp".
 *
 * @property string $nik
 * @property string $nama
 * @property string $tempat
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $pekerjaan
 */
class Ktp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ktp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'tempat', 'tgl_lahir', 'alamat', 'jenis_kelamin', 'agama', 'pekerjaan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['jenis_kelamin', 'agama'], 'string'],
            [['nik', 'tempat', 'pekerjaan'], 'string', 'max' => 20],
            [['nama', 'alamat'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'nama' => 'Nama',
            'tempat' => 'Tempat',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'pekerjaan' => 'Pekerjaan',
        ];
    }
}
