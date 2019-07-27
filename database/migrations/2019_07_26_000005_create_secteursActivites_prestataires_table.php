<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecteursactivitesPrestatairesTable extends Migration
{
    /**
     * Schema table name to migrate.
     *
     * @var string
     */
    public $tableName = 'secteursActivites_prestataires';

    /**
     * Run the migrations.
     *
     * @table secteursActivites_prestataires
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('secteursActivites_id');
            $table->integer('prestataires_id')->unsigned();

            $table->index(['prestataires_id'], 'fk_secteursActivites_has_prestataires_prestataires1_idx');

            $table->index(['secteursActivites_id'], 'fk_secteursActivites_has_prestataires_secteursActivites1_idx');

            $table->foreign('secteursActivites_id', 'fk_secteursActivites_has_prestataires_secteursActivites1_idx')
                ->references('id')->on('activites')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('prestataires_id', 'fk_secteursActivites_has_prestataires_prestataires1_idx')
                ->references('id')->on('prestataires')
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
