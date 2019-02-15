<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace Axitech\FastSimpleImportCommands\Console\Command\Orders;
use Magento\ImportExport\Model\Import;
use Axitech\FastSimpleImportCommands\Console\Command\AbstractExportCommand;
/**
 * Class TestCommand
 * @package FireGento\FastSimpleImport2\Console\Command
 *
 */
class ExportOrders extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcommands:orders:export')
            ->setDescription('Export Orders ');
        $this->setEntityCode('order');

        parent::configure();
    }


}
