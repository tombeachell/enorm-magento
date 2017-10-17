<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Totals\Subtotal;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Totals\Subtotal
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Totals\Subtotal implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Sales\Helper\Data $salesData, \Magento\Sales\Model\Config $salesConfig, \Magento\Tax\Model\Config $taxConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $salesData, $salesConfig, $taxConfig, $data);
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
