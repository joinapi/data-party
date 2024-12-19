<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_need_id
 * @property string $party_id
 * @property string $role_type_id
 * @property string $party_type_id
 * @property string $need_type_id
 * @property string $communication_event_id
 * @property string $product_id
 * @property string $product_category_id
 * @property string $visit_id
 * @property string $datetime_recorded
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CommunicationEvent $communicationEvent
 * @property NeedType $needType
 * @property ProductCategory $productCategory
 * @property Product $product
 * @property PartyType $partyType
 * @property Party $party
 * @property RoleType $roleType
 */
class PartyNeed extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'party_need';

    /**
     * @var array
     */
    protected $fillable = ['party_type_id', 'need_type_id', 'communication_event_id', 'product_id', 'product_category_id', 'visit_id', 'datetime_recorded', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function needType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\NeedType', 'need_type_id', 'need_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\ProductCategory', 'product_category_id', 'product_category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Product\Product', 'product_id', 'product_id');
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
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\RoleType', 'role_type_id', 'role_type_id');
    }
}
