<?php

namespace Nfq\Zed\Persistence;

use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Zed\Kernel\Persistence\QueryContainer\QueryContainerInterface;

/**
 * Interface BaseQueryContainerInterface
 * @package Nfq\Zed\Persistence
 */
interface BaseQueryContainerInterface extends QueryContainerInterface
{
    /**
     * @return ModelCriteria
     */
    public function queryEntity(): ModelCriteria;
}
