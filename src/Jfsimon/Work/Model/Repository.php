<?php

namespace Jfsimon\Work\Model;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class Repository
{
    private $name;
    private $urlPattern;
    private $officialRepo;
    private $branches;

    public function __construct($name, $urlPattern, $officialRepo)
    {
        $this->name = $name;
        $this->urlPattern = $urlPattern;
        $this->officialRepo = $officialRepo;
        $this->branches = new ArrayCollection();
    }
}
