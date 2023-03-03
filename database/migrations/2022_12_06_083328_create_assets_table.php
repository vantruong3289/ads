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
            $table->foreignIdFor(Consumer::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Brand::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('currency')->default('VND');
            $table->float('money')->default(0);
            $table->float('voucher')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('assets');
    }
};
