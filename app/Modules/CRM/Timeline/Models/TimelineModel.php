<?php

/**
 * Created by Reliese Model.
 */

namespace App\Modules\CRM\Timeline\Models;

use App\Modules\CRM\Card\Models\CardModel;
use App\Modules\CRM\Department\Models\DepartmentModel;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @property int $id
 * @property string $chTimeline

 *
 * @property Carbon|null $dttDeleted
 *
 * @package App\Models
 */
class TimelineModel extends Model
{
	protected $table = 'crm_timeline';

    public $timestamps = false;

    protected $dates = [
        'dttDeleted'
    ];

	protected $fillable = [
        'fkDepartment',
		'chrTimeline',
        'dttDeleted'

	];

    public function DepartmentModel()
    {
        return $this->belongsToMany(DepartmentModel::class);
    }

    public function CardModel()
    {
        return $this->belongsToMany(CardModel::class);
    }
}
