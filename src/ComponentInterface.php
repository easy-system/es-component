<?php
/**
 * This file is part of the "Easy System" package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Damon Smith <damon.easy.system@gmail.com>
 */
namespace Es\Component;

/**
 * The interface of system component.
 */
interface ComponentInterface
{
    /**
     * Gets the current version of component.
     *
     * @return string The version of component
     */
    public function getVersion();
}
