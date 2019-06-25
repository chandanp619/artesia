<?php

namespace App\Controllers\Helpers;

use App\Debug;

trait Components
{

    private function getComponentMeta($fields, $componentPrefix = '')
    {
        if (gettype($fields) === 'array') {
            return array_map(function ($field) use ($componentPrefix) {
                return $this->getComponentMeta($field, $componentPrefix);
            }, $fields);
        } else {
            return $this->getMeta($fields, $componentPrefix);
        }
    }

    private function getComponentMethodMeta($fields, $componentPrefix = '')
    {
        if (gettype($fields) === 'array') {
            $nameArray = [];
            foreach ($fields as $field) {
                $nameArray[$this->camelToSnake($field)] = $field;
            }
            return array_map(function ($name) use ($componentPrefix) {
                return $this->getComponentMethodMeta($name, $componentPrefix);
            }, $nameArray);
        } else {
            return $this->$fields($componentPrefix);
        }
    }

    //
    // Internal function used by getComponentMetaGroup for recursion over items
    //
    private function componentMetaGroupItem($container, $fields, $groupItemIndex)
    {
        if (gettype($fields) === 'array') {
            $result = [];
            foreach ($fields as $public_name => $meta_name) {
                $item = $this->componentMetaGroupItem($container, $meta_name, $groupItemIndex);
                if ($item !== null && $item !== '' && !empty($item)) {
                    $result[$public_name] = $item;
                }
            }
            return $result;
        } else {
            return $this->getMeta($fields, "{$container}[$groupItemIndex]/");
        }
    }

    private function getComponentMetaGroup($container, $fields, $max)
    {
        $result = [];
        for ($i = 0; $i < $max; $i++) {
            $item = $this->componentMetaGroupItem($container, $fields, $i);
            if (!empty($item)) {
                $result[$i] = $item;
            }
        }
        return $result;
    }

    private function camelToSnake($input)
    {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }
}
