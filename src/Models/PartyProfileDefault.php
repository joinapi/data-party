<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $product_store_id
 * @property string $default_ship_addr
 * @property string $default_bill_addr
 * @property string $default_pay_meth
 * @property string $default_ship_meth
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $party
 * @property ProductStore $productStore
 */
class PartyProfileDefault extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'party_profile_default';

    /**
     * @var array
     */
    protected $fillable = ['default_ship_addr', 'default_bill_addr', 'default_pay_meth', 'default_ship_meth', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function productStore()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\ProductStore', 'product_store_id', 'product_store_id');
    }
}
