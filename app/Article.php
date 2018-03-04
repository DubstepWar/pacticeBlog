<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @property int $id
 * @property string $name
 * @property string $alias
 * @property string $description
 * @property string $body
 * @property string $img
 * @property int|null $category_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag[] $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = ['name', 'alias', 'description', 'body', 'img', 'category_id'];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags() {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
