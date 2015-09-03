<?php
class Helper {

    public function newInstanceArgs($clz, $args=[]) {
        $rclass = new ReflectionClass($clz);
        return $rclass->newInstanceArgs($args);
    }

}