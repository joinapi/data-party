<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_mech_id
 * @property string $city_geo_id
 * @property string $country_geo_id
 * @property string $state_province_geo_id
 * @property string $county_geo_id
 * @property string $municipality_geo_id
 * @property string $postal_code_geo_id
 * @property string $geo_point_id
 * @property string $to_name
 * @property string $attn_name
 * @property string $address1
 * @property string $address2
 * @property float $house_number
 * @property string $house_number_ext
 * @property string $directions
 * @property string $city
 * @property string $postal_code
 * @property string $postal_code_ext
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Geo $geoByCountryGeoId
 * @property Geo $geoByCityGeoId
 * @property ContactMech $contactMech
 * @property Geo $geoByCountyGeoId
 * @property GeoPoint $geoPoint
 * @property Geo $geoByMunicipalityGeoId
 * @property Geo $geoByPostalCodeGeoId
 * @property Geo $geoByStateProvinceGeoId
 * @property BillingAccount[] $billingAccounts
 * @property CreditCard[] $creditCards
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByDestContactMechId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByOriginContactMechId
 * @property GiftCard[] $giftCards
 * @property CheckAccount[] $checkAccounts
 * @property EftAccount[] $eftAccounts
 * @property PayPalPaymentMethod[] $payPalPaymentMethods
 * @property Shipment[] $shipmentsByDestinationContactMechId
 * @property Shipment[] $shipmentsByOriginContactMechId
 * @property OrderItemShipGroup[] $orderItemShipGroups
 * @property PostalAddressBoundary[] $postalAddressBoundaries
 */
class PostalAddress extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'postal_address';

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
    protected $fillable = ['city_geo_id', 'country_geo_id', 'state_province_geo_id', 'county_geo_id', 'municipality_geo_id', 'postal_code_geo_id', 'geo_point_id', 'to_name', 'attn_name', 'address1', 'address2', 'house_number', 'house_number_ext', 'directions', 'city', 'postal_code', 'postal_code_ext', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByCountryGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'country_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByCityGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'city_geo_id', 'geo_id');
    }

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
    public function geoByCountyGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'county_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoPoint()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\GeoPoint', 'geo_point_id', 'geo_point_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByMunicipalityGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'municipality_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByPostalCodeGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'postal_code_geo_id', 'geo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function geoByStateProvinceGeoId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Geo', 'state_province_geo_id', 'geo_id');
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
    public function creditCards()
    {
        return $this->hasMany('Joinbiz\Data\Models\Accounting\CreditCard', 'contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByDestContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'dest_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByOriginContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'origin_contact_mech_id', 'contact_mech_id');
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
    public function shipmentsByDestinationContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'destination_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByOriginContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'origin_contact_mech_id', 'contact_mech_id');
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
    public function postalAddressBoundaries()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PostalAddressBoundary', 'contact_mech_id', 'contact_mech_id');
    }
}
