<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $role_type_id
 * @property string $web_site_id
 * @property string $from_date
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property WebSite $webSite
 */
class WebSiteRole extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'web_site_role';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function webSite()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\WebSite', 'web_site_id', 'web_site_id');
    }
}
