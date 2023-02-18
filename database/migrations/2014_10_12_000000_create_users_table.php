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
            $table->integer('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('education')->nullable();
            $table->string('the_description')->nullable();
            $table->string('Linkedin_link')->nullable();
            $table->string('job_position')->nullable();
            $table->string('certificates_and_credits')->nullable();
            $table->string('experience')->nullable();
            $table->string('skills')->nullable();
            $table->string('address')->nullable();
            $table->string('cv_pdf')->nullable();
            $table->string('image')->default('icon.png');
            $table->string('role')->default('user');
            $table->string('status')->default('accepted');
            $table->softDeletes();
            $table->rememberToken();
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
