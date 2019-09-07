<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fzg_bestand".
 *
 * @property int $id
 * @property string $nr
 * @property string $ek_datum
 * @property string $modell
 * @property string $verkaeufer
 * @property string $fin
 * @property string $ek_netto_preis
 * @property string $ek_mwst
 * @property string $ek_brutto_preis
 * @property string $vk_datum
 * @property string $kaeufer
 * @property string $vk_netto_preis
 * @property string $vk_mwst
 * @property string $vk_brutto_preis
 * @property string $gewinn
 * @property string $sonstiges
 */
class FzgBestand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fzg_bestand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nr', 'ek_datum', 'modell', 'verkaeufer', 'fin', 'ek_netto_preis', 'ek_mwst', 'ek_brutto_preis', 'vk_datum', 'kaeufer', 'vk_netto_preis', 'vk_mwst', 'vk_brutto_preis', 'gewinn'], 'required'],
            [['id'], 'integer'],
            [['ek_datum', 'vk_datum'], 'safe'],
            [['modell', 'verkaeufer', 'kaeufer', 'sonstiges'], 'string'],
            [['ek_netto_preis', 'ek_mwst', 'ek_brutto_preis', 'vk_netto_preis', 'vk_mwst', 'vk_brutto_preis', 'gewinn'], 'number'],
            [['nr', 'fin'], 'string', 'max' => 15],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nr' => 'Nr',
            'ek_datum' => 'Ek Datum',
            'modell' => 'Modell',
            'verkaeufer' => 'Verkaeufer',
            'fin' => 'Fin',
            'ek_netto_preis' => 'Ek Netto Preis',
            'ek_mwst' => 'Ek Mwst',
            'ek_brutto_preis' => 'Ek Brutto Preis',
            'vk_datum' => 'Vk Datum',
            'kaeufer' => 'Kaeufer',
            'vk_netto_preis' => 'Vk Netto Preis',
            'vk_mwst' => 'Vk Mwst',
            'vk_brutto_preis' => 'Vk Brutto Preis',
            'gewinn' => 'Gewinn',
            'sonstiges' => 'Sonstiges',
        ];
    }
}
