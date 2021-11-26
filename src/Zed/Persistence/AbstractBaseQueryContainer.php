<?php

namespace Nfq\Zed\Persistence;

use Propel\Runtime\ActiveQuery\ModelCriteria;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * Class AbstractBaseQueryContainer
 * @package Nfq\Zed\Persistence
 *
 * @method BasePersistenceFactoryInterface getFactory()
 */
abstract class AbstractBaseQueryContainer extends AbstractQueryContainer implements BaseQueryContainerInterface
{
    /**
     * @inheritDoc
     */
     public function queryEntity(): ModelCriteria
     {
         return $this
             ->getFactory()
             ->createEntityQuery();
     }
 }
