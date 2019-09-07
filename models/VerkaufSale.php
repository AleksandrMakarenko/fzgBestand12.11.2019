<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "verkauf_sale".
 *
 * @property int $verkaufsnummer_sale_id
 * @property string $fin_vehicle_id
 * @property string $verkaufsdatum_sale_date
 * @property string $kaeufersname_customersname
 * @property string $nettopreis_net_price
 * @property string $mws_value_added_tax
 * @property string $bruttopreis_gross_price
 * @property string $gewinn_profit
 * @property string $zahlungsmethode_payment_method
 * @property string $zahlungsdatum_payment_date
 * @property string $sonstiges_other
 */
class VerkaufSale extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'verkauf_sale';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['verkaufsnummer_sale_id', 'fin_vehicle_id', 'verkaufsdatum_sale_date', 'kaeufersname_customersname', 'nettopreis_net_price', 'mws_value_added_tax', 'bruttopreis_gross_price', 'gewinn_profit', 'zahlungsmethode_payment_method', 'zahlungsdatum_payment_date', 'sonstiges_other'], 'required'],
            [['verkaufsnummer_sale_id'], 'integer'],
            [['verkaufsdatum_sale_date', 'zahlungsdatum_payment_date'], 'safe'],
            [['kaeufersname_customersname', 'zahlungsmethode_payment_method', 'sonstiges_other'], 'string'],
            [['nettopreis_net_price', 'mws_value_added_tax', 'bruttopreis_gross_price', 'gewinn_profit'], 'number'],
            [['fin_vehicle_id'], 'string', 'max' => 15],
            [['verkaufsnummer_sale_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verkaufsnummer_sale_id' => 'Verkaufsnummer Sale ID',
            'fin_vehicle_id' => 'Fin Vehicle ID',
            'verkaufsdatum_sale_date' => 'Verkaufsdatum Sale Date',
            'kaeufersname_customersname' => 'Kaeufersname Customersname',
            'nettopreis_net_price' => 'Nettopreis Net Price',
            'mws_value_added_tax' => 'Mws Value Added Tax',
            'bruttopreis_gross_price' => 'Bruttopreis Gross Price',
            'gewinn_profit' => 'Gewinn Profit',
            'zahlungsmethode_payment_method' => 'Zahlungsmethode Payment Method',
            'zahlungsdatum_payment_date' => 'Zahlungsdatum Payment Date',
            'sonstiges_other' => 'Sonstiges Other',
        ];
    }
}
