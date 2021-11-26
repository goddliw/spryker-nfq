<?php

namespace Nfq\Zed\Persistence;

use Nfq\Zed\Persistence\Mapper\BaseMapper;
use Nfq\Zed\Persistence\Mapper\BaseMapperInterface;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * Class AbstractBasePersistenceFactory
 * @package Nfq\Zed\Persistence
 */
abstract class AbstractBasePersistenceFactory extends AbstractPersistenceFactory implements BasePersistenceFactoryInterface
{
    public function createBaseMapper(): BaseMapperInterface
    {
        return new BaseMapper();
    }
}
