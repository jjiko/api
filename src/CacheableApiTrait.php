<?php namespace Jiko\Api;

trait CacheableApiTrait {
  public static function readCache($key)
  {
    return ApiCache::firstOrCreate(['key' => $key]);
  }

  public function cacheIsFresh($cache, $expires=3600)
  {
    if((time() - strtotime($cache->updated_at)) < $expires) {
      if(!empty($cache->data)) return json_decode($cache->data);
    }

    return false;
  }
}