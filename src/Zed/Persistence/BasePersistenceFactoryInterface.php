<?php

namespace Nfq\Zed\Persistence;

use Nfq\Zed\Persistence\Mapper\BaseMapperInterface;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Persistence\PersistenceFactoryInterface;

/**
 * Class BasePersistenceFactoryInterface
 * @package Nfq\Zed\Persistence
 */
interface BasePersistenceFactoryInterface extends PersistenceFactoryInterface
{
    /**
     * @return ModelCriteria
     */
    public function createEntityQuery(): ModelCriteria;

    /**
     * @return EntityTransferInterface
     */
    public function createEntityTransfer(): EntityTransferInterface;

    /**
     * @return BaseMapperInterface
     */
    public function createBaseMapper(): BaseMapperInterface;
}
