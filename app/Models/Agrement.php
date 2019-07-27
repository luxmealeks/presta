<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jul 2019 08:42:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Agrement
 * 
 * @property int $id
 * @property string $reference
 * @property string $classe
 * @property string $uuid
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $prestataires
 *
 * @package App\Models
 */
class Agrement extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'reference',
		'classe',
		'uuid'
	];

	public function prestataires()
	{
		return $this->hasMany(\App\Models\Prestataire::class, 'agrements_id');
	}
}
