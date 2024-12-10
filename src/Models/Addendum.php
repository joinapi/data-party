<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $addendum_id
 * @property string $agreement_id
 * @property string $agreement_item_seq_id
 * @property string $addendum_creation_date
 * @property string $addendum_effective_date
 * @property string $addendum_text
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Agreement $agreement
 */
class Addendum extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addendum';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'addendum_id';

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
    protected $fillable = ['agreement_id', 'agreement_item_seq_id', 'addendum_creation_date', 'addendum_effective_date', 'addendum_text', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreement()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Agreement', 'agreement_id', 'agreement_id');
    }
}
