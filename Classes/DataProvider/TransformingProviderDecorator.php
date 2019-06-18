<?php
namespace Networkteam\Import\FlowAdaptor\DataProvider;

/***************************************************************
 *  (c) 2017 networkteam GmbH - all rights reserved
 ***************************************************************/

use Networkteam\Import\DataProvider\DataProviderInterface;

class TransformingProviderDecorator extends \Networkteam\Import\DataProvider\TransformingProviderDecorator {

    /**
     * @param DataProviderInterface $dataProvider
     * @param array $mapping
     */
    public function __construct(DataProviderInterface $dataProvider, array $mapping) {
        parent::__construct($dataProvider);
        $this->setMapping($mapping);
        $this->setExpressionHelper(new TransformerHelper());
    }

}