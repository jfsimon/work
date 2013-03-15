<?php

namespace Jfsimon\Work\Service;

use Jfsimon\Work\Model\Repository;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface GithubApiInterface
{
    public function getIssue(Repository $repository, $id);
}
