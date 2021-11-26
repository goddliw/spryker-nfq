<?php

namespace Nfq\Zed\Persistence;

use Nfq\Zed\Persistence\Mapper\BaseMapperInterface;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * Class BaseRepository
 * @package Nfq\Zed\Persistence
 *
 * @method BasePersistenceFactoryInterface getFactory()
 */
abstract class AbstractBaseRepository extends AbstractRepository implements BaseRepositoryInterface
{
    /**
     * @return BaseMapperInterface
     */
    private function createBaseMapper(): BaseMapperInterface
    {
        return $this
            ->getFactory()
            ->createBaseMapper();
    }

    /**
     * @return ModelCriteria
     */
    private function createEntityQuery(): ModelCriteria
    {
        return $this
            ->getFactory()
            ->createEntityQuery();
    }

    /**
     * Entity transfer instant
     *
     * @return EntityTransferInterface
     */
    private function createEntityTransfer(): EntityTransferInterface
    {
        return $this
            ->getFactory()
            ->createEntityTransfer();
    }

    /**
     * @inheritDoc
     */
    public function findEntityByEntityId(int $entityId): ?EntityTransferInterface
    {
        $entity = $this
            ->createEntityQuery()
            ->findPk($entityId);

        if (!$entity) {
            return null;
        }

        $entityTransfer = $this
            ->createBaseMapper()
            ->mapEntityToTransfer($entity, $this->createEntityTransfer());

        return $entityTransfer;
    }

    /**
     * @inheritDoc
     */
    public function findEntityByConditions(array $conditions): ?EntityTransferInterface
    {
        $entity = $this
            ->createEntityQuery()
            ->findOneByArray($conditions);

        if (!$entity) {
            return null;
        }

        $entityTransfer = $this
            ->createBaseMapper()
            ->mapEntityToTransfer($entity, $this->createEntityTransfer());

        return $entityTransfer;
    }

    /**
     * @inheritDoc
     */
    public function findEntitiesByConditions(array $conditions): array
    {
        $entityCollection = $this
            ->createEntityQuery()
            ->findByArray($conditions);

        $entityTransferCollection = $this
            ->createBaseMapper()
            ->mapEntityCollectionToTransferCollection($entityCollection->getData(), $this->createEntityTransfer());

        return $entityTransferCollection;
    }
}
