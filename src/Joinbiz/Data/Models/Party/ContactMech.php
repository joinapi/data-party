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
 * @property ShoppingList[] $shoppingLists
 * @property FacilityContactMech[] $facilityContactMeches
 * @property PostalAddress $postalAddress
 * @property BillingAccount[] $billingAccounts
 * @property CustRequest[] $custRequestsByFulfillContactMechId
 * @property CreditCard[] $creditCards
 * @property FacilityContactMechPurpose[] $facilityContactMechPurposes
 * @property OrderContactMech[] $orderContactMeches
 * @property ContactMechLink[] $contactMechLinksByContactMechIdFrom
 * @property ContactMechLink[] $contactMechLinksByContactMechIdTo
 * @property ContactMechAttribute[] $contactMechAttributes
 * @property OrderItemContactMech[] $orderItemContactMeches
 * @property ContactListParty[] $contactListPartiesByPreferredContactMechId
 * @property ContactListCommStatus[] $contactListCommStatuses
 * @property CommunicationEventRole[] $communicationEventRoles
 * @property FtpAddress $ftpAddress
 * @property CommunicationEvent[] $communicationEventsByContactMechIdFrom
 * @property CommunicationEvent[] $communicationEventsByContactMechIdTo
 * @property GiftCard[] $giftCards
 * @property CheckAccount[] $checkAccounts
 * @property PartyContactMech[] $partyContactMeches
 * @property PartyContactMechPurpose[] $partyContactMechPurposes
 * @property ContactMechType $contactMechType
 * @property InvoiceContactMech[] $invoiceContactMeches
 * @property Subscription[] $subscriptions
 * @property EftAccount[] $eftAccounts
 * @property PayPalPaymentMethod[] $payPalPaymentMethods
 * @property ReturnContactMech[] $returnContactMeches
 * @property RespondingParty[] $respondingParties
 * @property ShipmentContactMech[] $shipmentContactMeches
 * @property ReturnHeader[] $returnHeadersByOriginContactMechId
 * @property OrderItemShipGroup[] $orderItemShipGroups
 * @property OrderItemShipGroup[] $orderItemShipGroupsByTelecomContactMechId
 * @property TelecomNumber $telecomNumber
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
    public function shoppingLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ShoppingList', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function postalAddress()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\PostalAddress', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\BillingAccount', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByFulfillContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequest', 'fulfill_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditCards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\CreditCard', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityContactMechPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityContactMechPurpose', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderContactMech', 'contact_mech_id', 'contact_mech_id');
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
    public function orderItemContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListPartiesByPreferredContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListParty', 'preferred_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListCommStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListCommStatus', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventRole', 'contact_mech_id', 'contact_mech_id');
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
    public function giftCards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GiftCard', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checkAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\CheckAccount', 'contact_mech_id', 'contact_mech_id');
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMechType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMechType', 'contact_mech_type_id', 'contact_mech_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eftAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\EftAccount', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payPalPaymentMethods()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PayPalPaymentMethod', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respondingParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\RespondingParty', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentContactMech', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByOriginContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnHeader', 'origin_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroups()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemShipGroup', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsByTelecomContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemShipGroup', 'telecom_contact_mech_id', 'contact_mech_id');
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
    public function invoices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Invoice', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortEventReminders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortEventReminder', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortContactMechNews()
    {
        return $this->hasMany('\WorkEffortContactMechNew', 'contact_mech_id', 'contact_mech_id');
    }
}
