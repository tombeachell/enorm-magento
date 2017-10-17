<?php
namespace Magento\Weee\Pricing\Render\Adjustment;

/**
 * Interceptor class for @see \Magento\Weee\Pricing\Render\Adjustment
 */
class Interceptor extends \Magento\Weee\Pricing\Render\Adjustment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Weee\Helper\Data $weeeHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $priceCurrency, $weeeHelper, $data);
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
