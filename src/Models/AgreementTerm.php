<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $agreement_term_id
 * @property string $term_type_id
 * @property string $agreement_id
 * @property string $agreement_item_seq_id
 * @property string $invoice_item_type_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $term_value
 * @property float $term_days
 * @property string $text_value
 * @property float $min_quantity
 * @property float $max_quantity
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property AgreementTermAttribute[] $agreementTermAttributes
 * @property Agreement $agreement
 * @property InvoiceItemType $invoiceItemType
 * @property TermType $termType
 */
class AgreementTerm extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agreement_term';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'agreement_term_id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['term_type_id', 'agreement_id', 'agreement_item_seq_id', 'invoice_item_type_id', 'from_date', 'thru_date', 'term_value', 'term_days', 'text_value', 'min_quantity', 'max_quantity', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementTermAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementTermAttribute', 'agreement_term_id', 'agreement_term_id');
    }

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
    public function invoiceItemType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\InvoiceItemType', 'invoice_item_type_id', 'invoice_item_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function termType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\TermType', 'term_type_id', 'term_type_id');
    }
}
