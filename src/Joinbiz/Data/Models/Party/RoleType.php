<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $role_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property FixedAsset[] $fixedAssets
 * @property ProductContent[] $productContentsByUseRoleTypeId
 * @property ProductSubscriptionResource[] $productSubscriptionResourcesByUseRoleTypeId
 * @property ShipmentCostEstimate[] $shipmentCostEstimates
 * @property ContentPurposeOperation[] $contentPurposeOperations
 * @property ContentApproval[] $contentApprovals
 * @property CommunicationEvent[] $communicationEventsByRoleTypeIdFrom
 * @property CommunicationEvent[] $communicationEventsByRoleTypeIdTo
 * @property PartyContactMech[] $partyContactMeches
 * @property RoleType $roleTypeByParentTypeId
 * @property PartyRole[] $partyRoles
 * @property PartyInvitationRoleAssoc[] $partyInvitationRoleAssocs
 * @property PartyNeed[] $partyNeeds
 * @property Subscription[] $subscriptionsByOriginatedFromRoleTypeId
 * @property Subscription[] $subscriptions
 * @property FacilityParty[] $facilityParties
 * @property PartyRelationshipType[] $partyRelationshipTypesByRoleTypeIdValidFrom
 * @property PartyRelationshipType[] $partyRelationshipTypesByRoleTypeIdValidTo
 * @property SalesOpportunityRole[] $salesOpportunityRoles
 * @property RoleTypeAttr[] $roleTypeAttrs
 * @property AcctgTransEntry[] $acctgTransEntries
 * @property AcctgTrans[] $acctgTrans
 * @property Invoice[] $invoices
 * @property Payment[] $paymentsByRoleTypeIdTo
 * @property ValidContactMechRole[] $validContactMechRoles
 */
class RoleType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'role_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'role_type_id';

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
    public function fixedAssets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAsset', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productContentsByUseRoleTypeId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductContent', 'use_role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productSubscriptionResourcesByUseRoleTypeId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductSubscriptionResource', 'use_role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimates()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentCostEstimate', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentPurposeOperations()
    {
        return $this->hasMany('\ContentPurposeOperation', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentApprovals()
    {
        return $this->hasMany('\ContentApproval', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventsByRoleTypeIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'role_type_id_from', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventsByRoleTypeIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'role_type_id_to', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContactMech', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'parent_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyRole', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyInvitationRoleAssocs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyInvitationRoleAssoc', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNeeds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNeed', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByOriginatedFromRoleTypeId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'originated_from_role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityParty', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRelationshipTypesByRoleTypeIdValidFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyRelationshipType', 'role_type_id_valid_from', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRelationshipTypesByRoleTypeIdValidTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyRelationshipType', 'role_type_id_valid_to', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityRole', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleTypeAttrs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\RoleTypeAttr', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTransEntry', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTrans', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Invoice', 'role_type_id', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByRoleTypeIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Payment', 'role_type_id_to', 'role_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function validContactMechRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ValidContactMechRole', 'role_type_id', 'role_type_id');
    }
}
