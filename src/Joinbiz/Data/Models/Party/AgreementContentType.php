<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $agreement_content_type_id
 * @property string $parent_type_id
 * @property string $has_table
 * @property string $description
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property AgreementContent[] $agreementContents
 * @property AgreementContentType $agreementContentTypeByParentTypeId
 */
class AgreementContentType extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'agreement_content_type';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'agreement_content_type_id';

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agreementContents()
    {
        return $this->hasMany('Joinbiz\Data\Models\Party\AgreementContent', 'agreement_content_type_id', 'agreement_content_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agreementContentTypeByParentTypeId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Party\AgreementContentType', 'parent_type_id', 'agreement_content_type_id');
    }
}
