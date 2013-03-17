<?php

namespace Jfsimon\Work\Infra;

use Jfsimon\Work\Model\Reference;
use Jfsimon\Work\Service\GitApiInterface;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class ShellGitApi implements GitApiInterface
{
    public function getCurrentRepository()
    {
        // TODO: Implement getCurrentRepository() method.
    }

    public function getCurrentBranch()
    {
        // TODO: Implement getCurrentBranch() method.
    }

    public function fetch($remote)
    {
        // TODO: Implement fetch() method.
    }

    public function rebase(Reference $reference)
    {
        // TODO: Implement rebase() method.
    }

    public function hasBranch($name)
    {
        // TODO: Implement hasBranch() method.
    }

    public function createBranch($name, Reference $base)
    {
        // TODO: Implement createBranch() method.
    }

    public function openBranch($name)
    {
        // TODO: Implement openBranch() method.
    }

    public function deleteBranch($name)
    {
        // TODO: Implement deleteBranch() method.
    }

    public function stash()
    {
        // TODO: Implement stash() method.
    }

    public function stashPop($id)
    {
        // TODO: Implement stashPop() method.
    }

    public function commit($message)
    {
        // TODO: Implement commit() method.
    }

    public function push()
    {
        // TODO: Implement push() method.
    }

    private function execute($command)
    {
        return shell_exec($command);
    }
}
