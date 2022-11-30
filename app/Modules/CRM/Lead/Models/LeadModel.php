<?php

/**
 * Created by Reliese Model.
 */

namespace App\Modules\CRM\Lead\Models;

use App\Modules\CRM\Department\Models\DepartmentModel;
use App\Modules\CRM\Timeline\Models\TimelineModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property int $id
 * @property string $chrName
 * @property string $chrEmail
 * @property string $chrPhone
 *
 * @property Carbon|null $dttDeleted
 *
 * @package App\Models
 */
class LeadModel extends Model
{
	protected $table = 'crm_lead';

    public $timestamps = false;

    protected $dates = [
        'dttDeleted'
    ];

	protected $fillable = [
		'chrName',
        'chrEmail',
        'chrPhone',
        'dttDeleted'

	];

    public function DepartmentModel()
    {
        return $this->belongsTo(DepartmentModel::class); //lead pertence a um Department
    }

    public function TimelineModel()
    {
        return $this->belongsTo(TimelineModel::class); //leadpertence a uma timeline
    }
}
