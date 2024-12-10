<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_invitation_id
 * @property string $party_id_to
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PartyGroup $partyGroupByPartyIdTo
 * @property PartyInvitation $partyInvitation
 * @property Party $partyByPartyIdTo
 */
class PartyInvitationGroupAssoc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'party_invitation_group_assoc';

    /**
     * @var array
     */
    protected $fillable = ['last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyGroupByPartyIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyGroup', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyInvitation()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyInvitation', 'party_invitation_id', 'party_invitation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByPartyIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id_to', 'party_id');
    }
}
