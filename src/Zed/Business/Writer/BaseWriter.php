<?php

namespace Nfq\Zed\Business\Writer;

use Nfq\Zed\Persistence\BaseEntityManagerInterface;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;

/**
 * Class BaseWriter
 * @package Nfq\Zed\Business\Writer
 */
class BaseWriter implements BaseWriterInterface
{
    /**
     * @var BaseEntityManagerInterface
     */
    private $entityManager;

    /**
     * @param BaseEntityManagerInterface $entityManager
     */
    public function __construct(BaseEntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @inheritDoc
     */
    public function createEntity(EntityTransferInterface $entityTransfer): EntityTransferInterface
    {
        return $this
            ->entityManager
            ->createEntity($entityTransfer);
    }

    /**
     * @inheritDoc
     */
    public function updateEntityByEntityId(int $entityId, EntityTransferInterface $entityTransfer): bool
    {
        return $this
            ->entityManager
            ->updateEntityByEntityId($entityId, $entityTransfer);
    }

    /**
     * @inheritDoc
     */
    public function deleteEntityByEntityId(int $entityId): bool
    {
        return $this
            ->entityManager
            ->deleteEntityByEntityId($entityId);
    }

    /**
     * @inheritDoc
     */
    public function bulkDeleteByConditions(array $conditions): bool
    {
        return $this
            ->entityManager
            ->bulkDeleteByConditions($conditions);
    }
}
