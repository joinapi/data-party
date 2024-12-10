<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id_from
 * @property string $party_id_to
 * @property string $role_type_id_from
 * @property string $role_type_id_to
 * @property string $from_date
 * @property string $status_id
 * @property string $security_group_id
 * @property string $priority_type_id
 * @property string $party_relationship_type_id
 * @property string $thru_date
 * @property string $relationship_name
 * @property string $permissions_enum_id
 * @property string $position_title
 * @property string $comments
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PriorityType $priorityType
 * @property SecurityGroup $securityGroupBySecurityGroupId
 * @property StatusItem $statusItem
 * @property PartyRelationshipType $partyRelationshipType
 */
class PartyRelationship extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'party_relationship';

    /**
     * @var array
     */
    protected $fillable = ['status_id', 'security_group_id', 'priority_type_id', 'party_relationship_type_id', 'thru_date', 'relationship_name', 'permissions_enum_id', 'position_title', 'comments', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function priorityType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PriorityType', 'priority_type_id', 'priority_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function securityGroupBySecurityGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\SecurityGroup', 'security_group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyRelationshipType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyRelationshipType', 'party_relationship_type_id', 'party_relationship_type_id');
    }
}
