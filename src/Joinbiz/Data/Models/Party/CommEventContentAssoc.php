<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $content_id
 * @property string $communication_event_id
 * @property string $from_date
 * @property string $comm_content_assoc_type_id
 * @property string $thru_date
 * @property float $sequence_num
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property CommunicationEvent $communicationEvent
 * @property Content $content
 * @property CommContentAssocType $commContentAssocType
 */
class CommEventContentAssoc extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'comm_event_content_assoc';

    /**
     * @var array
     */
    protected $fillable = ['comm_content_assoc_type_id', 'thru_date', 'sequence_num', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

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
    public function content()
    {
        return $this->belongsTo('\Content', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commContentAssocType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\CommContentAssocType', 'comm_content_assoc_type_id', 'comm_content_assoc_type_id');
    }
}
