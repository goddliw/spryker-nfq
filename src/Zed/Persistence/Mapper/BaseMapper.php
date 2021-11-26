<?php

namespace Nfq\Zed\Persistence\Mapper;

use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Map\TableMap;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper;

/**
 * Class BaseMapper
 * @package Nfq\Zed\Persistence\Mapper
 */
class BaseMapper extends TransferToEntityMapper implements BaseMapperInterface
{
    /**
     * @inheritdoc
     */
    public function mapTransferToEntity(EntityTransferInterface $entityTransfer): ActiveRecordInterface
    {
        $transferArray = $entityTransfer->modifiedToArray(false);

        $entity = $this->mapEntity($transferArray, $entityTransfer::$entityNamespace);

        return $entity;
    }

    /**
     * @inheritdoc
     */
    public function mapEntityToTransfer(ActiveRecordInterface $entity, EntityTransferInterface $entityTransfer): EntityTransferInterface
    {
        $entityTransfer->fromArray($entity->toArray(TableMap::TYPE_FIELDNAME, true, [], true), true);

        return $entityTransfer;
    }

    /**
     * @inheritdoc
     */
    public function mapTransferCollectionToEntityCollection(array $transferCollection): array
    {
        $result = [];
        foreach ($transferCollection as $transfer) {
            $result[] = $this->mapTransferToEntity($transfer);
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function mapEntityCollectionToTransferCollection(array $entityCollection, EntityTransferInterface $entityTransfer): array
    {
        $result = [];
        foreach ($entityCollection as $entity) {
            $cloneEntityTransfer = clone $entityTransfer;
            $result[] = $this->mapEntityToTransfer($entity, $cloneEntityTransfer);
        }

        return $result;
    }
}
