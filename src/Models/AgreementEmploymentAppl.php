<?php

namespace Joinbiz\Data\Models\Party;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $agreement_id
 * @property string $agreement_item_seq_id
 * @property string $party_id_from
 * @property string $party_id_to
 * @property string $role_type_id_from
 * @property string $role_type_id_to
 * @property string $from_date
 * @property string $agreement_date
 * @property string $thru_date
 * @property string $last_updated_stamp
 * @property string $last_updated_tx_stamp
 * @property string $created_stamp
 * @property string $created_tx_stamp
 */
class AgreementEmploymentAppl extends Model
{
    const CREATED_AT = 'created_stamp';
    const UPDATED_AT = 'last_updated_stamp';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agreement_employment_appl';

    /**
     * @var array
     */
    protected $fillable = ['agreement_date', 'thru_date', 'last_updated_stamp', 'last_updated_tx_stamp', 'created_stamp', 'created_tx_stamp'];
}
