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
        Schema::create('user_justifies', function (Blueprint $table) {
            $table->id();
            $table->boolean('justify_identity');
            $table->boolean('justify_address');
            $table->boolean('justify_income');
            $table->boolean('justify_signate');
            $table->boolean('justify_rib');
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
        Schema::dropIfExists('user_justifies');
    }
};
