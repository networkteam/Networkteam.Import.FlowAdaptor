<?php
namespace Networkteam\Import\FlowAdaptor;

/***************************************************************
 *  (c) 2017 networkteam GmbH - all rights reserved
 ***************************************************************/

use TYPO3\Flow\Annotations as Flow;

abstract class AbstractImporter extends \Networkteam\Import\AbstractImporter {

    /**
     * @var \Networkteam\Import\FlowAdaptor\Log\ImportLoggerInterface
     * @Flow\Inject
     */
    protected $importLogger;

    /**
     * @param \Exception $exception
     * @throws \Exception
     */
    protected function handleException(\Exception $exception) {
        $this->importResult->addError(sprintf('%s (Code: %s)', $exception->getMessage(), $exception->getCode()));

        if ($this->importLogger !== NULL) {
            $this->importLogger->logException($exception);
        } else {
            throw $exception;
        }
    }

    /**
     * @param string $message
     * @param string $level
     */
    protected function log($message, $level = LOG_INFO) {
        if ($this->importLogger !== NULL) {
            $this->importLogger->log($message, $level);
        }
    }

}