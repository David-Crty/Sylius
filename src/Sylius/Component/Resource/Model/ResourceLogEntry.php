<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Resource\Model;

use Gedmo\Loggable\Entity\MappedSuperclass\AbstractLogEntry;

/**
 * @author Mateusz Zalewski <mateusz.zalewski@lakion.com>
 */
abstract class ResourceLogEntry extends AbstractLogEntry implements ResourceInterface
{
}
