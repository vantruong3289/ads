<?php

use App\Enums\WatchEnum;
use App\Models\Ads;
use App\Models\Brand;
use App\Models\Consumer;
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
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Consumer::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Brand::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Ads::class)->nullable()->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('currency')->default('VND');
            $table->float('money')->default(0);
            $table->float('voucher')->default(0);
            $table->unsignedTinyInteger('status')->default(WatchEnum::WAITING->value);

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
        Schema::dropIfExists('watches');
    }
};
