<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\BlogCategory
 *
 * @property int $id
 * @property int $parent_id
 * @property string $slug
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogCategory whereUpdatedAt($value)
 */
	class BlogCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogPost
 *
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property string $slug
 * @property string $title
 * @property string|null $excerpt
 * @property string $content_raw
 * @property string $content_html
 * @property int $is_published
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereContentHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereContentRaw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BlogPost whereUserId($value)
 */
	class BlogPost extends \Eloquent {}
}

