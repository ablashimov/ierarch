<?php

namespace Ablashimov\Container;

interface ContainerInterface
{
    public function has(string $key): bool;

    public function get(string $key);

    public function set(string $key, $value): void;
}
