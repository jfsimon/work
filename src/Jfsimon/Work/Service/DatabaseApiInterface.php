<?php

namespace Jfsimon\Work\Service;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface DatabaseApiInterface
{
    public function load($type, $id);
    public function find($dql, array $parameters = array());

    public function persist($object);
    public function merge($object);
}
