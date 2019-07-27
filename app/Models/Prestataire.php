<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 26 Jul 2019 08:42:32 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Prestataire.
 *
 * @property int                                      $id
 * @property string                                   $ninea
 * @property int                                      $bp
 * @property int                                      $telephone
 * @property int                                      $fax
 * @property string                                   $email
 * @property string                                   $registreCommerce
 * @property \Carbon\Carbon                           $deleted_At
 * @property string                                   $uuid
 * @property int                                      $types_id
 * @property string                                   $raisonSociale
 * @property int                                      $performances_id
 * @property int                                      $agrements_id
 * @property \Carbon\Carbon                           $created_at
 * @property \Carbon\Carbon                           $updated_at
 * @property \App\Models\Agrement                     $agrement
 * @property \App\Models\Performance                  $performance
 * @property \App\Models\Type                         $type
 * @property \Illuminate\Database\Eloquent\Collection $agrements
 * @property \Illuminate\Database\Eloquent\Collection $activites
 * @property \Illuminate\Database\Eloquent\Collection $secteurs_activites_prestataires
 */
class Prestataire extends Eloquent
{
    protected $casts = [
        'bp' => 'int',
        'telephone' => 'int',
        'fax' => 'int',
        'types_id' => 'int',
        'performances_id' => 'int',
        'agrements_id' => 'int',
    ];

    protected $dates = [
        'deleted_At',
    ];

    protected $fillable = [
        'ninea',
        'bp',
        'telephone',
        'fax',
        'email',
        'registreCommerce',
        'deleted_At',
        'uuid',
        'types_id',
        'raisonSociale',
        'performances_id',
        'agrements_id',
    ];

    public function agrement()
    {
        return $this->belongsTo(\App\Models\Agrement::class, 'agrements_id');
    }

    public function performance()
    {
        return $this->belongsTo(\App\Models\Performance::class, 'performances_id');
    }

    public function type()
    {
        return $this->belongsTo(\App\Models\Type::class, 'types_id');
    }

    public function agrements()
    {
        return $this->belongsToMany(\App\Models\Agrement::class, 'agrements_has_prestataires', 'prestataires_id', 'agrements_id');
    }

    public function activites()
    {
        return $this->belongsToMany(\App\Models\Activite::class, 'prestataires_activites', 'prestataires_id', 'activites_id');
    }

    public function secteurs_activites_prestataires()
    {
        return $this->hasMany(\App\Models\SecteursActivitesPrestataire::class, 'prestataires_id');
    }
}
