<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_relationship_type_id
 * @property string $parent_type_id
 * @property string $role_type_id_valid_from
 * @property string $role_type_id_valid_to
 * @property string $has_table
 * @property string $party_relationship_name
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PartyRelationshipType $partyRelationshipTypeByParentTypeId
 * @property RoleType $roleTypeByRoleTypeIdValidFrom
 * @property RoleType $roleTypeByRoleTypeIdValidTo
 * @property PartyRelationship[] $partyRelationships
 */
class PartyRelationshipType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'party_relationship_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'party_relationship_type_id';

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
    protected $fillable = ['parent_type_id', 'role_type_id_valid_from', 'role_type_id_valid_to', 'has_table', 'party_relationship_name', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyRelationshipTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyRelationshipType', 'parent_type_id', 'party_relationship_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleTypeByRoleTypeIdValidFrom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id_valid_from', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleTypeByRoleTypeIdValidTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id_valid_to', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRelationships()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyRelationship', 'party_relationship_type_id', 'party_relationship_type_id');
    }
}
