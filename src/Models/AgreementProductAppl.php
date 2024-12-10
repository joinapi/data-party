<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;
use Joinbiz\Data\Models\Product\Product;

/**
 * @property string $agreement_id
 * @property string $agreement_item_seq_id
 * @property string $product_id
 * @property float $price
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Product $product
 */
class AgreementProductAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agreement_product_appl';

    /**
     * @var array
     */
    protected $fillable = ['price', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Product', 'product_id', 'product_id');
    }
}
