<?php

/**
 * Created by Reliese Model.
 */

namespace App\Modules\CRM\CardProgress\Models;

use App\Modules\CRM\Card\Models\CardModel;
use App\Modules\CRM\Department\Models\DepartmentModel;
use App\Modules\CRM\Lead\Models\LeadModel;
use App\Modules\CRM\Timeline\Models\TimelineModel;
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
class CardProgressModel extends Model
{
	protected $table = 'crm_card_progress';

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

    public function CardModel()
    {
        return $this->belongsTo(CardModel::class);
    }

    public function DepartmentModel()
    {
        return $this->belongsTo(DepartmentModel::class);
    }

    public function LeadModel()
    {
        return $this->belongsTo(LeadModel::class);
    }

    public function TimelineModel()
    {
        return $this->belongsTo(TimelineModel::class);
    }
}
