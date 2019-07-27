<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jul 2019 08:42:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AgrementsHasPrestataire
 * 
 * @property int $agrements_id
 * @property int $prestataires_id
 * 
 * @property \App\Models\Agrement $agrement
 * @property \App\Models\Prestataire $prestataire
 *
 * @package App\Models
 */
class AgrementsHasPrestataire extends Eloquent
{
	protected $primaryKey = 'agrements_id';
	public $timestamps = false;

	protected $casts = [
		'prestataires_id' => 'int'
	];

	protected $fillable = [
		'prestataires_id'
	];

	public function agrement()
	{
		return $this->belongsTo(\App\Models\Agrement::class, 'agrements_id');
	}

	public function prestataire()
	{
		return $this->belongsTo(\App\Models\Prestataire::class, 'prestataires_id');
	}
}
