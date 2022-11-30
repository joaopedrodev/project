<?php

/**
 * Created by Reliese Model.
 */

namespace App\Modules\CRM\Department\Models;

use App\Modules\CRM\Card\Models\CardModel;
use App\Modules\CRM\Timeline\Models\TimelineModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property int $id
 * @property string $chrDepartment
 * @property Carbon|null $dttDeleted
 *
 * @package App\Models
 */
class DepartmentModel extends Model
{
	protected $table = 'crm_department';

    public $timestamps = false;

    protected $dates = [
        'dttDeleted'
    ];

	protected $fillable = [
		'chrDepartment',
        'dttDeleted'

	];

    public function TimelineModel()
    {
        return $this->belongsToMany(TimelineModel::class); //1 departamento pode ter m timelines
    }

    public function CardModel()
    {
        return $this->belongsToMany(CardModel::class);
    }


}
