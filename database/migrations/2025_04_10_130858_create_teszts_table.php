<?php

use App\Models\teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('teszts');
            $table->timestamps();
        });


        teszt::create([
            'kerdes' => 'Mikor volt a mohácsi csata?',
            'v1' => '1526',
            'v2' => '1848',
            'v3' => '1456',
            'v4' => '1956',
            'helyes' => 'v1',
            'kategoriaId' => 1
        ]);


        teszt::create([
            'kerdes' => 'Melyik állat emlős?',
            'v1' => 'Kígyó',
            'v2' => 'Delfin',
            'v3' => 'Hal',
            'v4' => 'Béka',
            'helyes' => 'v2',
            'kategoriaId' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
