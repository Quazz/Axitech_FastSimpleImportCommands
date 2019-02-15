<?php
/**
 * Copyright © 2016 FireGento e.V. - All rights reserved.
 * See LICENSE.md bundled with this module for license details.
 */
namespace Axitech\FastSimpleImportCommands\Console\Command\Product;
use Axitech\FastSimpleImportCommands\Console\Command\AbstractImportCommand;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\ImportExport\Model\Import;
use Magento\Catalog\Api\ProductAttributeOptionManagementInterface;
/**
 * Class TestCommand
 * @package FireGento\FastSimpleImport2\Console\Command
 *
 */
class ImportMultiselect extends AbstractImportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcommands:products:importmultiselect')
            ->setDescription('Import Simple Products with Multiselect ');

        $this->setBehavior(Import::BEHAVIOR_ADD_UPDATE);
        $this->setEntityCode('catalog_product');

        parent::configure();
    }

    /**
     * @return array
     */
    protected function getEntities()
    {

        $data = [];
        for ($i = 1; $i <= 1; $i++) {
            $data[] = array(
                'sku' => 'FIREGENTO-' . $i,
                'attribute_set_code' => 'Default',
                'product_type' => 'simple',
                'product_websites' => 'base',
                'name' => 'FireGento Test Product ' . $i,
                'price' => '14.0000',
                'ean' => "1234",
                'multiselect' => 'Test|Test3'
            );
        }
        return $data;
    }
}
