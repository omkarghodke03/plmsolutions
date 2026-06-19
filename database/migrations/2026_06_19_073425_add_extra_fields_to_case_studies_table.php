<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->string('approach_heading')->nullable()->after('results');
            $table->longText('approach_body')->nullable()->after('approach_heading');
            $table->json('key_deliverables')->nullable()->after('approach_body');
            $table->json('delivery_process')->nullable()->after('key_deliverables');
            // delivery_process format: [{"step":"01","title":"Survey","body":"..."}]
            $table->json('gallery_images')->nullable()->after('delivery_process');
            // gallery_images format: ["img1.png","img2.png","img3.png"]
            $table->string('gallery_caption')->nullable()->after('gallery_images');
            $table->string('testimonial_quote')->nullable()->after('gallery_caption');
            $table->string('testimonial_name')->nullable()->after('testimonial_quote');
            $table->string('testimonial_role')->nullable()->after('testimonial_name');
            $table->string('related_service_label')->nullable()->after('testimonial_role');
            $table->string('related_service_url')->nullable()->after('related_service_label');
        });
    }

    public function down(): void
    {
        Schema::table('case_studies', function (Blueprint $table) {
            $table->dropColumn([
                'approach_heading','approach_body','key_deliverables',
                'delivery_process','gallery_images','gallery_caption',
                'testimonial_quote','testimonial_name','testimonial_role',
                'related_service_label','related_service_url',
            ]);
        });
    }
};