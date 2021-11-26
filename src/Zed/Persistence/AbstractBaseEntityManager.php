<?php

namespace Nfq\Zed\Persistence;

use Nfq\Zed\Persistence\Mapper\BaseMapperInterface;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * Class AbstractBaseEntityManager
 * @package Nfq\Zed\Persistence
 *
 * @method BasePersistenceFactoryInterface getFactory()
 */
abstract class AbstractBaseEntityManager extends AbstractEntityManager implements BaseEntityManagerInterface
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
    public function createEntity(EntityTransferInterface $entityTransfer): EntityTransferInterface
    {
        $entity = new $entityTransfer::$entityNamespace();
        $entity->fromArray($entityTransfer->modifiedToArray(false));
        $entity->save();
        $entityTransfer = $this
            ->createBaseMapper()
            ->mapEntityToTransfer($entity, $entityTransfer);

        return $entityTransfer;
    }

    /**
     * @inheritDoc
     */
    public function updateEntityByEntityId(int $entityId, EntityTransferInterface $entityTransfer): bool
    {
        $updateEntity = $this
            ->createEntityQuery()
            ->findPk($entityId);
        if (!$updateEntity) {
            return false;
        }
        $updateEntity->fromArray($entityTransfer->modifiedToArray(true));
        $updateEntity->save();
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteEntityByEntityId(int $entityId): bool
    {
        $deleteEntity = $this
            ->createEntityQuery()
            ->findPk($entityId);
        if (!$deleteEntity) {
            return false;
        }

        $deleteEntity->delete();
        return true;
    }

    /**
     * @inheritDoc
     */
    public function bulkDeleteByConditions(array $conditions): bool
    {
        $affectedRows = $this
            ->createEntityQuery()
            ->filterByArray($conditions)
            ->delete();

        //the number rows is affected should be greater than 0
        return $affectedRows !== 0;
    }
}
