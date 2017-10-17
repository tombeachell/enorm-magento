<?php
namespace Magento\Shipping\Block\Adminhtml\Order\Packaging\Grid;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Adminhtml\Order\Packaging\Grid
 */
class Interceptor extends \Magento\Shipping\Block\Adminhtml\Order\Packaging\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Sales\Model\Order\Shipment\ItemFactory $shipmentItemFactory, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $shipmentItemFactory, $registry, $data);
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
