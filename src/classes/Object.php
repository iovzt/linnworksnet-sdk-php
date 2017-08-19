<?php

namespace Linnworks\classes;

/**
 * Object class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
abstract class Object
{

    /**
     * @param array $records
     * @return static[]
     */
    public static function populate(Array $records)
    {
        $objects = [];
        foreach ($records as $attributes) {

            $object = new static();
            foreach ($attributes as $key => $value) {

                $key = lcfirst($key);
                $object->{$key} = $value;
            }
            $objects[] = $object;
        }
        return $objects;
    }

    /**
     * @param array $attributes
     * @return static
     */
    public static function populateOne(Array $attributes)
    {
        $objects = static::populate([$attributes]);
        return reset($objects);
    }

    /**
     * @return string
     */
    public static function className()
    {
        return get_called_class();
    }

}
