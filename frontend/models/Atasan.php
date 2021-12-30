<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atasan".
 *
 * @property int $Id_atasan
 * @property string $Nama
 * @property string $Pangkat
 * @property string $NIP
 * @property string $Jabatan
 * @property string $Unit_Kerja
 */
class Atasan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atasan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'Pangkat', 'NIP', 'Jabatan', 'Unit_Kerja'], 'required'],
            [['Nama', 'Pangkat', 'NIP', 'Jabatan', 'Unit_Kerja'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_atasan' => 'Id Atasan',
            'Nama' => 'Nama',
            'NIP' => 'Nip',
            'Pangkat' => 'Pangkat',
            'Jabatan' => 'Jabatan',
            'Unit_Kerja' => 'Unit Kerja',
        ];
    }
}
