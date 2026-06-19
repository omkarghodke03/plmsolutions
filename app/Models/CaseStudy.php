<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'industry_tag', 'cover_image',
        'short_description', 'client', 'location', 'service', 'industry',
        'timeline', 'team_size', 'project_overview', 'challenge_heading',
        'challenge_body', 'challenge_points', 'solution', 'results',
        'meta_title', 'meta_description', 'meta_keywords', 'canonical_url',
        'robots_index', 'robots_follow', 'og_title', 'og_description',
        'og_image', 'image_alt', 'image_title', 'schema_type', 'sitemap_include',
    ];

    protected $casts = [
        'challenge_points' => 'array',
        'robots_index'     => 'boolean',
        'robots_follow'    => 'boolean',
        'sitemap_include'  => 'boolean',
    ];

    // Accessor for full image URL
    public function getCoverImageUrlAttribute(): string
    {
        return asset('casestudy/' . $this->cover_image);
    }
}