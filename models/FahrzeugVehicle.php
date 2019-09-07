<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fahrzeug_vehicle".
 *
 * @property int $nr_inside_id
 * @property string $fin_vehicle_number
 * @property string $alte_nr_old_insite_number
 * @property string $modell_car_model
 * @property string $herstellungsjahr_manufacturing_jear
 * @property string $verkaufsstatus_sale_state
 * @property string $bilder_images
 * @property string $sonstiges_other
 */
class FahrzeugVehicle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fahrzeug_vehicle';
    }
     /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nr_inside_id', 'fin_vehicle_number', 'alte_nr_old_insite_number', 'modell_car_model', 'herstellungsjahr_manufacturing_jear', 'verkaufsstatus_sale_state', 'bilder_images'], 'required'],
            [['nr_inside_id'], 'integer'],
            [['modell_car_model', 'verkaufsstatus_sale_state', 'bilder_images', 'sonstiges_other'], 'string'],
            [['herstellungsjahr_manufacturing_jear'], 'safe'],
            [['fin_vehicle_number', 'alte_nr_old_insite_number'], 'string', 'max' => 15],
            [['fin_vehicle_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nr_inside_id' => 'Nr Inside ID',
            'fin_vehicle_number' => 'Fin Vehicle Number',
            'alte_nr_old_insite_number' => 'Alte Nr Old Insite Number',
            'modell_car_model' => 'Modell Car Model',
            'herstellungsjahr_manufacturing_jear' => 'Herstellungsjahr Manufacturing Jear',
            'verkaufsstatus_sale_state' => 'Verkaufsstatus Sale State',
            'bilder_images' => 'Bilder Images',
            'sonstiges_other' => 'Sonstiges Other',
        ];
    }
}
