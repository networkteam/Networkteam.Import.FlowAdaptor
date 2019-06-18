<?php
namespace Networkteam\Import\FlowAdaptor;

/***************************************************************
 *  (c) 2017 networkteam GmbH - all rights reserved
 ***************************************************************/

use Neos\Flow\Annotations as Flow;
use Networkteam\Import\FlowAdaptor\Log\ImportLoggerInterface;

abstract class AbstractImporter extends \Networkteam\Import\AbstractImporter {

    /**
     * @var ImportLoggerInterface
     * @Flow\Inject
     */
    protected $importLogger;

    protected function handleException(\Exception $exception)
    {
        $this->importResult->addError(sprintf('%s (Code: %s)', $exception->getMessage(), $exception->getCode()));

        if ($this->importLogger !== NULL) {
            $this->importLogger->logException($exception);
        } else {
            throw $exception;
        }
    }

    protected function log($message, $level = LOG_INFO)
    {
        if ($this->importLogger !== NULL) {
            $this->importLogger->log($message, $level);
        }
    }

}