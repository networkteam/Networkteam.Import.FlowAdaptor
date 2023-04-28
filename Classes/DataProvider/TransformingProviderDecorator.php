<?php
namespace Networkteam\Import\FlowAdaptor\DataProvider;

use Networkteam\Import\DataProvider\DataProviderInterface;

class TransformingProviderDecorator extends \Networkteam\Import\DataProvider\TransformingProviderDecorator
{

    public function __construct(DataProviderInterface $dataProvider, array $mapping)
    {
        parent::__construct($dataProvider);
        $this->setMapping($mapping);
        $this->setExpressionHelper(new TransformerHelper());
    }

}