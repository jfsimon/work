<?php

namespace Jfsimon\Work;

use Jfsimon\Work\Infra\DoctrineDatabaseApi;
use Jfsimon\Work\Infra\KnpGithubApi;
use Jfsimon\Work\Infra\ShellGitApi;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class Factory
{
    private $config;
    private $apis;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->apis = array();
    }

    public function getDatabaseApi()
    {
        if (!isset($this->apis['database'])) {
            $this->apis['database'] = new DoctrineDatabaseApi(
                $this->config['database_file']
            );
        }

        return $this->apis['database'];
    }

    public function getGitApi()
    {
        if (!isset($this->apis['git'])) {
            $this->apis['git'] = new ShellGitApi();
        }

        return $this->apis['git'];
    }

    public function getGithubApi()
    {
        if (!isset($this->apis['github'])) {
            $this->apis['github'] = new KnpGithubApi(
                $this->config['github_token'],
                $this->config['github_secret']
            );
        }

        return $this->apis['github'];
    }
}
