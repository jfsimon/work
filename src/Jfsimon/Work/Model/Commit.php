<?php

namespace Jfsimon\Work\Model;

use Jfsimon\Work\Service\GitApiInterface;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
class Commit
{
    private $id;
    private $issue;
    private $subject;
    private $message;
    private $pushed;
    private $createdAt;

    public function __construct(Branch $issue, $message, $subject)
    {
        $this->issue = $issue;
        $this->pushed = false;
        $this->message = $message;
        $this->subject = $subject;
    }

    public function write(GitApiInterface $repository)
    {
        $message = sprintf('[%s] %s', $this->subject, $this->message);
        $this->id = $repository->commit($message);
        $this->createdAt = new \DateTime();

        return $this;
    }

    public function push()
    {
        $this->pushed = true;

        return $this;
    }
}
