# languages

The GeoStack Languages library provides [ISO 639-3](https://en.wikipedia.org/wiki/ISO_639-3) language names, with data provided by [GeoNames](https://www.geonames.org). This library automatically updates its data everyday.

## Installation

```bash
composer require geostack/languages
```

## Usage

```php
Language::findByCode('eng'); // ['code' => 'eng', 'name' => 'English']

// or

Language::all(); // all languages
```
