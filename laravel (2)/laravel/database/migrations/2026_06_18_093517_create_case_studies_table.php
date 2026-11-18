<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // BIM Services, Structural Services, etc.
            $table->string('industry_tag'); // Transportation, Data Centres, etc.
            $table->string('cover_image'); // filename only, stored in public/casestudy/
            $table->text('short_description');

            // Single Page Fields
            $table->string('client')->nullable();
            $table->string('location')->nullable();
            $table->string('service')->nullable();
            $table->string('industry')->nullable();
            $table->string('timeline')->nullable();
            $table->string('team_size')->nullable();
            $table->longText('project_overview')->nullable();
            $table->string('challenge_heading')->nullable();
            $table->longText('challenge_body')->nullable();
            $table->json('challenge_points')->nullable(); // ["point 1", "point 2"]
            $table->longText('solution')->nullable();
            $table->longText('results')->nullable();

            // SEO Fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->boolean('robots_index')->default(true);
            $table->boolean('robots_follow')->default(true);
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('image_alt')->nullable();
            $table->string('image_title')->nullable();
            $table->string('schema_type')->default('Article');
            $table->boolean('sitemap_include')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};