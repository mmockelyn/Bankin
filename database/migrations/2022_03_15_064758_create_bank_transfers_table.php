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
        Schema::create('bank_transfers', function (Blueprint $table) {
            $table->id();
            $table->float('amount');
            $table->string('reason');
            $table->string('reference')->default(Str::upper(Str::random(4)));
            $table->integer('type')->default(0)->comment("0: Immédiat / 1: Différé / 2: Permanent");
            $table->timestamp('transfer_date')->nullable();
            $table->timestamp('recurring_start')->nullable();
            $table->timestamp('recurring_end')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')
                            ->constrained()
                            ->cascadeOnUpdate()
                            ->cascadeOnDelete();

            $table->foreignId('user_beneficiary_id')
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
        Schema::dropIfExists('bank_transfers');
    }
};
