<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgrementsHasPrestatairesTable extends Migration
{
    /**
     * Schema table name to migrate.
     *
     * @var string
     */
    public $tableName = 'agrements_has_prestataires';

    /**
     * Run the migrations.
     *
     * @table agrements_has_prestataires
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('agrements_id');
            $table->integer('prestataires_id')->unsigned();

            $table->index(['prestataires_id'], 'fk_agrements_has_prestataires_prestataires1_idx');

            $table->index(['agrements_id'], 'fk_agrements_has_prestataires_agrements1_idx');

            $table->foreign('agrements_id', 'fk_agrements_has_prestataires_agrements1_idx')
                ->references('id')->on('agrements')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('prestataires_id', 'fk_agrements_has_prestataires_prestataires1_idx')
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
