<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property PartyType $partyTypeByParentTypeId
 * @property PartyTypeAttr[] $partyTypeAttrs
 * @property Party[] $parties
 * @property PartyNeed[] $partyNeeds
 */
class PartyType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'party_type';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'party_type_id';

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
    protected $fillable = ['parent_type_id', 'has_table', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyType', 'parent_type_id', 'party_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyTypeAttrs()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyTypeAttr', 'party_type_id', 'party_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parties()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\Party', 'party_type_id', 'party_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyNeeds()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyNeed', 'party_type_id', 'party_type_id');
    }
}
