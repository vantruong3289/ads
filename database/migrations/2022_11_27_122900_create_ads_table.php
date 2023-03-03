<?php

use App\Models\Brand;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->boolean('active')->default(true);
            $table->string('design');
            $table->unsignedInteger('seconds')->default(10);
            $table->string('currency')->default('VND');
            $table->float('money')->default(0);
            $table->float('voucher')->default(0);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('ads');
    }
};
