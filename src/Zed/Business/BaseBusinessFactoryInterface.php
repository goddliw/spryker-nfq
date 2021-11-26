<?php

namespace Nfq\Zed\Business;

use Nfq\Zed\Business\Reader\BaseReaderInterface;
use Nfq\Zed\Business\Writer\BaseWriterInterface;
use Spryker\Zed\Kernel\Business\BusinessFactoryInterface;

/**
 * Interface BaseBusinessFactoryInterface
 * @package Nfq\Zed\Business
 */
interface BaseBusinessFactoryInterface extends BusinessFactoryInterface
{
    /**
     * @return BaseReaderInterface
     */
    public function createReader(): BaseReaderInterface;

    /**
     * @return BaseWriterInterface
     */
    public function createWriter(): BaseWriterInterface;
}
