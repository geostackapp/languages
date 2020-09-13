<?php

namespace GeoStack\Languages\Geonames;

use Illuminate\Support\Collection;

class Processor extends \GeoStack\Support\Geonames\Processor
{
    public string $path = __DIR__ . '/../../data/';
    public string $original = 'languages.txt';

    /**
     * @return static
     */
    public static function make()
    {
        return new static();
    }

    public function convert()
    {
        $path = sprintf('%s%s', $this->path, $this->original);

        return Collection::make($this->process($path));
    }

    public function format(array $data, $row): ?array
    {
        if ($row == 0 || empty($data[0])) {
            return null;
        }

        return [
            'code' => $data[0],
            'name' => $data[3],
        ];
    }
}