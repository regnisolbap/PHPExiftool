<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MWG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class DateTimeOriginal extends AbstractTag
{

    protected $Id = 'DateTimeOriginal-2';

    protected $Name = 'DateTimeOriginal';

    protected $FullName = 'Composite';

    protected $GroupName = 'MWG';

    protected $g0 = 'Composite';

    protected $g1 = 'Composite';

    protected $g2 = 'Other';

    protected $Type = '?';

    protected $Writable = true;

    protected $Description = 'Date/Time Original';

    protected $local_g1 = 'MWG';

    protected $local_g2 = 'Time';

}