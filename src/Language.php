<?php

namespace GeoStack\Languages;

use Illuminate\Support\Collection;
use GeoStack\Languages\Geonames\Processor;

class Language
{
    protected Collection $data;

    public function __construct()
    {
        $this->data = Processor::make()->convert();
    }

    /**
     * @return static
     */
    public static function make()
    {
        return new static();
    }

    /**
     * @param $code
     * @return array
     */
    public static function findByCode($code)
    {
        return static::make()->data->where('code', $code)->first();
    }

    /**
     * @return array
     */
    public static function all()
    {
        return static::make()->data->toArray();
    }
}