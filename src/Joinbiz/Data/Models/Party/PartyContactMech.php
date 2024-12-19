<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $contact_mech_id
 * @property string $from_date
 * @property string $role_type_id
 * @property string $thru_date
 * @property string $allow_solicitation
 * @property string $extension
 * @property string $verified
 * @property string $comments
 * @property float $years_with_contact_mech
 * @property float $months_with_contact_mech
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContactMech $contactMech
 * @property Party $party
 * @property RoleType $roleType
 */
class PartyContactMech extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'party_contact_mech';

    /**
     * @var array
     */
    protected $fillable = ['role_type_id', 'thru_date', 'allow_solicitation', 'extension', 'verified', 'comments', 'years_with_contact_mech', 'months_with_contact_mech', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMech()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id', 'role_type_id');
    }
}
