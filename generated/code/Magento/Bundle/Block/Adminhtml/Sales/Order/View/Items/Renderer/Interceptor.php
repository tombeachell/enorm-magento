<?php
namespace Magento\Bundle\Block\Adminhtml\Sales\Order\View\Items\Renderer;

/**
 * Interceptor class for @see \Magento\Bundle\Block\Adminhtml\Sales\Order\View\Items\Renderer
 */
class Interceptor extends \Magento\Bundle\Block\Adminhtml\Sales\Order\View\Items\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Registry $registry, \Magento\GiftMessage\Helper\Message $messageHelper, \Magento\Checkout\Helper\Data $checkoutHelper, array $data = array(), \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $messageHelper, $checkoutHelper, $data, $serializer);
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
