<?php

namespace Nfq\Zed\Persistence\Mapper;

use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapperInterface;

/**
 * Interface BaseMapperInterface
 * @package Nfq\Zed\Persistence\Mapper
 */
interface BaseMapperInterface extends TransferToEntityMapperInterface
{
    /**
     * @param EntityTransferInterface $entityTransfer
     * @return ActiveRecordInterface
     */
    public function mapTransferToEntity(EntityTransferInterface $entityTransfer): ActiveRecordInterface;

    /**
     * @param ActiveRecordInterface $entity
     * @param EntityTransferInterface $entityTransfer
     * @return EntityTransferInterface
     */
    public function mapEntityToTransfer(ActiveRecordInterface $entity, EntityTransferInterface $entityTransfer): EntityTransferInterface;

    /**
     * @param EntityTransferInterface[] $transferCollection
     * @return ActiveRecordInterface[]
     */
    public function mapTransferCollectionToEntityCollection(array $transferCollection): array;

    /**
     * @param array $entityCollection
     * @param EntityTransferInterface $entityTransfer
     * @return ActiveRecordInterface[]
     */
    public function mapEntityCollectionToTransferCollection(array $entityCollection, EntityTransferInterface $entityTransfer): array;
}
