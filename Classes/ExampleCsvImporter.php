<?php
namespace Networkteam\Import\FlowAdaptor;

/***************************************************************
 *  (c) 2017 networkteam GmbH - all rights reserved
 ***************************************************************/

class ExampleCsvImporter extends AbstractImporter {

    public function processImportData()
    {
        foreach ($this->dataProvider as $itemData) {
            // TODO: Implement import functionality for $itemData.
        }
    }

}