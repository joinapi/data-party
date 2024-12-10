<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $term_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property BillingAccountTerm[] $billingAccountTerms
 * @property AgreementTerm[] $agreementTerms
 * @property TermType $termTypeByParentTypeId
 * @property InvoiceTerm[] $invoiceTerms
 * @property QuoteTerm[] $quoteTerms
 * @property OrderTerm[] $orderTerms
 * @property TermTypeAttr[] $termTypeAttrs
 */
class TermType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'term_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'term_type_id';

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
    protected $fillable = ['parent_type_id', 'has_table', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccountTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\BillingAccountTerm', 'term_type_id', 'term_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementTerm', 'term_type_id', 'term_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function termTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\TermType', 'parent_type_id', 'term_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InvoiceTerm', 'term_type_id', 'term_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\QuoteTerm', 'term_type_id', 'term_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderTerm', 'term_type_id', 'term_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function termTypeAttrs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\TermTypeAttr', 'term_type_id', 'term_type_id');
    }
}
