<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "einkauf_purchase".
 *
 * @property int $nr_insite_id
 * @property string $verkaeufersname_vendor_name
 * @property string $einkaufsdatum_purchase_date
 * @property string $fin_vehicle_id
 * @property string $netto_preis_net_price
 * @property string $mws_value_added_tax
 * @property string $brutto_preis_gross_price
 * @property string $bezahlungsdatum_pay_date
 * @property string $zahlungsmethode_payment_method
 * @property string $sonstiges_other
 */
class EinkaufPurchase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'einkauf_purchase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nr_insite_id', 'verkaeufersname_vendor_name', 'einkaufsdatum_purchase_date', 'fin_vehicle_id', 'netto_preis_net_price', 'mws_value_added_tax', 'brutto_preis_gross_price', 'bezahlungsdatum_pay_date', 'zahlungsmethode_payment_method', 'sonstiges_other'], 'required'],
            [['nr_insite_id'], 'integer'],
            [['verkaeufersname_vendor_name', 'zahlungsmethode_payment_method', 'sonstiges_other'], 'string'],
            [['einkaufsdatum_purchase_date', 'bezahlungsdatum_pay_date'], 'safe'],
            [['netto_preis_net_price', 'mws_value_added_tax', 'brutto_preis_gross_price'], 'number'],
            [['fin_vehicle_id'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nr_insite_id' => 'Nr Insite ID',
            'verkaeufersname_vendor_name' => 'Verkaeufersname Vendor Name',
            'einkaufsdatum_purchase_date' => 'Einkaufsdatum Purchase Date',
            'fin_vehicle_id' => 'Fin Vehicle ID',
            'netto_preis_net_price' => 'Netto Preis Net Price',
            'mws_value_added_tax' => 'Mws Value Added Tax',
            'brutto_preis_gross_price' => 'Brutto Preis Gross Price',
            'bezahlungsdatum_pay_date' => 'Bezahlungsdatum Pay Date',
            'zahlungsmethode_payment_method' => 'Zahlungsmethode Payment Method',
            'sonstiges_other' => 'Sonstiges Other',
        ];
    }
}
