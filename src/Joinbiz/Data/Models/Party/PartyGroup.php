<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $group_name
 * @property string $group_name_local
 * @property string $office_site_name
 * @property float $annual_revenue
 * @property float $num_employees
 * @property string $ticker_symbol
 * @property string $comments
 * @property string $logo_image_url
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PartyInvitationGroupAssoc[] $partyInvitationGroupAssocsByPartyIdTo
 * @property Affiliate $affiliate
 * @property Party $party
 */
class PartyGroup extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'party_group';

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
    protected $fillable = ['group_name', 'group_name_local', 'office_site_name', 'annual_revenue', 'num_employees', 'ticker_symbol', 'comments', 'logo_image_url', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyInvitationGroupAssocsByPartyIdTo()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyInvitationGroupAssoc', 'party_id_to', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function affiliate()
    {
        return $this->hasOne('Joinbiz\Data\Models\Party\Affiliate', 'party_id', 'party_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function party()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Party', 'party_id', 'party_id');
    }
}
