<?php

if (!function_exists('cms')) {
    /**
     * Retrieve site content value by key.
     * 
     * @param string $key
     * @param string|null $default
     * @return string|null
     */
    function cms($key, $default = null)
    {
        static $cms_cache = [];

        if (array_key_exists($key, $cms_cache)) {
            return $cms_cache[$key];
        }

        try {
            $item = \App\Models\SiteContent::where('key', $key)->first();
            
            if ($item && $item->type === 'json') {
                $cms_cache[$key] = json_decode($item->value, true) ?: [];
                return $cms_cache[$key];
            }

            $value = $item ? $item->value : $default;
            $cms_cache[$key] = $value;
            return $value;
        } catch (\Exception $e) {
            $cms_cache[$key] = $default;
            return $default;
        }
    }
}
