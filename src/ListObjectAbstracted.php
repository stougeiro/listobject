<?php declare(strict_types=1);

    namespace STDW\ListObject;


    abstract class ListObjectAbstracted implements ListObjectInterface
    {
        protected static array $collection = [];


        public static function get(string|int|float|object $element): string|int|float|object|false
        {
            foreach (static::$collection as $item) {
                if ($element == $item) {
                    return $item;
                }
            }

            return false;
        }

        public static function exists(string|int|float|object $item): bool
        {
            return in_array($item, static::$collection);
        }

        public static function list(): array
        {
            return static::$collection;
        }
    }