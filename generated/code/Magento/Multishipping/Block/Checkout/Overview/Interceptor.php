<?php
namespace Magento\Multishipping\Block\Checkout\Overview;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Overview
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Overview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Tax\Helper\Data $taxHelper, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector, \Magento\Quote\Model\Quote\TotalsReader $totalsReader, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $multishipping, $taxHelper, $priceCurrency, $totalsCollector, $totalsReader, $data);
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
