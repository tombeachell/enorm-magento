<?php
namespace Magento\Catalog\Model\Rss\Product\NotifyStock;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Rss\Product\NotifyStock
 */
class Interceptor extends \Magento\Catalog\Model\Rss\Product\NotifyStock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ProductFactory $productFactory, \Magento\CatalogInventory\Model\ResourceModel\StockFactory $stockFactory, \Magento\Catalog\Model\Product\Attribute\Source\Status $productStatus, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->___init();
        parent::__construct($productFactory, $stockFactory, $productStatus, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
