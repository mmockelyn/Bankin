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
        Schema::create('user_pros', function (Blueprint $table) {
            $table->id();
            $table->boolean('pro_activity');
            $table->string("activity_domain");
            $table->string('activity_profession');
            $table->integer('revenue');
            $table->integer('patrimoine_immobilier')->default(0);
            $table->integer('patrimoine_financier')->default(0);

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
        Schema::dropIfExists('user_pros');
    }
};
