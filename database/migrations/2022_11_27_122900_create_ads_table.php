<?php

use App\Models\Advertiser;
use App\Models\Brand;
use App\Models\Design;
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
            $table->foreignIdFor(Advertiser::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Design::class)->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->boolean('active')->default(true);
            $table->unsignedInteger('seconds')->nullable();
            $table->string('currency')->nullable();
            $table->float('money', 16)->nullable();
            $table->float('voucher', 16)->nullable();
            $table->boolean('allow', false);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('ads');
    }
};
