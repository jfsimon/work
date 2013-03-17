<?php

namespace Jfsimon\Work\Infra;

use Jfsimon\Work\Service\DatabaseApiInterface;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class DoctrineDatabaseApi implements DatabaseApiInterface
{
    private $entityManager;

    public function __construct($filename)
    {

    }
}
