<?php

namespace Jfsimon\Work\Service;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface GithubApiInterface
{
    public function getIssue($owner, $repository, $id);
}
