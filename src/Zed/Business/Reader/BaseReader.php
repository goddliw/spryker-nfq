<?php

namespace Nfq\Zed\Business\Reader;

use Nfq\Zed\Persistence\BaseRepositoryInterface;
use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * Class BaseReader
 * @package Nfq\Zed\Business\Reader
 */
class BaseReader implements BaseReaderInterface
{
    /**
     * @var AbstractRepository
     */
    private $entityRepository;

    /**
     * @param BaseRepositoryInterface $entityRepository
     */
    public function __construct(BaseRepositoryInterface $entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }

    /**
     * @param int $entityId
     * @return EntityTransferInterface|null
     */
    public function findEntityByEntityId(int $entityId): ?EntityTransferInterface
    {
        return $this
            ->entityRepository
            ->findEntityByEntityId($entityId);
    }

    /**
     * @param array $conditions
     * @return EntityTransferInterface|null
     */
    public function findEntityByConditions(array $conditions): ?EntityTransferInterface
    {
        return $this
            ->entityRepository
            ->findEntityByConditions($conditions);
    }

    /**
     * @param array $conditions
     * @return EntityTransferInterface[]|null
     */
    public function findEntitiesByConditions(array $conditions): ?array
    {
        return $this
            ->entityRepository
            ->findEntitiesByConditions($conditions);
    }
}
