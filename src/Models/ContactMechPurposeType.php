<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_mech_purpose_type_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FacilityContactMechPurpose[] $facilityContactMechPurposes
 * @property InvoiceContactMech[] $invoiceContactMeches
 * @property ContactMechTypePurpose[] $contactMechTypePurposes
 * @property ReturnContactMech[] $returnContactMeches
 * @property OrderContactMech[] $orderContactMeches
 * @property OrderItemContactMech[] $orderItemContactMeches
 * @property PartyContactMechPurpose[] $partyContactMechPurposes
 */
class ContactMechPurposeType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_mech_purpose_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'contact_mech_purpose_type_id';

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
    protected $fillable = ['description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContactMechPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FacilityContactMechPurpose', 'contact_mech_purpose_type_id', 'contact_mech_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InvoiceContactMech', 'contact_mech_purpose_type_id', 'contact_mech_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMechTypePurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactMechTypePurpose', 'contact_mech_purpose_type_id', 'contact_mech_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ReturnContactMech', 'contact_mech_purpose_type_id', 'contact_mech_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderContactMech', 'contact_mech_purpose_type_id', 'contact_mech_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemContactMech', 'contact_mech_purpose_type_id', 'contact_mech_purpose_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContactMechPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContactMechPurpose', 'contact_mech_purpose_type_id', 'contact_mech_purpose_type_id');
    }
}
