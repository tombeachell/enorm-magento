<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Action\Attribute\Tab\Inventory;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Action\Attribute\Tab\Inventory
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Action\Attribute\Tab\Inventory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Model\Source\Backorders $backorders, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backorders, $stockConfiguration, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }
}
