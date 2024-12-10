<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $agreement_id
 * @property string $product_id
 * @property string $party_id_from
 * @property string $party_id_to
 * @property string $role_type_id_from
 * @property string $role_type_id_to
 * @property string $agreement_type_id
 * @property string $agreement_date
 * @property string $from_date
 * @property string $thru_date
 * @property string $description
 * @property string $text_data
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property AgreementWorkEffortApplic[] $agreementWorkEffortApplics
 * @property AgreementTerm[] $agreementTerms
 * @property AgreementRole[] $agreementRoles
 * @property AgreementPartyApplic[] $agreementPartyApplics
 * @property AgreementGeographicalApplic[] $agreementGeographicalApplics
 * @property AgreementContent[] $agreementContents
 * @property AgreementAttribute[] $agreementAttributes
 * @property Addendum[] $addendums
 * @property AgreementItem[] $agreementItems
 * @property OrderItemShipGroup[] $orderItemShipGroupsBySupplierAgreementId
 * @property Product $product
 * @property AgreementType $agreementType
 */
class Agreement extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agreement';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'agreement_id';

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
    protected $fillable = ['product_id', 'party_id_from', 'party_id_to', 'role_type_id_from', 'role_type_id_to', 'agreement_type_id', 'agreement_date', 'from_date', 'thru_date', 'description', 'text_data', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementWorkEffortApplics()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementWorkEffortApplic', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementTerms()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementTerm', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementRole', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementPartyApplics()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementPartyApplic', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementGeographicalApplics()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementGeographicalApplic', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementContent', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementAttribute', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addendums()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Addendum', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementItem', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsBySupplierAgreementId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemShipGroup', 'supplier_agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Product', 'product_id', 'product_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreementType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\AgreementType', 'agreement_type_id', 'agreement_type_id');
    }
}
