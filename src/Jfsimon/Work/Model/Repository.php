<?php

namespace Jfsimon\Work\Model;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class Repository
{
    private $owner;
    private $name;
    private $branches;

    public function __construct($owner, $name)
    {
        $this->owner = $owner;
        $this->name = $name;
        $this->branches = new ArrayCollection();
    }

    public function updateIssue(Issue $issue)
    {

    }
}
