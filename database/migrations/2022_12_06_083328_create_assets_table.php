<?php

use App\Models\Brand;
use App\Models\Consumer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Consumer::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('currency')->nullable();
            $table->float('money', 16)->nullable();
            $table->unsignedBigInteger('view')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assets');
    }
};
