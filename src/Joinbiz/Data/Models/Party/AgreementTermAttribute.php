<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $agreement_term_id
 * @property string $attr_name
 * @property string $attr_value
 * @property string $attr_description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property AgreementTerm $agreementTerm
 */
class AgreementTermAttribute extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'agreement_term_attribute';

    /**
     * @var array
     */
    protected $fillable = ['attr_value', 'attr_description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreementTerm()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\AgreementTerm', 'agreement_term_id', 'agreement_term_id');
    }
}
