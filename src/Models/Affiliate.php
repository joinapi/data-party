<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $affiliate_name
 * @property string $affiliate_description
 * @property string $year_established
 * @property string $site_type
 * @property string $site_page_views
 * @property string $site_visitors
 * @property string $date_time_created
 * @property string $date_time_approved
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Party $party
 * @property PartyGroup $partyGroup
 */
class Affiliate extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'affiliate';

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
    protected $fillable = ['affiliate_name', 'affiliate_description', 'year_established', 'site_type', 'site_page_views', 'site_visitors', 'date_time_created', 'date_time_approved', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function partyGroup()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyGroup', 'party_id', 'party_id');
    }
}
