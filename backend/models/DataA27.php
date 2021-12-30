<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_a27".
 *
 * @property int $id
 * @property string $pelaksana_pendidikan
 * @property string $angka_kredit
 * @property string $tempat
 * @property string $tanggal
 * @property string $keterangan
 */
class DataA27 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_a27';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pelaksana_pendidikan', 'angka_kredit', 'tempat', 'tanggal', 'keterangan'], 'required'],
            [['pelaksana_pendidikan'], 'string', 'max' => 1000],
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
            'pelaksana_pendidikan' => 'Pelaksana Pendidikan',
            'angka_kredit' => 'Angka Kredit',
            'tempat' => 'Tempat',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
        ];
    }
}
