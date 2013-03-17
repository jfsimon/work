<?php

namespace Jfsimon\Work\Model;

use Jfsimon\Work\Service\GitApiInterface;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class Reference
{
    const TYPE_BRANCH = 1;
    const TYPE_COMMIT = 2;
    const TYPE_TAG    = 3;

    private $remote;
    private $object;
    private $type;

    public function __construct($remote, $object, $type = self::TYPE_BRANCH)
    {
        $this->remote = $remote;
        $this->object = $object;
        $this->type = $type;
    }

    public function fetch(GitApiInterface $api)
    {
        return $api->fetch($this->remote);
    }

    public function isRelative()
    {
        return self::TYPE_BRANCH === $this->type;
    }

    public function getObjectIdentifier()
    {
        return $this->isRelative() ? sprintf('%s/%s', $this->remote, $this->object) : $this->object;
    }

    public function getBranchNameSuffix()
    {
        return $this->isRelative() ? sprintf('-%s', $this->object) : '';
    }
}
