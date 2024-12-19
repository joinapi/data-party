<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $party_type_id
 * @property string $preferred_currency_uom_id
 * @property string $status_id
 * @property string $created_by_user_login
 * @property string $last_modified_by_user_login
 * @property string $data_source_id
 * @property string $external_id
 * @property string $description
 * @property string $created_date
 * @property string $last_modified_date
 * @property string $is_unread
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property QuoteRole[] $quoteRoles
 * @property ProductCategoryGlAccount[] $productCategoryGlAccountsByOrganizationPartyId
 * @property ShoppingList[] $shoppingLists
 * @property GlReconciliation[] $glReconciliationsByOrganizationPartyId
 * @property FixedAsset[] $fixedAssets
 * @property CustRequestParty[] $custRequestParties
 * @property ProductGlAccount[] $productGlAccountsByOrganizationPartyId
 * @property ProductPrice[] $productPricesByTaxAuthPartyId
 * @property ProductStoreVendorShipment[] $productStoreVendorShipmentsByCarrierPartyId
 * @property ProductStoreVendorShipment[] $productStoreVendorShipmentsByVendorPartyId
 * @property NoteData[] $noteDatasByNoteParty
 * @property ProductPromoCodeParty[] $productPromoCodeParties
 * @property ProductStoreVendorPayment[] $productStoreVendorPaymentsByVendorPartyId
 * @property Quote[] $quotes
 * @property ProductPromoUse[] $productPromice
 * @property InventoryItem[] $inventoryItemsByOwnerPartyId
 * @property InventoryItem[] $inventoryItems
 * @property CustRequest[] $custRequestsByFromPartyId
 * @property CustRequestType[] $custRequestTypes
 * @property FinAccountTypeGlAccount[] $finAccountTypeGlAccountsByOrganizationPartyId
 * @property InvoiceItem[] $invoiceItemsByOverrideOrgPartyId
 * @property InvoiceItem[] $invoiceItemsByTaxAuthPartyId
 * @property CostComponent[] $costComponents
 * @property EmploymentApp[] $employmentAppsByApproverPartyId
 * @property ShipmentCostEstimate[] $shipmentCostEstimates
 * @property ContentRevision[] $contentRevisionsByCommittedByPartyId
 * @property GlAccountTypeDefault[] $glAccountTypeDefaultsByOrganizationPartyId
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property DataSource $dataSource
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property Uom $uomByPreferredCurrencyUomId
 * @property PartyType $partyType
 * @property StatusItem $statusItem
 * @property GlAccountHistory[] $glAccountHistoriesByOrganizationPartyId
 * @property ContentApproval[] $contentApprovals
 * @property ShipmentReceiptRole[] $shipmentReceiptRoles
 * @property InvoiceItemTypeGlAccount[] $invoiceItemTypeGlAccountsByOrganizationPartyId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByCarrierPartyId
 * @property ContactListParty[] $contactListParties
 * @property ContactListCommStatus[] $contactListCommStatuses
 * @property FixedAssetRegistration[] $fixedAssetRegistrationsByGovAgencyPartyId
 * @property OrderItemRole[] $orderItemRoles
 * @property UserLogin[] $userLogins
 * @property CommunicationEventRole[] $communicationEventRoles
 * @property FixedAssetTypeGlAccount[] $fixedAssetTypeGlAccountsByOrganizationPartyId
 * @property OrderRole[] $orderRoles
 * @property CommunicationEvent[] $communicationEventsByPartyIdFrom
 * @property CommunicationEvent[] $communicationEventsByPartyIdTo
 * @property EmplPositionFulfillment[] $emplPositionFulfillments
 * @property GiftCardFulfillment[] $giftCardFulfillments
 * @property ContactList[] $contactListsByOwnerPartyId
 * @property PartyAcctgPreference $partyAcctgPreference
 * @property PartyAttribute[] $partyAttributes
 * @property PartyBenefit[] $partyBenefitsByPartyIdFrom
 * @property PartyBenefit[] $partyBenefitsByPartyIdTo
 * @property InvoiceRole[] $invoiceRoles
 * @property CarrierShipmentBoxType[] $carrierShipmentBoxTypes
 * @property PartyCarrierAccount[] $partyCarrierAccountsByCarrierPartyId
 * @property PartyCarrierAccount[] $partyCarrierAccounts
 * @property PartyClassification[] $partyClassifications
 * @property EmplPosition[] $emplPositions
 * @property BudgetRole[] $budgetRoles
 * @property PartyContactMech[] $partyContactMeches
 * @property EmplLeave[] $emplLeavesByApproverPartyId
 * @property EmplLeave[] $emplLeaves
 * @property PartyContactMechPurpose[] $partyContactMechPurposes
 * @property BudgetReview[] $budgetReviews
 * @property PartyContent[] $partyContents
 * @property PartyDataSource[] $partyDataSources
 * @property CustomTimePeriod[] $customTimePeriodsByOrganizationPartyId
 * @property PartyGeoPoint[] $partyGeoPoints
 * @property ItemIssuanceRole[] $itemIssuanceRoles
 * @property PartyGlAccount[] $partyGlAccountsByOrganizationPartyId
 * @property PartyGlAccount[] $partyGlAccounts
 * @property PartyIcsAvsOverride $partyIcsAvsOverride
 * @property BillingAccountRole[] $billingAccountRoles
 * @property PartyIdentification[] $partyIdentifications
 * @property PartyInvitation[] $partyInvitationsByPartyIdFrom
 * @property PartyInvitationGroupAssoc[] $partyInvitationGroupAssocsByPartyIdTo
 * @property PartyRole[] $partyRoles
 * @property CarrierShipmentMethod[] $carrierShipmentMethods
 * @property PartyNameHistory[] $partyNameHistories
 * @property PartyNeed[] $partyNeeds
 * @property Subscription[] $subscriptionsByOriginatedFromPartyId
 * @property Subscription[] $subscriptions
 * @property PartyNote[] $partyNotes
 * @property AgreementRole[] $agreementRoles
 * @property PartyPrefDocTypeTpl[] $partyPrefDocTypeTpls
 * @property AgreementPartyApplic[] $agreementPartyApplics
 * @property PartyProfileDefault[] $partyProfileDefaults
 * @property JobInterview[] $jobInterviewsByJobIntervieweePartyId
 * @property JobInterview[] $jobInterviewsByJobInterviewerPartyId
 * @property TaxAuthority[] $taxAuthoritiesByTaxAuthPartyId
 * @property PartyQual[] $partyQuals
 * @property PartyRateNew[] $partyRateNews
 * @property Employment[] $employmentsByPartyIdFrom
 * @property Employment[] $employmentsByPartyIdTo
 * @property ProductStore[] $productStoresByPayToPartyId
 * @property FacilityParty[] $facilityParties
 * @property SalesOpportunityRole[] $salesOpportunityRoles
 * @property PartyResume[] $partyResumes
 * @property PartySkill[] $partySkills
 * @property PartyStatus[] $partyStatuses
 * @property PartyTaxAuthInfo[] $partyTaxAuthInfos
 * @property SalesForecastHistory[] $salesForecastHistoriesByInternalPartyId
 * @property SalesForecastHistory[] $salesForecastHistoriesByOrganizationPartyId
 * @property Affiliate $affiliate
 * @property SalesForecast[] $salesForecastsByInternalPartyId
 * @property SalesForecast[] $salesForecastsByOrganizationPartyId
 * @property PartyGroup $partyGroup
 * @property FacilityCarrierShipment[] $facilityCarrierShipments
 * @property AcctgTransEntry[] $acctgTransEntries
 * @property GlAccountOrganization[] $glAccountOrganizationsByOrganizationPartyId
 * @property ProductPromo[] $productPromosByOverrideOrgPartyId
 * @property AcctgTrans[] $acctgTrans
 * @property RespondingParty[] $respondingParties
 * @property PaymentGlAccountTypeMap[] $paymentGlAccountTypeMapsByOrganizationPartyId
 * @property PaymentMethodTypeGlAccount[] $paymentMethodTypeGlAccountsByOrganizationPartyId
 * @property PayrollPreference[] $payrollPreferences
 * @property PerfReview[] $perfReviewsByEmployeePartyId
 * @property PerfReview[] $perfReviewsByManagerPartyId
 * @property PerfReviewItem[] $perfReviewItemsByEmployeePartyId
 * @property PerformanceNote[] $performanceNotes
 * @property RequirementRole[] $requirementRoles
 * @property Person $person
 * @property Shipment[] $shipmentsByPartyIdFrom
 * @property Shipment[] $shipmentsByPartyIdTo
 * @property PersonTraining[] $personTrainings
 * @property ReturnHeader[] $returnHeadersByFromPartyId
 * @property ReturnHeader[] $returnHeadersByToPartyId
 * @property OrderItemShipGroup[] $orderItemShipGroupsByCarrierPartyId
 * @property OrderItemShipGroup[] $orderItemShipGroupsBySupplierPartyId
 * @property OrderItemShipGroup[] $orderItemShipGroupsByVendorPartyId
 * @property FinAccount[] $finAccountsByOrganizationPartyId
 * @property FinAccount[] $finAccountsByOwnerPartyId
 * @property ReorderGuideline[] $reorderGuidelines
 * @property RateAmount[] $rateAmounts
 * @property Invoice[] $invoices
 * @property Invoice[] $invoicesByPartyIdFrom
 * @property Facility[] $facilitiesByOwnerPartyId
 * @property PaymentMethod[] $paymentMethods
 * @property GlJournal[] $glJournalsByOrganizationPartyId
 * @property FinAccountTrans[] $finAccountTrans
 * @property FinAccountTrans[] $finAccountTransByPerformedByPartyId
 * @property Payment[] $paymentsByPartyIdFrom
 * @property Payment[] $paymentsByPartyIdTo
 * @property ProductAverageCost[] $productAverageCostsByOrganizationPartyId
 * @property TaxAuthorityGlAccount[] $taxAuthorityGlAccountsByOrganizationPartyId
 * @property WorkEffortEventReminder[] $workEffortEventReminders
 * @property Vendor $vendor
 * @property UserLoginHistory[] $userLoginHistories
 * @property TimesheetRole[] $timesheetRoles
 * @property VendorProduct[] $vendorProductsByVendorPartyId
 * @property SupplierProductFeature[] $supplierProductFeatures
 * @property Timesheet[] $timesheetsByClientPartyId
 * @property Timesheet[] $timesheets
 * @property WebUserPreference[] $webUserPreferences
 * @property SupplierProduct[] $supplierProducts
 * @property VarianceReasonGlAccount[] $varianceReasonGlAccountsByOrganizationPartyId
 * @property TimeEntry[] $timeEntries
 */
