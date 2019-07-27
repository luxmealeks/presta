<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jul 2019 08:42:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PrestatairesActivite
 * 
 * @property int $prestataires_id
 * @property int $activites_id
 * 
 * @property \App\Models\Activite $activite
 * @property \App\Models\Prestataire $prestataire
 *
 * @package App\Models
 */
class PrestatairesActivite extends Eloquent
{
	protected $primaryKey = 'prestataires_id';
	public $timestamps = false;

	protected $casts = [
		'activites_id' => 'int'
	];

	protected $fillable = [
		'activites_id'
	];

	public function activite()
	{
		return $this->belongsTo(\App\Models\Activite::class, 'activites_id');
	}

	public function prestataire()
	{
		return $this->belongsTo(\App\Models\Prestataire::class, 'prestataires_id');
	}
}
