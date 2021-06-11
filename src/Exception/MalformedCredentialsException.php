<?php

/**
 * This file is part of the Proxmox PHP API wrapper library (unofficial).
 *
 * @copyright 2014 César Muñoz <zzantares@gmail.com>
 * @license http://opensource.org/licenses/MIT The MIT License.
 */

namespace Proxmox\Exception;

/**
 * MalformedCredentialsException class. Is the exception thrown when credentials
 * passed to the Proxmox API client can not be used.
 *
 * @author César Muñoz <zzantares@gmail.com>
 */
class MalformedCredentialsException extends \InvalidArgumentException
{
}
