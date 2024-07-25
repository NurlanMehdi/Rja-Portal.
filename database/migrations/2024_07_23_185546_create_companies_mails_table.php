<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companies_mails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('email');
            $table->timestamps();
            
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });

        // Transfer existing emails to the new table
        DB::table('companies')->get()->each(function ($company) {
            DB::table('companies_mails')->insert([
                'company_id' => $company->id,
                'email' => $company->email,
                'created_at' => $company->created_at,
                'updated_at' => $company->updated_at,
            ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies_mails');
    }
};
