<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $Id_dosen
 * @property string $Nama
 * @property string $NIP
 * @property string $NIDN
 * @property string $Pangkat
 * @property string $Jabatan
 * @property string $Unit_Kerja
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama', 'NIP', 'NIDN', 'Pangkat', 'Jabatan', 'Unit_Kerja'], 'required'],
            [['Nama', 'NIP', 'NIDN', 'Pangkat', 'Jabatan', 'Unit_Kerja'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_dosen' => 'Id Dosen',
            'Nama' => 'Nama',
            'NIP' => 'Nip',
            'NIDN' => 'Nidn',
            'Pangkat' => 'Pangkat',
            'Jabatan' => 'Jabatan',
            'Unit_Kerja' => 'Unit Kerja',
        ];
    }
}
