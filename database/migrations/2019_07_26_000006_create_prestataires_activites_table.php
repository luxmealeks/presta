<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestatairesActivitesTable extends Migration
{
    /**
     * Schema table name to migrate.
     *
     * @var string
     */
    public $tableName = 'prestataires_activites';

    /**
     * Run the migrations.
     *
     * @table prestataires_activites
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('prestataires_id');
            $table->integer('activites_id')->unsigned();

            $table->index(['prestataires_id'], 'fk_prestataires_has_activites_prestataires1_idx');

            $table->index(['activites_id'], 'fk_prestataires_has_activites_activites1_idx');

            $table->foreign('prestataires_id', 'fk_prestataires_has_activites_prestataires1_idx')
                ->references('id')->on('prestataires')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('activites_id', 'fk_prestataires_has_activites_activites1_idx')
                ->references('id')->on('activites')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
