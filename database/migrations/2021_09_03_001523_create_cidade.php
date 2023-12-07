<?php

use App\Models\Estado;
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
    public function up(): void
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->integer('cidade_id')->unsigned();
            $table->foreignIdFor(Estado::class)->constrained();
            $table->string('nome',191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->dropForeign(['estado_id']);
        });
        Schema::dropIfExists('cidades');
    }
};
