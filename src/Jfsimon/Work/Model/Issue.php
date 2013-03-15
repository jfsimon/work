<?php

namespace Jfsimon\Work\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Jfsimon\Work\Service\GithubApiInterface;
use Jfsimon\Work\Service\SystemApiInterface;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class Issue
{
    private $id;
    private $repository;
    private $title;
    private $state;
    private $url;
    private $syncedAt;
    private $branches;

    public function __construct(Repository $repository, $id)
    {
        $this->repository = $repository;
        $this->id = $id;
        $this->branches = new ArrayCollection();
    }

    public function synchronize(GithubApiInterface $api)
    {
        $data = $api->getIssue($this->repository, $this->id);
        $this->title = $data['title'];
        $this->state = $data['state'];
        $this->url = $data['url'];
        $this->syncedAt = new \DateTime();
    }

    public function browse(SystemApiInterface $system)
    {
        $system->browse($this->url);

        return $this;
    }

    public function branch($base, $subject)
    {
        $branch = new Branch($this->repository, $base, $subject, $this);
        $this->branches->add($branch);

        return $branch;
    }
}
