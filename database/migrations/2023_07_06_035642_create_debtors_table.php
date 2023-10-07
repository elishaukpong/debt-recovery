<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('debtors', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("reminder");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("email");
            $table->string("phone_number");
            $table->string("currency");
            $table->string("amount");
            $table->string("due_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debtors');
    }
};
