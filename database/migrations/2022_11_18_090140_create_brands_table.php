<?php

use App\Models\Advertiser;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Advertiser::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->text('about')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('map')->nullable();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    public function down()
    {
        Schema::dropIfExists('brands');
    }
};
