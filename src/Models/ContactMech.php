<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_mech_id
 * @property string $contact_mech_type_id
 * @property string $info_string
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PayPalPaymentMethod[] $payPalPaymentMethods
 * @property CommunicationEvent[] $communicationEventsByContactMechIdFrom
 * @property CommunicationEvent[] $communicationEventsByContactMechIdTo
 * @property Subscription[] $subscriptions
 * @property EftAccount[] $eftAccounts
 * @property FtpAddress $ftpAddress
 * @property GiftCard[] $giftCards
 * @property FacilityContactMech[] $facilityContactMeches
 * @property CheckAccount[] $checkAccounts
 * @property CustRequest[] $custRequestsByFulfillContactMechId
 * @property FacilityContactMechPurpose[] $facilityContactMechPurposes
 * @property InvoiceContactMech[] $invoiceContactMeches
 * @property ContactMechType $contactMechType
 * @property CreditCard[] $creditCards
 * @property ContactMechLink[] $contactMechLinksByContactMechIdFrom
 * @property ContactMechLink[] $contactMechLinksByContactMechIdTo
 * @property ContactMechAttribute[] $contactMechAttributes
 * @property ContactListParty[] $contactListPartiesByPreferredContactMechId
 * @property ContactListCommStatus[] $contactListCommStatuses
 * @property ReturnContactMech[] $returnContactMeches
 * @property RespondingParty[] $respondingParties
 * @property OrderContactMech[] $orderContactMeches
 * @property OrderItemContactMech[] $orderItemContactMeches
 * @property CommunicationEventRole[] $communicationEventRoles
 * @property ShipmentContactMech[] $shipmentContactMeches
 * @property PartyContactMech[] $partyContactMeches
 * @property PartyContactMechPurpose[] $partyContactMechPurposes
 * @property ShoppingList[] $shoppingLists
 * @property ReturnHeader[] $returnHeadersByOriginContactMechId
 * @property OrderItemShipGroup[] $orderItemShipGroups
 * @property OrderItemShipGroup[] $orderItemShipGroupsByTelecomContactMechId
 * @property PostalAddress $postalAddress
 * @property TelecomNumber $telecomNumber
 * @property BillingAccount[] $billingAccounts
 * @property Invoice[] $invoices
 * @property WorkEffortEventReminder[] $workEffortEventReminders
 * @property WorkEffortContactMechNew[] $workEffortContactMechNews
 */
class ContactMech extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_mech';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'contact_mech_id';

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
    protected $fillable = ['contact_mech_type_id', 'info_string', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payPalPaymentMethods()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PayPalPaymentMethod', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventsByContactMechIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'contact_mech_id_from', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventsByContactMechIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'contact_mech_id_to', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Subscription', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eftAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\EftAccount', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ftpAddress()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\FtpAddress', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function giftCards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\GiftCard', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FacilityContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checkAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CheckAccount', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByFulfillContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CustRequest', 'fulfill_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContactMechPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FacilityContactMechPurpose', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InvoiceContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMechType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMechType', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditCards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CreditCard', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMechLinksByContactMechIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactMechLink', 'contact_mech_id_from', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMechLinksByContactMechIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactMechLink', 'contact_mech_id_to', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactMechAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactMechAttribute', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListPartiesByPreferredContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactListParty', 'preferred_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListCommStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactListCommStatus', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ReturnContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respondingParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\RespondingParty', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventRole', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ShipmentContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContactMechPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContactMechPurpose', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppingLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ShoppingList', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByOriginContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ReturnHeader', 'origin_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemShipGroup', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsByTelecomContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemShipGroup', 'telecom_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function postalAddress()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\PostalAddress', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function telecomNumber()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\TelecomNumber', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\BillingAccount', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Invoice', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortEventReminders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\WorkEffortEventReminder', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortContactMechNews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\WorkEffortContactMechNew', 'contact_mech_id', 'contact_mech_id');
    }
}
