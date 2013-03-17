<?php

namespace Jfsimon\Work\Service;

use Jfsimon\Work\Model\Reference;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface GitApiInterface
{
    public function getCurrentRepository();
    public function getCurrentBranch();

    public function fetch($remote);
    public function rebase(Reference $reference);

    public function hasBranch($name);
    public function createBranch($name, Reference $base);
    public function openBranch($name);
    public function deleteBranch($name);

    public function stash();
    public function stashPop($id);

    public function commit($message);
    public function push();
}
