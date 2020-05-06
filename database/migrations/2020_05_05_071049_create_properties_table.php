<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('city');
            $table->string('area');
            $table->string('address', 1000);
            $table->string('type');
            $table->boolean('active');

            $table->integer('space');
            $table->string('space_metric');

            // TODO: Should store seprately with multiple images
            $table->string('image');

            // TODO: should store sepratly
            $table->integer('price');
            $table->string('price_metric');
            $table->integer('min_investment');
            $table->float('min_ownership');
            $table->string('price_currency');

            $table->integer('return_target_percentage');
            $table->integer('rental_yield_percentage');


            // Should be aggregate 
            $table->integer('funding_percentage');
            $table->date('funding_close_date');
            $table->integer('investors');
            $table->boolean('waitlist');


            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
