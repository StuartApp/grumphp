<?php

namespace GrumPHP\Task;

use GrumPHP\Exception\RuntimeException;
use GrumPHP\Task\Context\ContextInterface;

/**
 * Interface TaskInterface
 *
 * @package GrumPHP\Task
 */
interface TaskInterface
{
    /**
     * @return array
     */
    public function getConfiguration();

    /**
     * @return array
     */
    public function getDefaultConfiguration();

    /**
     * This methods specifies if a task can run in a specific context.
     *
     * @param ContextInterface $context
     *
     * @return bool
     */
    public function canRunInContext(ContextInterface $context);

    /**
     * @param ContextInterface $context
     *
     * @return void
     * @throws RuntimeException
     */
    public function run(ContextInterface $context);
}
