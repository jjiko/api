<?php namespace Jiko\Api;

use Illuminate\Database\Eloquent\Model as Model;

class ApiCache extends Model
{
  protected $table = 'site_cache';
  protected $fillable = ['category', 'key', 'data'];
  protected $casts = [
    'data' => 'json'
  ];

  public function __construct(array $attributes = [])
  {
    parent::__construct($attributes);

    $this->connection = 'j5';
  }

  public function getDataAttribute($value)
  {
    return json_decode($value);
  }
}