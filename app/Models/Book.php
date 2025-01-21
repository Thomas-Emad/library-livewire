<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  protected $fillable = [
    'code',
    'user_id',
    'author_id',
    'publisher_id',
    'section_id',
    'shelf_id',
    'title',
    'content',
    'subjects',
    'series',
    'copies',
    'papers',
    'part_number',
    'current_unit_number',
    'row',
    'position_book',
    'photo',
    'pdf',
    'markup',
    'views'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function section()
  {
    return $this->belongsTo(Section::class);
  }
  public function shelf()
  {
    return $this->belongsTo(SectionShelf::class);
  }
  public function author()
  {
    return $this->belongsTo(Author::class);
  }
  public function publisher()
  {
    return $this->belongsTo(Publisher::class);
  }

  public function scopeOrderBooksBy($query, $orderBy)
  {
    return match ($orderBy) {
      'new' => $query->latest(),
      'old' => $query->oldest(),
      'top_views' => $query->orderBy('views', 'asc'),
    };
  }
}
