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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string("mobile_number",13)->after("email");
            $table->string("mobile_verification_code",6)->after("email_verified_at")->nullable();
            $table->string("otp",6)->after("password")->nullable();
            $table->timestamp("mobile_verified_at")->after("mobile_verification_code")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->removeColumn("mobile_number");
            $table->removeColumn("mobile_verification_code");
            $table->removeColumn("otp");
            $table->removeColumn("mobile_verified_at");
        });
    }
};
