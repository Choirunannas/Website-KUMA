<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_a11".
 *
 * @property int $id
 * @property string $pendidikan
 * @property string $angka_kredit
 * @property string $tempat
 * @property string $tanggal
 * @property string $keterangan
 */
class DataA11 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_a11';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendidikan', 'angka_kredit', 'tempat', 'tanggal', 'keterangan'], 'required'],
            [['pendidikan', 'angka_kredit', 'tempat', 'tanggal', 'keterangan'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pendidikan' => 'Pendidikan',
            'angka_kredit' => 'Angka Kredit',
            'tempat' => 'Tempat',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
        ];
    }
}
