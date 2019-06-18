<?php
namespace Networkteam\Import\FlowAdaptor\DataProvider;

/***************************************************************
 *  (c) 2017 networkteam GmbH - all rights reserved
 ***************************************************************/

class CsvDataProvider extends \Networkteam\Import\DataProvider\CsvDataProvider {

    /**
     * @param array $options
     */
    public function __construct(array $options = array()) {
        if (count($options) > 0) {
            $this->setOptions($options);
        }
    }
}