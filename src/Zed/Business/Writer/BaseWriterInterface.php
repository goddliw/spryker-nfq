<?php

namespace Nfq\Zed\Business\Writer;

use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;

/**
 * Interface BaseWriterInterface
 * @package Nfq\Zed\Business\Writer
 */
interface BaseWriterInterface
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

