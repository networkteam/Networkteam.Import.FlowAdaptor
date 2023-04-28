<?php
namespace Networkteam\Import\FlowAdaptor\DataProvider;

class CsvDataProvider extends \Networkteam\Import\DataProvider\CsvDataProvider {

    public function __construct(array $options = [])
    {
        if (count($options) > 0) {
            $this->setOptions($options);
        }
    }
}