<?php
namespace Magento\Framework\Pricing\Render\Amount;

/**
 * Interceptor class for @see \Magento\Framework\Pricing\Render\Amount
 */
class Interceptor extends \Magento\Framework\Pricing\Render\Amount implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\Amount\AmountInterface $amount, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, \Magento\Framework\Pricing\SaleableInterface $saleableItem = null, \Magento\Framework\Pricing\Price\PriceInterface $price = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $amount, $priceCurrency, $rendererPool, $saleableItem, $price, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function formatCurrency($amount, $includeContainer = true, $precision = 2)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatCurrency');
        if (!$pluginInfo) {
            return parent::formatCurrency($amount, $includeContainer, $precision);
        } else {
            return $this->___callPlugins('formatCurrency', func_get_args(), $pluginInfo);
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
