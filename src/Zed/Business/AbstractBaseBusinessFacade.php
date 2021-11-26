<?php

namespace Nfq\Zed\Business;

use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * Class AbstractBaseBusinessFacade
 * @package Nfq\Zed\Business
 *
 * @method BaseBusinessFactoryInterface getFactory()
 */
 abstract class AbstractBaseBusinessFacade extends AbstractFacade implements BaseBusinessFacadeInterface
{
    /**
     * @inheritDoc
     */
    public function findEntityByEntityId(int $entityId): ?EntityTransferInterface
    {
        return $this
            ->getFactory()
            ->createReader()
            ->findEntityByEntityId($entityId);
    }

    /**
     * @inheritDoc
     */
    public function findEntityByConditions(array $conditions): ?EntityTransferInterface
    {
        return $this
            ->getFactory()
            ->createReader()
            ->findEntityByConditions($conditions);
    }

    /**
     * @inheritDoc
     */
    public function findEntitiesByConditions(array $conditions): ?array
    {
        return $this
            ->getFactory()
            ->createReader()
            ->findEntitiesByConditions($conditions);
    }

     /**
      * @inheritDoc
      */
     public function createEntity(EntityTransferInterface $entityTransfer): EntityTransferInterface
     {
         return $this
             ->getFactory()
             ->createWriter()
             ->createEntity($entityTransfer);
     }

     /**
      * @inheritDoc
      */
     public function updateEntityByEntityId(int $entityId, EntityTransferInterface $entityTransfer): bool
     {
         return $this
             ->getFactory()
             ->createWriter()
             ->updateEntityByEntityId($entityId, $entityTransfer);
     }

     /**
      * @inheritDoc
      */
     public function deleteEntityByEntityId(int $entityId): bool
     {
         return $this
             ->getFactory()
             ->createWriter()
             ->deleteEntityByEntityId($entityId);
     }

     /**
      * @inheritDoc
      */
     public function bulkDeleteByConditions(array $conditions): bool
     {
         return $this
             ->getFactory()
             ->createWriter()
             ->bulkDeleteByConditions($conditions);
     }
 }
