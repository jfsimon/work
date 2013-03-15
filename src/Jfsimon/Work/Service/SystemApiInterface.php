<?php

namespace Jfsimon\Work\Service;

/**
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface SystemApiInterface
{
    public function browse($url);
    public function edit(array $files);
}
