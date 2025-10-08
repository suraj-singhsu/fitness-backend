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
            
            $table->string('phone')->nullable()->unique();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('role_id')->default(2)->comment('1=Sadmin 2=Memeber 3=Trainer');

            // Step 2: Add foreign key
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->string('profile_image')->nullable();
            $table->boolean('status')->default(true);
            
            // Verification flags
            $table->boolean('is_email_verified')->default(false);
            $table->boolean('is_phone_verified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
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
