<?php declare(strict_types=1);

    namespace STDW\ListObject;


    interface ListObjectInterface
    {
        public static function get(string|int|float|object $element): string|int|float|object|false;

        public static function exists(string|int|float|object $item): bool;

        public static function list(): array;
    }