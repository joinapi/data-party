<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $contact_mech_id
 * @property string $country_code
 * @property string $area_code
 * @property string $contact_number
 * @property string $ask_for_name
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByDestTelecomNumberId
 * @property ShipmentRouteSegment[] $shipmentRouteSegmentsByOriginTelecomNumberId
 * @property Shipment[] $shipmentsByDestinationTelecomNumberId
 * @property Shipment[] $shipmentsByOriginTelecomNumberId
 * @property OrderItemShipGroup[] $orderItemShipGroupsByTelecomContactMechId
 * @property ContactMech $contactMech
 */
class TelecomNumber extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'telecom_number';

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
    protected $fillable = ['country_code', 'area_code', 'contact_number', 'ask_for_name', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByDestTelecomNumberId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'dest_telecom_number_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentRouteSegmentsByOriginTelecomNumberId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\ShipmentRouteSegment', 'origin_telecom_number_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByDestinationTelecomNumberId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'destination_telecom_number_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipmentsByOriginTelecomNumberId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Shipment\Shipment', 'origin_telecom_number_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderItemShipGroupsByTelecomContactMechId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Order\OrderItemShipGroup', 'telecom_contact_mech_id', 'contact_mech_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactMech()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ContactMech', 'contact_mech_id', 'contact_mech_id');
    }
}
