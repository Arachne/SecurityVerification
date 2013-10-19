<?php

/**
 * This file is part of the Arachne Security Annotations extenstion
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\SecurityAnnotations\Exception;

use Arachne\Verifier\Exception\ForbiddenRequestException;

/**
 * @author Jáchym Toušek
 */
class FailedNoAuthenticationException extends ForbiddenRequestException
{
}
