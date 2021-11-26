<?php

namespace Nfq\Zed\Business;

use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;

/**
 * Interface BaseBusinessFacadeInterface
 * @package Nfq\Zed\Business
 */
interface BaseBusinessFacadeInterface
{
    /**
     * @param int $entityId
     * @return EntityTransferInterface|null
     */
    public function findEntityByEntityId(int $entityId): ?EntityTransferInterface;

    /**
     * @param array $conditions
     * @return EntityTransferInterface|null
     */
    public function findEntityByConditions(array $conditions): ?EntityTransferInterface;

    /**
     * @param array $conditions
     * @return EntityTransferInterface[]|null
     */
    public function findEntitiesByConditions(array $conditions): ?array;

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
