<?php

namespace Nfq\Zed\Business\Reader;

use Spryker\Shared\Kernel\Transfer\EntityTransferInterface;

/**
 * Interface BaseReaderInterface
 * @package Nfq\Zed\Business\Reader
 */
interface BaseReaderInterface
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
}
