<?php

namespace Jfsimon\Work\Infra;

use Github\Client;
use Jfsimon\Work\Service\GithubApiInterface;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class KnpGithubApi implements GithubApiInterface
{
    private $client;

    public function __construct($token, $secret)
    {
        $this->client = new Client($token, $secret, Client::AUTH_HTTP_TOKEN);
    }

    public function getIssue($owner, $repository, $id)
    {
        return $this->client->api('issue')->show($owner, $repository, $id);
    }
}
