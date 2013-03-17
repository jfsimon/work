<?php

namespace Jfsimon\Work;

use Symfony\Component\Console\Application as BaseApplication;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class Application extends BaseApplication
{
    private $factory;

    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
        parent::__construct('JF WORK', 'BETA');

        $namespace = 'Jfsimon\\Work\\Command';
        $finder =
        foreach ($finder as $file) {
            $class = new \ReflectionClass($namespace.'\\'.$file->getBasename('.php'));
            if ($class->isSubclassOf('Symfony\\Component\\Console\\Command\\Command') && !$class->isAbstract()) {
                $this->add($command = $class->newInstance());

                if ($class->isSubclassOf('Jfsimon\\Work\\Command\\FactoryAwareCommand')) {
                    $command->setFactory($factory);
                }
            }
        }
    }
}
