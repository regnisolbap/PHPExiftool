<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class PlanarConfiguration extends AbstractTag
{

    protected $Id = 284;

    protected $Name = 'PlanarConfiguration';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'IFD0';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Planar Configuration';

    protected $flag_Unsafe = true;

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Chunky',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Planar',
        ),
    );

}
