<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $agreement_id
 * @property string $agreement_item_seq_id
 * @property string $agreement_content_type_id
 * @property string $content_id
 * @property string $from_date
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Content $content
 * @property Agreement $agreement
 * @property AgreementContentType $agreementContentType
 */
class AgreementContent extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agreement_content';

    /**
     * @var array
     */
    protected $fillable = ['thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function content()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Content', 'content_id', 'content_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreement()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\Agreement', 'agreement_id', 'agreement_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreementContentType()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\AgreementContentType', 'agreement_content_type_id', 'agreement_content_type_id');
    }
}
