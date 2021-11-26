<?php

namespace Nfq\Zed\Persistence;

use Nfq\Zed\Persistence\Mapper\BaseMapperInterface;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;

/**
 * Interface BaseRepositoryInterface
 * @package Nfq\Zed\Persistence
 */
interface BaseRepositoryInterface
{
    /**
     * @param int $entityId
     * @return null|EntityTransferInterface
     */
    public function findEntityByEntityId(int $entityId): ?EntityTransferInterface;

    /**
     * @param array $conditions
     * @return EntityTransferInterface|null
     */
    public function findEntityByConditions(array $conditions): ?EntityTransferInterface;

    /**
     * @param array $conditions
     * @return EntityTransferInterface[]|empty
     */
    public function findEntitiesByConditions(array $conditions): array;
}
