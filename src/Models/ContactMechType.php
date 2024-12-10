<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_mech_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CommunicationEvent[] $communicationEvents
 * @property CommunicationEventType[] $communicationEventTypes
 * @property ContactList[] $contactLists
 * @property ContactMechTypePurpose[] $contactMechTypePurposes
 * @property ContactMechTypeAttr[] $contactMechTypeAttrs
 * @property ContactMechType $contactMechTypeByParentTypeId
 * @property ContactMech[] $contactMeches
 * @property ValidContactMechRole[] $validContactMechRoles
 */
class ContactMechType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_mech_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'contact_mech_type_id';

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
    public function communicationEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventType', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactList', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMechTypePurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactMechTypePurpose', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMechTypeAttrs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactMechTypeAttr', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMechTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMechType', 'parent_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactMech', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function validContactMechRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ValidContactMechRole', 'contact_mech_type_id', 'contact_mech_type_id');
    }
}
