<?php

namespace Jfsimon\Work\Service;

use Jfsimon\Work\Model\Repository;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface GitApiInterface
{
    public function getCurrentRepository();
    public function getCurrentBranch();

    public function fetch(Repository $repository);
    public function rebase(Repository $repository, $branchName);

    public function hasBranch(Repository $repository, $name);
    public function createBranch(Repository $repository, $name, $base);
    public function openBranch(Repository $repository, $name);
    public function deleteBranch(Repository $repository, $name);

    public function stash();
    public function stashPop($id);

    public function commit($message);
    public function push();
}
