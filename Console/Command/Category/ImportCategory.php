<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace Axitech\FastSimpleImportCommands\Console\Command\Category;

use Axitech\FastSimpleImportCommands\Console\Command\AbstractImportCommand;
use Magento\ImportExport\Model\Import;

/**
 * Class TestCommand
 * @package FireGento\FastSimpleImport2\Console\Command
 *
 */
class ImportCategory extends AbstractImportCommand
{


    protected function configure()
    {
        $this->setName('fastsimpleimportcommands:category:import')
            ->setDescription('Import Category');

        $this->setBehavior(Import::BEHAVIOR_APPEND);
        $this->setEntityCode('catalog_category');

        parent::configure();
    }

    /**
     * @return array
     */
    protected function getEntities()
    {
        
        $data[] = array(
            '_root' => 'Default Category',
            '_category' => 'FireGento TestCategory',
            'description' => 'Test2',
            'is_active' => '1',
            'include_in_menu' => '1',
            'meta_description' => 'Meta Test',
            'available_sort_by' => 'position',
            'default_sort_by' => 'position',
            'is_anchor' => '1'
        );
        return $data;
    }
}



