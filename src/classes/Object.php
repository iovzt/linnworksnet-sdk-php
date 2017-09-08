<?php

namespace Linnworks\classes;

use stdClass;

/**
 * Object class.
 *
 * @author Iskryzhytskyi Oleksandr <oleksandr.iskryzhytskyi@gmail.com>
 */
abstract class Object
{

    /**
     * @param stdClass $records
     * @return static[]
     */
    public static function populate(Array $records)
    {
        $objects = [];
        foreach ($records as $record) {

            $objects[] = static::populateOne($record);
        }
        return $objects;
    }

    /**
     * @param stdClass $record
     * @return static
     */
    public static function populateOne(stdClass $record)
    {
        $object = new static();
        foreach (get_object_vars($record) as $key => $value) {

            $key = lcfirst($key);
            $object->{$key} = $value;
        }
        return $object;
    }

    /**
     * @return string
     */
    public static function className()
    {
        return get_called_class();
    }

}
