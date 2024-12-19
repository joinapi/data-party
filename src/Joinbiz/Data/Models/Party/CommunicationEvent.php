<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $communication_event_id
 * @property string $communication_event_type_id
 * @property string $status_id
 * @property string $contact_mech_type_id
 * @property string $contact_mech_id_from
 * @property string $contact_mech_id_to
 * @property string $role_type_id_from
 * @property string $role_type_id_to
 * @property string $party_id_from
 * @property string $party_id_to
 * @property string $content_mime_type_id
 * @property string $reason_enum_id
 * @property string $contact_list_id
 * @property string $orig_comm_event_id
 * @property string $parent_comm_event_id
 * @property string $entry_date
 * @property string $datetime_started
 * @property string $datetime_ended
 * @property string $subject
 * @property string $content
 * @property string $note
 * @property string $header_string
 * @property string $from_string
 * @property string $to_string
 * @property string $cc_string
 * @property string $bcc_string
 * @property string $message_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CustRequestCommEvent[] $custRequestCommEvents
 * @property ContactListCommStatus[] $contactListCommStatuses
 * @property CommunicationEventWorkEff[] $communicationEventWorkEffs
 * @property CommunicationEventRole[] $communicationEventRoles
 * @property CommunicationEventReturn[] $communicationEventReturns
 * @property CommunicationEventPurpose[] $communicationEventPurposes
 * @property CommunicationEventProduct[] $communicationEventProducts
 * @property CommunicationEventOrder[] $communicationEventOrders
 * @property CommEventContentAssoc[] $commEventContentAssocs
 * @property ContactList $contactList
 * @property ContactMechType $contactMechType
 * @property ContactMech $contactMechByContactMechIdFrom
 * @property Party $partyByPartyIdFrom
 * @property RoleType $roleTypeByRoleTypeIdFrom
 * @property MimeType $mimeTypeByContentMimeTypeId
 * @property Enumeration $enumerationByReasonEnumId
 * @property StatusItem $statusItem
 * @property ContactMech $contactMechByContactMechIdTo
 * @property Party $partyByPartyIdTo
 * @property RoleType $roleTypeByRoleTypeIdTo
 * @property CommunicationEventType $communicationEventType
 * @property PartyNeed[] $partyNeeds
 * @property SubscriptionCommEvent[] $subscriptionCommEvents
 */
class CommunicationEvent extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'communication_event';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'communication_event_id';

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
    protected $fillable = ['communication_event_type_id', 'status_id', 'contact_mech_type_id', 'contact_mech_id_from', 'contact_mech_id_to', 'role_type_id_from', 'role_type_id_to', 'party_id_from', 'party_id_to', 'content_mime_type_id', 'reason_enum_id', 'contact_list_id', 'orig_comm_event_id', 'parent_comm_event_id', 'entry_date', 'datetime_started', 'datetime_ended', 'subject', 'content', 'note', 'header_string', 'from_string', 'to_string', 'cc_string', 'bcc_string', 'message_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestCommEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestCommEvent', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListCommStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListCommStatus', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventWorkEffs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\CommunicationEventWorkEff', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventRole', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventReturns()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CommunicationEventReturn', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventPurpose', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventProduct', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventOrders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CommunicationEventOrder', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commEventContentAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommEventContentAssoc', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactList()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Marketing\ContactList', 'contact_list_id', 'contact_list_id');
    }

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
    public function contactMechByContactMechIdFrom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMech', 'contact_mech_id_from', 'contact_mech_id');
    }

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
    public function roleTypeByRoleTypeIdFrom()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id_from', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mimeTypeByContentMimeTypeId()
    {
        return $this->belongsTo('\MimeType', 'content_mime_type_id', 'mime_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByReasonEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'reason_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusItem()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMechByContactMechIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMech', 'contact_mech_id_to', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyByPartyIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleTypeByRoleTypeIdTo()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id_to', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function communicationEventType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\CommunicationEventType', 'communication_event_type_id', 'communication_event_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNeeds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNeed', 'communication_event_id', 'communication_event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionCommEvents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SubscriptionCommEvent', 'communication_event_id', 'communication_event_id');
    }
}
