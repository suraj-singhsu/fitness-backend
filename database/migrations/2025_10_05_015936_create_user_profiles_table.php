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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('membership_id')->unique();
            $table->date('join_date')->nullable();
            $table->enum('plan_type', ['monthly', 'quarterly', 'half_yearly', 'yearly'])->default('monthly');
            $table->date('plan_start_date')->nullable();
            $table->date('plan_end_date')->nullable();
            $table->string('fitness_goal')->nullable();
            $table->decimal('height_cm', 5, 2)->nullable();
            $table->decimal('weight_kg', 5, 2)->nullable();
            $table->decimal('bmi', 5, 2)->nullable();
            $table->unsignedBigInteger('trainer_id')->nullable();
            $table->enum('subscription_status', ['active', 'inactive', 'expired', 'pending'])->default('inactive');
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('trainer_id')->references('id')->on('users')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
};
