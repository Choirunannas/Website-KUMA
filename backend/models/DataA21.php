<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_a21".
 *
 * @property int $id
 * @property string $pelaksanaan_pendidikan
 * @property string $angka_kredit
 * @property string $tempat
 * @property string $tanggal
 * @property string $keterangan
 */
class DataA21 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_a21';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pelaksanaan_pendidikan', 'angka_kredit', 'tempat', 'tanggal', 'keterangan'], 'required'],
            [['pelaksanaan_pendidikan'], 'string', 'max' => 1000],
            [['angka_kredit', 'tempat', 'tanggal', 'keterangan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pelaksanaan_pendidikan' => 'Pelaksanaan Pendidikan',
            'angka_kredit' => 'Angka Kredit',
            'tempat' => 'Tempat',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
        ];
    }
}
