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
        Schema::create('ibans', function (Blueprint $table) {
            $table->id();
            $table->string('iban', 34);
            $table->string('country', 2)->default('FR');
            $table->integer('key');
            $table->string('code_banque');
            $table->string('code_guichet');
            $table->string('number_account');
            $table->integer('key_rib');
            $table->timestamps();

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
        Schema::dropIfExists('ibans');
    }
};
