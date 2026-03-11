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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Pivot table
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            /* Create a constrain and delete all records related to this to 
            avoid records without reference (orphans) */
            $table->foreignIdFor(App\Models\Job::class, 'job_listing_id')
                ->constrained()->cascadeOnDelete();
            $table->foreignIdFor(App\Models\Tag::class)
                ->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
        Schema::dropIfExists('tags');
    }
};
