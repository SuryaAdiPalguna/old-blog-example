<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', fn($query) => $query->where('slug', $category));
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->whereHas('author', fn($query) => $query->where('username', $author));
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

// class Post
// {
//     private static $posts = [
//         [
//             'title' => 'Judul Post Pertama',
//             'slug' => 'judul-post-pertama',
//             'author' => 'I Made Surya Adi Palguna',
//             'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, non? Error, itaque. Veritatis, voluptatem? Mollitia corrupti omnis, tenetur odit suscipit inventore temporibus non. Eligendi voluptatibus quo pariatur, unde quas enim cupiditate quam, dolor, voluptatem porro et beatae temporibus aut. Doloribus expedita suscipit consequatur rerum soluta eligendi, asperiores natus eos blanditiis iste totam voluptatibus placeat vitae. Alias eum non doloribus accusantium, dignissimos doloremque dolorum aliquam! Ducimus voluptatem rerum quidem, ab at sapiente neque ut! Sunt ratione laborum laudantium obcaecati necessitatibus nemo, itaque facere debitis, quis a ea labore quod amet velit similique, quisquam vitae numquam ipsam unde molestiae sed ducimus perspiciatis?'
//         ],
//         [
//             'title' => 'Judul Post Kedua',
//             'slug' => 'judul-post-kedua',
//             'author' => 'Ananda Putra',
//             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas sapiente quibusdam vel nobis quisquam dicta eum molestiae laborum cumque impedit odit doloremque, ducimus accusamus nihil excepturi veniam totam distinctio possimus dolores eos iste ullam. Adipisci natus asperiores voluptatem, magnam perspiciatis itaque officiis tempore architecto maiores et sapiente consequuntur nam vitae suscipit eos quam voluptate similique possimus quod iusto officia unde repellendus? Corporis explicabo fugiat laudantium magnam excepturi sapiente et architecto! Commodi iure consequuntur exercitationem aliquid est? Vel officia accusantium similique iure aliquid dignissimos fugiat quaerat modi repellendus, quis sequi minus voluptatem tenetur nesciunt cum distinctio a incidunt at ipsam laudantium?'
//         ]
//     ];

//     public static function all()
//     {
//         return collect(self::$posts);
//     }

//     public static function find($slug)
//     {
//         $posts = static::all();
//         return $posts->firstWhere('slug', $slug);
//     }
// }
