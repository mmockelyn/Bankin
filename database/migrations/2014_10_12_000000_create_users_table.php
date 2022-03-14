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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('agent')->default(false);
            $table->enum('step_open_account', ['STARTING', 'COMPLETED', 'ACCEPTED', 'DECLINED', 'TERMINATED']);
            $table->boolean('tos')->default(false);
            $table->boolean('signated')->default(false);
            $table->timestamp('signated_at');
            $table->rememberToken();
            $table->timestamps();
            $table->bigInteger('agent_id')->nullable();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
