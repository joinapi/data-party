<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $party_id
 * @property string $employment_status_enum_id
 * @property string $residence_status_enum_id
 * @property string $salutation
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $personal_title
 * @property string $suffix
 * @property string $nickname
 * @property string $first_name_local
 * @property string $middle_name_local
 * @property string $last_name_local
 * @property string $other_local
 * @property string $member_id
 * @property string $gender
 * @property string $birth_date
 * @property string $deceased_date
 * @property float $height
 * @property float $weight
 * @property string $mothers_maiden_name
 * @property string $marital_status
 * @property string $social_security_number
 * @property string $passport_number
 * @property string $passport_expire_date
 * @property float $total_years_work_experience
 * @property string $comments
 * @property string $occupation
 * @property float $years_with_employer
 * @property float $months_with_employer
 * @property string $existing_customer
 * @property string $card_id
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 * @property Enumeration $enumerationByEmploymentStatusEnumId
 * @property Party $party
 * @property Enumeration $enumerationByResidenceStatusEnumId
 * @property PersonTraining[] $personTrainingsByApproverId
 */
class Person extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'person';

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
    protected $fillable = ['employment_status_enum_id', 'residence_status_enum_id', 'salutation', 'first_name', 'middle_name', 'last_name', 'personal_title', 'suffix', 'nickname', 'first_name_local', 'middle_name_local', 'last_name_local', 'other_local', 'member_id', 'gender', 'birth_date', 'deceased_date', 'height', 'weight', 'mothers_maiden_name', 'marital_status', 'social_security_number', 'passport_number', 'passport_expire_date', 'total_years_work_experience', 'comments', 'occupation', 'years_with_employer', 'months_with_employer', 'existing_customer', 'card_id', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumerationByEmploymentStatusEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'employment_status_enum_id', 'enum_id');
    }

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
    public function enumerationByResidenceStatusEnumId()
    {
        return $this->belongsTo('Joinbiz\Data\Models\Common\Enumeration', 'residence_status_enum_id', 'enum_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personTrainingsByApproverId()
    {
        return $this->hasMany('Joinbiz\Data\Models\Humanres\PersonTraining', 'approver_id', 'party_id');
    }
}
