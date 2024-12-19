<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_invitation_id
 * @property string $party_id_from
 * @property string $status_id
 * @property string $party_id
 * @property string $to_name
 * @property string $email_address
 * @property string $last_invite_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $partyByPartyIdFrom
 * @property StatusItem $statusItem
 * @property PartyInvitationGroupAssoc[] $partyInvitationGroupAssocs
 * @property PartyInvitationRoleAssoc[] $partyInvitationRoleAssocs
 */
class PartyInvitation extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'party_invitation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'party_invitation_id';

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
    protected $fillable = ['party_id_from', 'status_id', 'party_id', 'to_name', 'email_address', 'last_invite_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByPartyIdFrom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyInvitationGroupAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyInvitationGroupAssoc', 'party_invitation_id', 'party_invitation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyInvitationRoleAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyInvitationRoleAssoc', 'party_invitation_id', 'party_invitation_id');
    }
}
