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
 * @property PartyResume[] $partyResumes
 * @property PartySkill[] $partySkills
 * @property GlJournal[] $glJournalsByOrganizationPartyId
 * @property PartyStatus[] $partyStatuses
 * @property PartyTaxAuthInfo[] $partyTaxAuthInfos
 * @property FinAccountTrans[] $finAccountTrans
 * @property FinAccountTrans[] $finAccountTransByPerformedByPartyId
 * @property FacilityCarrierShipment[] $facilityCarrierShipments
 * @property ProductPromoUse[] $productPromice
 * @property CommunicationEvent[] $communicationEventsByPartyIdFrom
 * @property CommunicationEvent[] $communicationEventsByPartyIdTo
 * @property FixedAssetRegistration[] $fixedAssetRegistrationsByGovAgencyPartyId
 * @property Payment[] $paymentsByPartyIdFrom
 * @property Payment[] $paymentsByPartyIdTo
 * @property ProductPromoCodeParty[] $productPromoCodeParties
 * @property Subscription[] $subscriptionsByOriginatedFromPartyId
 * @property Subscription[] $subscriptions
 * @property FixedAssetTypeGlAccount[] $fixedAssetTypeGlAccountsByOrganizationPartyId
 * @property GlReconciliation[] $glReconciliationsByOrganizationPartyId
 * @property InventoryItem[] $inventoryItemsByOwnerPartyId
 * @property InventoryItem[] $inventoryItems
 * @property ContactList[] $contactListsByOwnerPartyId
 * @property PaymentGlAccountTypeMap[] $paymentGlAccountTypeMapsByOrganizationPartyId
 * @property PaymentMethodTypeGlAccount[] $paymentMethodTypeGlAccountsByOrganizationPartyId
 * @property ProductPrice[] $productPricesByTaxAuthPartyId
 * @property PayrollPreference[] $payrollPreferences
 * @property FixedAsset[] $fixedAssets
 * @property PerfReview[] $perfReviewsByEmployeePartyId
 * @property PerfReview[] $perfReviewsByManagerPartyId
 * @property PerfReviewItem[] $perfReviewItemsByEmployeePartyId
 * @property PerformanceNote[] $performanceNotes
 * @property Person $person
 * @property PersonTraining[] $personTrainings
 * @property CustRequestType[] $custRequestTypes
 * @property ProductGlAccount[] $productGlAccountsByOrganizationPartyId
 * @property GiftCardFulfillment[] $giftCardFulfillments
 * @property CustRequest[] $custRequestsByFromPartyId
 * @property ProductAverageCost[] $productAverageCostsByOrganizationPartyId
 * @property ProductCategoryGlAccount[] $productCategoryGlAccountsByOrganizationPartyId
 * @property NoteData[] $noteDatasByNoteParty
 * @property CarrierShipmentBoxType[] $carrierShipmentBoxTypes
 * @property Quote[] $quotes
 * @property GlAccountHistory[] $glAccountHistoriesByOrganizationPartyId
 * @property GlAccountTypeDefault[] $glAccountTypeDefaultsByOrganizationPartyId
 * @property BudgetRole[] $budgetRoles
 * @property Facility[] $facilitiesByOwnerPartyId
 * @property BudgetReview[] $budgetReviews
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByCarrierPartyId
 * @property ContentApproval[] $contentApprovals
 * @property CustomTimePeriod[] $customTimePeriodsByOrganizationPartyId
 * @property CostComponent[] $costComponents
 * @property BillingAccountRole[] $billingAccountRoles
 * @property FacilityParty[] $facilityParties
 * @property SalesOpportunityRole[] $salesOpportunityRoles
 * @property InvoiceItem[] $invoiceItemsByOverrideOrgPartyId
 * @property InvoiceItem[] $invoiceItemsByTaxAuthPartyId
 * @property PartyRole[] $partyRoles
 * @property CarrierShipmentMethod[] $carrierShipmentMethods
 * @property InvoiceItemTypeGlAccount[] $invoiceItemTypeGlAccountsByOrganizationPartyId
 * @property ShipmentReceiptRole[] $shipmentReceiptRoles
 * @property AgreementRole[] $agreementRoles
 * @property InvoiceRole[] $invoiceRoles
 * @property SupplierProduct[] $supplierProducts
 * @property SalesForecastHistory[] $salesForecastHistoriesByInternalPartyId
 * @property SalesForecastHistory[] $salesForecastHistoriesByOrganizationPartyId
 * @property AgreementPartyApplic[] $agreementPartyApplics
 * @property ItemIssuanceRole[] $itemIssuanceRoles
 * @property TaxAuthority[] $taxAuthoritiesByTaxAuthPartyId
 * @property ContentRevision[] $contentRevisionsByCommittedByPartyId
 * @property SalesForecast[] $salesForecastsByInternalPartyId
 * @property SalesForecast[] $salesForecastsByOrganizationPartyId
 * @property EmplPositionFulfillment[] $emplPositionFulfillments
 * @property ProductStore[] $productStoresByPayToPartyId
 * @property ContactListParty[] $contactListParties
 * @property JobInterview[] $jobInterviewsByJobIntervieweePartyId
 * @property JobInterview[] $jobInterviewsByJobInterviewerPartyId
 * @property Employment[] $employmentsByPartyIdFrom
 * @property Employment[] $employmentsByPartyIdTo
 * @property UserLogin $userLoginByCreatedByUserLogin
 * @property DataSource $dataSource
 * @property UserLogin $userLoginByLastModifiedByUserLogin
 * @property Uom $uomByPreferredCurrencyUomId
 * @property PartyType $partyType
 * @property StatusItem $statusItem
 * @property ContactListCommStatus[] $contactListCommStatuses
 * @property RespondingParty[] $respondingParties
 * @property RequirementRole[] $requirementRoles
 * @property EmplPosition[] $emplPositions
 * @property ReorderGuideline[] $reorderGuidelines
 * @property RateAmount[] $rateAmounts
 * @property ProductPromo[] $productPromosByOverrideOrgPartyId
 * @property Affiliate $affiliate
 * @property PartyGroup $partyGroup
 * @property EmploymentApp[] $employmentAppsByApproverPartyId
 * @property QuoteRole[] $quoteRoles
 * @property FinAccountTypeGlAccount[] $finAccountTypeGlAccountsByOrganizationPartyId
 * @property EmplLeave[] $emplLeavesByApproverPartyId
 * @property EmplLeave[] $emplLeaves
 * @property AcctgTransEntry[] $acctgTransEntries
 * @property GlAccountOrganization[] $glAccountOrganizationsByOrganizationPartyId
 * @property UserLogin[] $userLogins
 * @property CommunicationEventRole[] $communicationEventRoles
 * @property OrderItemRole[] $orderItemRoles
 * @property AcctgTrans[] $acctgTrans
 * @property FinAccount[] $finAccountsByOrganizationPartyId
 * @property FinAccount[] $finAccountsByOwnerPartyId
 * @property OrderRole[] $orderRoles
 * @property ProductStoreVendorPayment[] $productStoreVendorPaymentsByVendorPartyId
 * @property PartyAcctgPreference $partyAcctgPreference
 * @property PaymentMethod[] $paymentMethods
 * @property PartyAttribute[] $partyAttributes
 * @property ShipmentCostEstimate[] $shipmentCostEstimates
 * @property PartyBenefit[] $partyBenefitsByPartyIdFrom
 * @property PartyBenefit[] $partyBenefitsByPartyIdTo
 * @property CustRequestParty[] $custRequestParties
 * @property ProductStoreVendorShipment[] $productStoreVendorShipmentsByCarrierPartyId
 * @property ProductStoreVendorShipment[] $productStoreVendorShipmentsByVendorPartyId
 * @property PartyCarrierAccount[] $partyCarrierAccountsByCarrierPartyId
 * @property PartyCarrierAccount[] $partyCarrierAccounts
 * @property PartyClassification[] $partyClassifications
 * @property PartyContactMech[] $partyContactMeches
 * @property PartyContactMechPurpose[] $partyContactMechPurposes
 * @property PartyContent[] $partyContents
 * @property Shipment[] $shipmentsByPartyIdFrom
 * @property Shipment[] $shipmentsByPartyIdTo
 * @property PartyDataSource[] $partyDataSources
 * @property PartyGeoPoint[] $partyGeoPoints
 * @property PartyGlAccount[] $partyGlAccountsByOrganizationPartyId
 * @property PartyGlAccount[] $partyGlAccounts
 * @property PartyIcsAvsOverride $partyIcsAvsOverride
 * @property ShoppingList[] $shoppingLists
 * @property ReturnHeader[] $returnHeadersByFromPartyId
 * @property ReturnHeader[] $returnHeadersByToPartyId
 * @property PartyIdentification[] $partyIdentifications
 * @property PartyInvitation[] $partyInvitationsByPartyIdFrom
 * @property PartyInvitationGroupAssoc[] $partyInvitationGroupAssocsByPartyIdTo
 * @property PartyNameHistory[] $partyNameHistories
 * @property PartyNeed[] $partyNeeds
 * @property PartyNote[] $partyNotes
 * @property OrderItemShipGroup[] $orderItemShipGroupsByCarrierPartyId
 * @property OrderItemShipGroup[] $orderItemShipGroupsBySupplierPartyId
 * @property OrderItemShipGroup[] $orderItemShipGroupsByVendorPartyId
 * @property PartyPrefDocTypeTpl[] $partyPrefDocTypeTpls
 * @property PartyProfileDefault[] $partyProfileDefaults
 * @property PartyQual[] $partyQuals
 * @property PartyRateNew[] $partyRateNews
 * @property Invoice[] $invoices
 * @property Invoice[] $invoicesByPartyIdFrom
 * @property TimesheetRole[] $timesheetRoles
 * @property UserLoginHistory[] $userLoginHistories
 * @property WorkEffortEventReminder[] $workEffortEventReminders
 * @property TaxAuthorityGlAccount[] $taxAuthorityGlAccountsByOrganizationPartyId
 * @property WebUserPreference[] $webUserPreferences
 * @property VendorProduct[] $vendorProductsByVendorPartyId
 * @property Vendor $vendor
 * @property SupplierProductFeature[] $supplierProductFeatures
 * @property VarianceReasonGlAccount[] $varianceReasonGlAccountsByOrganizationPartyId
 * @property Timesheet[] $timesheetsByClientPartyId
 * @property Timesheet[] $timesheets
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
    public function partyResumes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyResume', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partySkills()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartySkill', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glJournalsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\GlJournal', 'organization_party_id', 'party_id');
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
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyTaxAuthInfo', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FinAccountTrans', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTransByPerformedByPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FinAccountTrans', 'performed_by_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityCarrierShipments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FacilityCarrierShipment', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromice()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductPromoUse', 'party_id', 'party_id');
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
    public function fixedAssetRegistrationsByGovAgencyPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FixedAssetRegistration', 'gov_agency_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Payment', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Payment', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromoCodeParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductPromoCodeParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionsByOriginatedFromPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Subscription', 'originated_from_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Subscription', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssetTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FixedAssetTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glReconciliationsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\GlReconciliation', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItemsByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InventoryItem', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventoryItems()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InventoryItem', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListsByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactList', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentGlAccountTypeMapsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PaymentGlAccountTypeMap', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentMethodTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PaymentMethodTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPricesByTaxAuthPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductPrice', 'tax_auth_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payrollPreferences()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PayrollPreference', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fixedAssets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FixedAsset', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfReviewsByEmployeePartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PerfReview', 'employee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfReviewsByManagerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PerfReview', 'manager_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function perfReviewItemsByEmployeePartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PerfReviewItem', 'employee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function performanceNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PerformanceNote', 'party_id', 'party_id');
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
    public function personTrainings()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PersonTraining', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CustRequestType', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function giftCardFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\GiftCardFulfillment', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestsByFromPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CustRequest', 'from_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAverageCostsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductAverageCost', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productCategoryGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductCategoryGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function noteDatasByNoteParty()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\NoteData', 'note_party', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carrierShipmentBoxTypes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CarrierShipmentBoxType', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Quote', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glAccountHistoriesByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\GlAccountHistory', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glAccountTypeDefaultsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\GlAccountTypeDefault', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgetRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\BudgetRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilitiesByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Facility', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgetReviews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\BudgetReview', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByCarrierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ShipmentRouteSegment', 'carrier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentApprovals()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContentApproval', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customTimePeriodsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CustomTimePeriod', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costComponents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CostComponent', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function billingAccountRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\BillingAccountRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facilityParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FacilityParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOpportunityRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SalesOpportunityRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItemsByOverrideOrgPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InvoiceItem', 'override_org_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItemsByTaxAuthPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InvoiceItem', 'tax_auth_party_id', 'party_id');
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
        return $this->hasMany('Joinbiz\Data\Models\Party\CarrierShipmentMethod', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceItemTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InvoiceItemTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentReceiptRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ShipmentReceiptRole', 'party_id', 'party_id');
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
    public function invoiceRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\InvoiceRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierProducts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SupplierProduct', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastHistoriesByInternalPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SalesForecastHistory', 'internal_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastHistoriesByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SalesForecastHistory', 'organization_party_id', 'party_id');
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
    public function itemIssuanceRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ItemIssuanceRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthoritiesByTaxAuthPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\TaxAuthority', 'tax_auth_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contentRevisionsByCommittedByPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContentRevision', 'committed_by_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastsByInternalPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SalesForecast', 'internal_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesForecastsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SalesForecast', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositionFulfillments()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\EmplPositionFulfillment', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoresByPayToPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductStore', 'pay_to_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactListParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobInterviewsByJobIntervieweePartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\JobInterview', 'job_interviewee_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobInterviewsByJobInterviewerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\JobInterview', 'job_interviewer_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employmentsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Employment', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employmentsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Employment', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByCreatedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\UserLogin', 'created_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataSource()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\DataSource', 'data_source_id', 'data_source_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userLoginByLastModifiedByUserLogin()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\UserLogin', 'last_modified_by_user_login', 'user_login_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uomByPreferredCurrencyUomId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Uom', 'preferred_currency_uom_id', 'uom_id');
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
        return $this->belongsTo('Joinbiz\Data\Models\Party\StatusItem', 'status_id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactListCommStatuses()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ContactListCommStatus', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respondingParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\RespondingParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requirementRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\RequirementRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplPositions()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\EmplPosition', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reorderGuidelines()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ReorderGuideline', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rateAmounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\RateAmount', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPromosByOverrideOrgPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductPromo', 'override_org_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function affiliate()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\Affiliate', 'party_id', 'party_id');
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
    public function employmentAppsByApproverPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\EmploymentApp', 'approver_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quoteRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\QuoteRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountTypeGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FinAccountTypeGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplLeavesByApproverPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\EmplLeave', 'approver_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emplLeaves()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\EmplLeave', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTransEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AcctgTransEntry', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function glAccountOrganizationsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\GlAccountOrganization', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userLogins()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\UserLogin', 'party_id', 'party_id');
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
    public function orderItemRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acctgTrans()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AcctgTrans', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FinAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finAccountsByOwnerPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\FinAccount', 'owner_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorPaymentsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductStoreVendorPayment', 'vendor_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function partyAcctgPreference()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\PartyAcctgPreference', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentMethods()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PaymentMethod', 'party_id', 'party_id');
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
    public function shipmentCostEstimates()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ShipmentCostEstimate', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyBenefitsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyBenefit', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyBenefitsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyBenefit', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function custRequestParties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\CustRequestParty', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorShipmentsByCarrierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductStoreVendorShipment', 'carrier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productStoreVendorShipmentsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ProductStoreVendorShipment', 'vendor_party_id', 'party_id');
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
    public function partyContactMeches()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContactMech', 'party_id', 'party_id');
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
    public function partyContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyContent', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Shipment', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Shipment', 'party_id_to', 'party_id');
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
    public function partyGeoPoints()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyGeoPoint', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyGlAccounts()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyGlAccount', 'party_id', 'party_id');
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
    public function shoppingLists()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ShoppingList', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByFromPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ReturnHeader', 'from_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function returnHeadersByToPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\ReturnHeader', 'to_party_id', 'party_id');
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
    public function partyNotes()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNote', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsByCarrierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemShipGroup', 'carrier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsBySupplierPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemShipGroup', 'supplier_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\OrderItemShipGroup', 'vendor_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyPrefDocTypeTpls()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyPrefDocTypeTpl', 'party_id', 'party_id');
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
    public function partyQuals()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyQual', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyRateNews()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyRateNew', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Invoice', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicesByPartyIdFrom()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Invoice', 'party_id_from', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheetRoles()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\TimesheetRole', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userLoginHistories()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\UserLoginHistory', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workEffortEventReminders()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\WorkEffortEventReminder', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxAuthorityGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\TaxAuthorityGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function webUserPreferences()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\WebUserPreference', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vendorProductsByVendorPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\VendorProduct', 'vendor_party_id', 'party_id');
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
    public function supplierProductFeatures()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SupplierProductFeature', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function varianceReasonGlAccountsByOrganizationPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\VarianceReasonGlAccount', 'organization_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheetsByClientPartyId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Timesheet', 'client_party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheets()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Timesheet', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timeEntries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\TimeEntry', 'party_id', 'party_id');
    }
}
