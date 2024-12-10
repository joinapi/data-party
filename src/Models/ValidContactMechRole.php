<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $role_type_id
 * @property string $contact_mech_type_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContactMechType $contactMechType
 * @property RoleType $roleType
 */
class ValidContactMechRole extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'valid_contact_mech_role';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMechType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMechType', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id', 'role_type_id');
    }
}
