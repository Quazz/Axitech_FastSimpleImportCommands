<?php
/**
 * *
 *  * Copyright © Elias Kotlyar - All rights reserved.
 *  * See LICENSE.md bundled with this module for license details.
 *
 */
namespace Axitech\FastSimpleImportCommands\Console\Command\Product;
use PH2M\Logistic\Model\Export\AbstractExport;
use Magento\Framework\App\ObjectManagerFactory;
use Magento\ImportExport\Model\Import;
use Magento\Catalog\Api\ProductAttributeOptionManagementInterface;
/**
 * Class TestCommand
 * @package FireGento\FastSimpleImport2\Console\Command
 *
 */
class ExportProducts extends PH2M\Logistic\Model\Export\AbstractExport
{

	/* Set create file per object to false */
	protected $createAFileForEachObject = false;
	/* Code variable */
	protected $code = 'export';
	/* Product collection factory */
	protected $collectionFactory;
	
	public function __construct(
    \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory
) {
    $this->collectionFactory = $collectionFactory;
}
	
	/* Set filename to desired */
	protected function _getFileName($object)
    {
        return 'ProductExport.csv';
    }
	
	/* Generate full product collection */
	protected function _generateProductCollection() 
	{
		$productCollection = $this->collectionFactory->create();
		/** Apply filters here */
		$productCollection->addAttributeToSelect('*');
	
		return $productCollection;
	}
	
	/* Pass objects to export */
	protected function _initObjectsToExport()
    {
        $this->objectsToExport = $this->_generateProductsCollection();
    }

    protected function configure()
    {
        $this->setName('fastsimpleimportcommands:products:export')
            ->setDescription('Export Products');

        parent::configure();
    }


}
