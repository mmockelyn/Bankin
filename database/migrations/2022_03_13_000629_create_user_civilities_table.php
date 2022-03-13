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
        Schema::create('user_civilities', function (Blueprint $table) {
            $table->id();
            $table->enum('type_account', ["INDIVIDUAL", "JOIN", "PROFESSIONNAL"]);
            $table->enum('civility', ['M', 'MME']);
            $table->string('birthname');
            $table->string('martialname')->nullable();
            $table->string('name');
            $table->boolean('bzhm_customer')->default(false);
            $table->boolean('newsletter_email')->default(false);
            $table->boolean('newsletter_sms')->default(false);
            $table->boolean('newsletter_phone')->default(false);
            $table->boolean('newsletter_paper')->default(false);
            $table->timestamp('birthdate');
            $table->string('country_birth');
            $table->string('city_birth');
            $table->string('nationality');

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_civilities');
    }
};
