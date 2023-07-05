<?php

namespace AppwiseLabs\LaravelDocs\Http\Controllers;

use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;

class DocsController
{
    public function json()
    {
        return response()->json(
            $this->get_json()
        );
    }

    public function any($path)
    {
        return response()->json(
            $this->get_json($path)
        );
    }

    protected function format_path($path = null) {
        if($path) {
            return dirname(config('laravel-docs.file')) . '/' . $path;
        }

        return config('laravel-docs.file');
    }

    protected function validate_file_is_safe($path) {
        $path = realpath($path);
        if(!Str::startsWith($path, base_path())) {
            throw new \Exception('Invalid path');
        }

        if(!Str::endsWith($path,  ['.json', '.yaml'])) {
            throw new \Exception('Invalid file type');
        }
    }

    protected function validate_file_exists($path) {
        if(!file_exists($path)) {
            throw new \Exception('File not found');
        }
    }

    protected function get_json($path = null) {
        $path = $this->format_path($path);

        $this->validate_file_is_safe($path);
        $this->validate_file_exists($path);

        $content = file_get_contents($path);
        if(Str::endsWith($path, '.yaml')) {
            $content = $this->parse_yaml($content);
        }

        return json_decode($content, true);
    }

    protected function parse_yaml(string $content) {
        if(extension_loaded('yaml')) {
            return yaml_parse($content);
        }

        $content = Yaml::parse($content, Yaml::PARSE_OBJECT_FOR_MAP);

        return json_encode($content);
    }
}
