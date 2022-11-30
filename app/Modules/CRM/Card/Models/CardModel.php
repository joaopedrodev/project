<?php

/**
 * Created by Reliese Model.
 */

namespace App\Modules\CRM\Card\Models;

use App\Modules\CRM\Lead\Models\LeadModel;
use App\Modules\CRM\Department\Models\DepartmentModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @property int $id

 *
 * @property Carbon|null $dttDeleted
 *
 * @package App\Models
 */
class CardModel extends Model
{
	protected $table = 'crm_card';

    public $timestamps = false;

    protected $dates = [
        'dttDeleted'
    ];

	protected $fillable = [
        'fkDepartment',
        'fkTimeline',
        'fkLead',
        'dttDeleted'

	];

    public function LeadModel()
    {
        return $this->hasOne(LeadModel::class); // 1 card pode ter 1 lead
    }

    public function DepartmentModel()
    {
        return $this->hasOne(DepartmentModel::class); //1 card pode ter 1 departamento
    }
}
