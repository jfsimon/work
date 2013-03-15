<?php

namespace Jfsimon\Work\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Jfsimon\Work\Service\GitApiInterface;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class Branch
{
    private $repository;
    private $base;
    private $subject;
    private $issue;
    private $commits;
    private $stash;

    public function __construct(Repository $repository, $base, $subject, Issue $issue = null)
    {
        $this->repository = $repository;
        $this->base = $base;
        $this->subject = $subject;
        $this->issue = $issue;
        $this->commits = new ArrayCollection();
    }

    public function open(GitApiInterface $api)
    {
        $api->openBranch($this->repository, $this->getBranchName());
        $api->stashPop($this->stash);

        return $this;
    }

    public function close(GitApiInterface $api)
    {
        $this->stash = $api->stash();

        return $this;
    }

    public function commit(GitApiInterface $api, $message, $subject = null)
    {
        $commit = new Commit($this, $message, $subject ?: $this->subject);
        $commit->write($api);
        $this->commits->add($commit);

        return $commit;
    }

    public function push(GitApiInterface $api)
    {
        $api->push($this->repository, $this->getBranchName());
        $this->commits->map(function (Commit $commit) { return $commit->push(); });

        return $this;
    }

    private function getBranchName()
    {
        return sprintf('issue-%s-%s', $this->issue, $this->base);
    }
}
