<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->boolean('aktivna');
            $table->timestamps();
            $table->string("adresa");
            $table->string("status");
            $table->dateTime("datum_narucivanja");
            $table->string("kolicina");
            $table->dateTime("datum_isporuke")->nullable();
        });
        \Illuminate\Support\Facades\Artisan::call('db:seed', [
            '--class' => 'DatabaseSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
