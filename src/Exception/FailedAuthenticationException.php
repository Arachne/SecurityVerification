<?php

/**
 * This file is part of the Arachne
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\SecurityVerification\Exception;

use Nette\Application\ForbiddenRequestException;

/**
 * @author Jáchym Toušek
 */
class FailedAuthenticationException extends ForbiddenRequestException
{
}
