<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace Axitech\FastSimpleImportCommands\Console\Command\Customer;
use Magento\ImportExport\Model\Import;
use Axitech\FastSimpleImportCommands\Console\Command\AbstractExportCommand;
/**
 * Class TestCommand
 * @package FireGento\FastSimpleImport2\Console\Command
 *
 */
class ExportCustomer extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcommands:customers:export')
            ->setDescription('Export Customers');
        $this->setEntityCode('customer');

        parent::configure();
    }


}
