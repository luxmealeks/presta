<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestatairesTable extends Migration
{
    /**
     * Schema table name to migrate.
     *
     * @var string
     */
    public $tableName = 'prestataires';

    /**
     * Run the migrations.
     *
     * @table prestataires
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('ninea', 45);
            $table->integer('bp')->nullable();
            $table->integer('telephone')->nullable();
            $table->integer('fax')->nullable();
            $table->string('email', 45)->nullable();
            $table->string('registreCommerce', 45);
            $table->timestamp('deleted_At')->nullable()->default(null);
            $table->char('uuid', 36);
            $table->integer('types_id')->unsigned();
            $table->string('raisonSociale', 100);
            $table->integer('performances_id')->unsigned();
            $table->integer('agrements_id')->unsigned();

            $table->index(['performances_id'], 'fk_prestataires_performances1_idx');

            $table->index(['agrements_id'], 'fk_prestataires_agrements1_idx');

            $table->index(['types_id'], 'fk_prestataires_types_idx');
            $table->nullableTimestamps();

            $table->foreign('types_id', 'fk_prestataires_types_idx')
                ->references('id')->on('types')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('performances_id', 'fk_prestataires_performances1_idx')
                ->references('id')->on('performances')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('agrements_id', 'fk_prestataires_agrements1_idx')
                ->references('id')->on('agrements')
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
