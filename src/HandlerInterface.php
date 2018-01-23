<?php
/**
 * This file is a part of Nenglish7/Session.
 *
 * @author Nicholas English               <https://github.com/Nenglish7>.
 * @author Nenglish7/Session Contributors <https://github.com/Nenglish7/Session/graphs/contributors>.
 *
 * @copyright 2017-2018 Nenglish7.
 *
 * @link    <https://github.com/Nenglish7/Session> Github Repository.
 * @license <https://github.com/Nenglish7/Session/blob/master/LICENSE> New BSD License.
 */
namespace Nenglish7\Session;
/**
 * HandlerInterface.
 */
interface HandlerInterface
{
    /**
     * set().
     *
     * Set a session variable.
     *
     * @param string $name The session variable name.
     * @param mixed $value The value that is to be set.
     *
     * @throws DomainException          If the `$name` argument is not valid.
     * @throws InvalidArgumentException If the `$value` argument is an object.
     * @throws RuntimeException         If the session is not active.
     * @throws InvalidArgumentException If the `$value` argument is null.
     *
     * @return void.
     */
    public function set(string $name, $value = null): void;
}
