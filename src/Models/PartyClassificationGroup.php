<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_classification_group_id
 * @property string $party_classification_type_id
 * @property string $parent_group_id
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property SegmentGroupClassification[] $segmentGroupClassifications
 * @property PartyClassificationGroup $partyClassificationGroupByParentGroupId
 * @property PartyClassificationType $partyClassificationType
 * @property MarketInterest[] $marketInterests
 * @property PartyClassification[] $partyClassifications
 */
class PartyClassificationGroup extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'party_classification_group';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'party_classification_group_id';

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
    protected $fillable = ['party_classification_type_id', 'parent_group_id', 'description', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function segmentGroupClassifications()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\SegmentGroupClassification', 'party_classification_group_id', 'party_classification_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyClassificationGroupByParentGroupId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyClassificationGroup', 'parent_group_id', 'party_classification_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partyClassificationType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\PartyClassificationType', 'party_classification_type_id', 'party_classification_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketInterests()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\MarketInterest', 'party_classification_group_id', 'party_classification_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partyClassifications()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\PartyClassification', 'party_classification_group_id', 'party_classification_group_id');
    }
}
