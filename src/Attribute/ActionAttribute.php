<?php
declare(strict_types = 1);

namespace TYPO3\AccessControl\Attribute;

/*
 * This file is part of the TYPO3 project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @api
 */
abstract class ActionAttribute extends QualifiedAttribute
{
    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct('');

        $this->meta['identifier'] = $this->meta['namespace'];
        $this->meta['name'] = $this->meta['namespace'];
    }
}