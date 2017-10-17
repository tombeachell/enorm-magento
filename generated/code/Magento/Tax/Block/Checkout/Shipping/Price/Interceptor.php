<?php
namespace Magento\Tax\Block\Checkout\Shipping\Price;

/**
 * Interceptor class for @see \Magento\Tax\Block\Checkout\Shipping\Price
 */
class Interceptor extends \Magento\Tax\Block\Checkout\Shipping\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Tax\Helper\Data $taxHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $priceCurrency, $taxHelper, $data);
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
