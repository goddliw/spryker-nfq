<?php

namespace Nfq\Zed\Persistence;

use Nfq\Zed\Persistence\Mapper\BaseMapperInterface;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\EntityManagerInterface;

/**
 * Interface BaseEntityManagerInterface
 * @package Nfq\Zed\Persistence
 */
interface BaseEntityManagerInterface extends EntityManagerInterface
{
    /**
     * @param EntityTransferInterface $entityTransfer
     * @return EntityTransferInterface
     */
    public function createEntity(EntityTransferInterface $entityTransfer): EntityTransferInterface;

    /**
     * @param int $entityId
     * @param EntityTransferInterface $entityTransfer
     * @return bool
     */
    public function updateEntityByEntityId(int $entityId, EntityTransferInterface $entityTransfer): bool;

    /**
     * @param int $entityId
     * @return bool
     */
    public function deleteEntityByEntityId(int $entityId): bool;

    /**
     * @param array $conditions
     * @return bool
     */
    public function bulkDeleteByConditions(array $conditions): bool;
}
