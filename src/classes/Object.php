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
     * @param array $data
     */
    public function __construct(Array $data = [])
    {
        foreach ($data as $key => $value) {

            $key = lcfirst($key);
            if (property_exists($this, $key)) {

                $this->{$key} = $value;
            } else {

                $key = strtolower($key);
                if (property_exists($this, $key)) {

                    $this->{$key} = $value;
                }
            }
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $properties = get_object_vars($this);
        $properties = array_filter($properties, function ($item) {
            return ($item !== NULL);
        });
        $properties = static::prepareKey($properties);
        return count($properties) ? json_encode($properties) : '%7B%7D';
    }

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
        return new static(get_object_vars($record));
    }

    /**
     * @return string
     */
    public static function className()
    {
        return get_called_class();
    }

    /**
     * @param array $arr
     * @return array
     */
    protected static function prepareKey(Array $arr)
    {
        $res = [];
        foreach ($arr as $key => $value) {
            $key = ucfirst($key);
            if (is_array($value)) {
                $res[$key] = static::prepareKey($value);
            } else {
                $res[$key] = $value;
            }
        }
        return $res;
    }

}
