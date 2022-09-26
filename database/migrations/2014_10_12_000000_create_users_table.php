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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->unique()->nullable();
            $table->rememberToken();
            $table->timestamps();

            //  Stripe Customer Object:
            $table->string('stripe_id')->nullable();
            $table->string('stripe_discount')->nullable();
            $table->string('address_1', 256)->nullable();
            $table->string('address_2', 256)->nullable();
            $table->string('city', 256)->nullable();
            $table->string('country', 256)->nullable();
            $table->string('postal_code', 256)->nullable();
            $table->text('description')->nullable();
            $table->json('metadata')->nullable();
            $table->string('currency')->default('US')->nullable();
            $table->string('default_source')->nullable();
            $table->boolean('delinquent')->default(false)->nullable();
            $table->boolean('livemode')->default(false)->nullable();
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
