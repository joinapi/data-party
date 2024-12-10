<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $agreement_id
 * @property string $agreement_item_seq_id
 * @property string $agreement_item_type_id
 * @property string $currency_uom_id
 * @property string $agreement_text
 * @property string $agreement_image
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Agreement $agreement
 * @property AgreementItemType $agreementItemType
 */
class AgreementItem extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agreement_item';

    /**
     * @var array
     */
    protected $fillable = ['agreement_item_type_id', 'currency_uom_id', 'agreement_text', 'agreement_image', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreement()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Agreement', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreementItemType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\AgreementItemType', 'agreement_item_type_id', 'agreement_item_type_id');
    }
}
