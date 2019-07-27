<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jul 2019 08:42:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Activite
 * 
 * @property int $id
 * @property string $nom
 * @property string $uuid
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $prestataires
 * @property \App\Models\SecteursActivitesPrestataire $secteurs_activites_prestataire
 *
 * @package App\Models
 */
class Activite extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $fillable = [
		'nom',
		'uuid'
	];

	public function prestataires()
	{
		return $this->belongsToMany(\App\Models\Prestataire::class, 'prestataires_activites', 'activites_id', 'prestataires_id');
	}

	public function secteurs_activites_prestataire()
	{
		return $this->hasOne(\App\Models\SecteursActivitesPrestataire::class, 'secteursActivites_id');
	}
}
