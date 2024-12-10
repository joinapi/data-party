<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $communication_event_id
 * @property string $party_id
 * @property string $role_type_id
 * @property string $contact_mech_id
 * @property string $status_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ContactMech $contactMech
 * @property CommunicationEvent $communicationEvent
 * @property Party $party
 * @property StatusItem $statusItem
 */
class CommunicationEventRole extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'communication_event_role';

    /**
     * @var array
     */
    protected $fillable = ['contact_mech_id', 'status_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function communicationEvent()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\CommunicationEvent', 'communication_event_id', 'communication_event_id');
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
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\StatusItem', 'status_id', 'status_id');
    }
}
