<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jul 2019 08:42:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class SecteursActivitesPrestataire
 * 
 * @property int $secteursActivites_id
 * @property int $prestataires_id
 * 
 * @property \App\Models\Prestataire $prestataire
 * @property \App\Models\Activite $activite
 *
 * @package App\Models
 */
class SecteursActivitesPrestataire extends Eloquent
{
	protected $primaryKey = 'secteursActivites_id';
	public $timestamps = false;

	protected $casts = [
		'prestataires_id' => 'int'
	];

	protected $fillable = [
		'prestataires_id'
	];

	public function prestataire()
	{
		return $this->belongsTo(\App\Models\Prestataire::class, 'prestataires_id');
	}

	public function activite()
	{
		return $this->belongsTo(\App\Models\Activite::class, 'secteursActivites_id');
	}
}
