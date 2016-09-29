<?php namespace Jiko\Api;

use Illuminate\Database\Eloquent\Model as Model;

class ApiCache extends Model
{
  protected $table = 'api_cache';
  protected $fillable = ['key', 'data'];
  public $timestamps = true;
}