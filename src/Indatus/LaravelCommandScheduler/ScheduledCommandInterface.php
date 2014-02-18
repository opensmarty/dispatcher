<?php
/**
 * @author Ben Kuhl <bkuhl@indatus.com>
 */
namespace Indatus\LaravelCommandScheduler;

interface ScheduledCommandInterface
{
    /**
     * User to run the command as
     * @return string
     */
    public function user();

    /**
     * When a command should run
     */
    public function schedule();

    /**
     * Customize the schedule for this command
     *
     * @return \Indatus\LaravelCommandScheduler\Scheduler
     */
    public function getScheduler();

    /**
     * Checks whether the command is enabled or not in the current environment
     *
     * Override this to check for x or y and return false if the command can not
     * run properly under the current conditions.
     *
     * @return Boolean
     */
    public function isEnabled();
}