class Party extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'party';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'party_id';

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
    protected $fillable = ['party_type_id', 'preferred_currency_uom_id', 'status_id', 'created_by_user_login', 'last_modified_by_user_login', 'data_source_id', 'external_id', 'description', 'created_date', 'last_modified_date', 'is_unread', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\QuoteRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductCategoryGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppingLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ShoppingList', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glReconciliationsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GlReconciliation', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAsset', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByTaxAuthPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPrice', 'tax_auth_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorShipmentsByCarrierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreVendorShipment', 'carrier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorShipmentsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreVendorShipment', 'vendor_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function noteDatasByNoteParty()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\NoteData', 'note_party', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCodeParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoCodeParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorPaymentsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStoreVendorPayment', 'vendor_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\Quote', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromice()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromoUse', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemsByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\InventoryItem', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByFromPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequest', 'from_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\CustRequestType', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccountTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItemsByOverrideOrgPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceItem', 'override_org_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItemsByTaxAuthPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceItem', 'tax_auth_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\CostComponent', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employmentAppsByApproverPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmploymentApp', 'approver_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentCostEstimates()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentCostEstimate', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentRevisionsByCommittedByPartyId()
    {
        return $this->hasMany('\ContentRevision', 'committed_by_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glAccountTypeDefaultsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GlAccountTypeDefault', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Security\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataSource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\DataSource', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Security\UserLogin', 'last_modified_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByPreferredCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Uom', 'preferred_currency_uom_id', 'uom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyType', 'party_type_id', 'party_type_id');
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
    public function glAccountHistoriesByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GlAccountHistory', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentApprovals()
    {
        return $this->hasMany('\ContentApproval', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentReceiptRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentReceiptRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItemTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceItemTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByCarrierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'carrier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListCommStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactListCommStatus', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetRegistrationsByGovAgencyPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetRegistration', 'gov_agency_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userLogins()
    {
        return $this->hasMany('Joinbiz\Data\Models\Security\UserLogin', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEventRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FixedAssetTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communicationEventsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CommunicationEvent', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositionFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPositionFulfillment', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function giftCardFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GiftCardFulfillment', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListsByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\ContactList', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function partyAcctgPreference()
    {
        return $this->hasOne('Joinbiz\Data\Models\Accounting\PartyAcctgPreference', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyAttributes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyAttribute', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyBenefitsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartyBenefit', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyBenefitsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartyBenefit', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\InvoiceRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carrierShipmentBoxTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\CarrierShipmentBoxType', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyCarrierAccountsByCarrierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyCarrierAccount', 'carrier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyCarrierAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyCarrierAccount', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyClassifications()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyClassification', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplPosition', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgetRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\BudgetRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContactMech', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplLeavesByApproverPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplLeave', 'approver_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplLeaves()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\EmplLeave', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContactMechPurposes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContactMechPurpose', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgetReviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\BudgetReview', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContent', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyDataSources()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyDataSource', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customTimePeriodsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Common\CustomTimePeriod', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyGeoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyGeoPoint', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itemIssuanceRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ItemIssuanceRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PartyGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyGlAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PartyGlAccount', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function partyIcsAvsOverride()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\PartyIcsAvsOverride', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccountRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\BillingAccountRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyIdentifications()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyIdentification', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyInvitationsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyInvitation', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyInvitationGroupAssocsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyInvitationGroupAssoc', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carrierShipmentMethods()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\CarrierShipmentMethod', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNameHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNameHistory', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNeeds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNeed', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByOriginatedFromPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'originated_from_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Subscription', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNote', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyPrefDocTypeTpls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PartyPrefDocTypeTpl', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementPartyApplics()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementPartyApplic', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyProfileDefaults()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyProfileDefault', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobInterviewsByJobIntervieweePartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\JobInterview', 'job_interviewee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobInterviewsByJobInterviewerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\JobInterview', 'job_interviewer_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthoritiesByTaxAuthPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\TaxAuthority', 'tax_auth_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyQuals()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartyQual', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRateNews()
    {
        return $this->hasMany('\PartyRateNew', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employmentsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\Employment', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employmentsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\Employment', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByPayToPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductStore', 'pay_to_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesOpportunityRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyResumes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartyResume', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partySkills()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PartySkill', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyStatus', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyTaxAuthInfos()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PartyTaxAuthInfo', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastHistoriesByInternalPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecastHistory', 'internal_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastHistoriesByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecastHistory', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function affiliate()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\Affiliate', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastsByInternalPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecast', 'internal_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Marketing\SalesForecast', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function partyGroup()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\PartyGroup', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityCarrierShipments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\FacilityCarrierShipment', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTransEntry', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glAccountOrganizationsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GlAccountOrganization', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromosByOverrideOrgPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ProductPromo', 'override_org_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\AcctgTrans', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respondingParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\RespondingParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentGlAccountTypeMapsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PaymentGlAccountTypeMap', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentMethodTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PaymentMethodTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payrollPreferences()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PayrollPreference', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfReviewsByEmployeePartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PerfReview', 'employee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfReviewsByManagerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PerfReview', 'manager_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfReviewItemsByEmployeePartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PerfReviewItem', 'employee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function performanceNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PerformanceNote', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requirementRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\RequirementRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\Person', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personTrainings()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PersonTraining', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByFromPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnHeader', 'from_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByToPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\ReturnHeader', 'to_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsByCarrierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemShipGroup', 'carrier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsBySupplierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemShipGroup', 'supplier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemShipGroup', 'vendor_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountsByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccount', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reorderGuidelines()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\ReorderGuideline', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rateAmounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\RateAmount', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Invoice', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicesByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Invoice', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\Facility', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentMethods()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\PaymentMethod', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glJournalsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\GlJournal', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccountTrans', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTransByPerformedByPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\FinAccountTrans', 'performed_by_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Payment', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\Payment', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAverageCostsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\ProductAverageCost', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthorityGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\TaxAuthorityGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortEventReminders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\WorkEffortEventReminder', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vendor()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\Vendor', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userLoginHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Security\UserLoginHistory', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheetRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\TimesheetRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vendorProductsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\VendorProduct', 'vendor_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProductFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SupplierProductFeature', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheetsByClientPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\Timesheet', 'client_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\Timesheet', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webUserPreferences()
    {
        return $this->hasMany('\WebUserPreference', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Product\SupplierProduct', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function varianceReasonGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\VarianceReasonGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timeEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Workeffort\TimeEntry', 'party_id', 'party_id');
    }
}
