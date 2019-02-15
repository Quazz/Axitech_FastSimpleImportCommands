<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace Axitech\FastSimpleImportCommands\Console\Command\Product;
use Axitech\FastSimpleImportCommands\Console\Command\AbstractExportCommand;
use Axitech\FastSimpleImportCommands\Console\Command\AbstractImportCommand;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\ImportExport\Model\Import;
use Magento\Catalog\Api\ProductAttributeOptionManagementInterface;
/**
 * Class TestCommand
 * @package FireGento\FastSimpleImport2\Console\Command
 *
 */
class ExportProducts extends AbstractExportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcommands:products:export')
            ->setDescription('Export Products ');
        $this->setEntityCode('catalog_product');

        parent::configure();
    }


}
