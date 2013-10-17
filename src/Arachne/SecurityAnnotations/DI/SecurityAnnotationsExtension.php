<?php

/**
 * This file is part of the Arachne Security Annotations extenstion
 *
 * Copyright (c) Jáchym Toušek (enumag@gmail.com)
 *
 * For the full copyright and license information, please view the file license.md that was distributed with this source code.
 */

namespace Arachne\SecurityAnnotations\DI;

use Arachne\Verifier\DI\VerifierExtension;
use Nette\DI\CompilerExtension;

/**
 * @author Jáchym Toušek
 */
class SecurityAnnotationsExtension extends CompilerExtension
{

	public function loadConfiguration()
	{
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('handler'))
			->setClass('Arachne\SecurityAnnotations\SecurityAnnotationHandler')
			->addTag(VerifierExtension::TAG_HANDLER, array(
				'Arachne\SecurityAnnotations\LoggedIn',
				'Arachne\SecurityAnnotations\InRole',
				'Arachne\SecurityAnnotations\Allowed',
			));
	}

}
