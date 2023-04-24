<?php

declare(strict_types=1);

namespace App\System;

class ServiceManager
{
    private array $config;
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function get(string $input)
    {
        if ($input === 'config') {
            return $this->config;
        }

        if (isset($this->config['factories'][$input])){
            return (new $this->config['factories'][$input])($this);
        }

        throw new \Exception('Service is not known');
    }
}