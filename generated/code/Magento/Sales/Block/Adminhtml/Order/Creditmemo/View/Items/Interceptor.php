<?php
namespace Magento\Sales\Block\Adminhtml\Order\Creditmemo\View\Items;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Creditmemo\View\Items
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Creditmemo\View\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function displayPrices($basePrice, $price, $strong = false, $separator = '<br />')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'displayPrices');
        if (!$pluginInfo) {
            return parent::displayPrices($basePrice, $price, $strong, $separator);
        } else {
            return $this->___callPlugins('displayPrices', func_get_args(), $pluginInfo);
        }
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
