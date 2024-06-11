<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Create TABLE ‘houses’ (
        ‘id’ Unsigned BIGINT NOT NULL AUTO_INCREMENT,
        ‘company’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
        ‘departure_station’ VARCHAR(255) NOT NULL, // impossibile che sia vuoto e quindi not null
        ‘departure_time’ TIME NOT NULL, // impossibile che sia vuoto e quindi not null
        ‘department_date’ DATE NOT NULL // impossibile che sia vuoto e quindi not null
        ‘arrival_time’ TIME NOT NULL // impossibile che sia vuoto e quindi not null
        ‘arrival_date’ DATE NOT NULL // impossibile che sia vuoto e quindi not null
        ‘train_code’ VARCHAR(255)  NOT NULL // impossibile che sia vuoto e quindi not null
        ‘number_of_carriages’ UNSIGNET TINYINT NULL
        ‘on_time’ TINYINT NOT NULL DEFAULT(1) // true è(1),non c’è boolean in mysql quindi TINTINT
        ‘cancelled’ TINYINT NOT NULL DEFAULT(0) // false è(1),non c’è boolean in mysql quindi TINTINT
        Vediamo questi nella tabella in php admin:
        ‘created_at’ TIMESTAMP NULL,  à creati per seguire ultimo inserimento
        ‘updated_at’ TIMESTAMP NULL,  à creati per seguire ultimo aggiornamento
        ‘PRIMARY KEY(‘id’)
       );
     * 
     * 
     * 
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->time('departure_time');
            $table->date('department_date');
            $table->time('arrival_time');
            $table->date('arrival_date');
            $table->string('train_code');
            $table->unsignedTinyInteger('number_of_carriages')->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
