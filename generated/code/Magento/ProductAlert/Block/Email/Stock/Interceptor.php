<?php
namespace Magento\ProductAlert\Block\Email\Stock;

/**
 * Interceptor class for @see \Magento\ProductAlert\Block\Email\Stock
 */
class Interceptor extends \Magento\ProductAlert\Block\Email\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Filter\Input\MaliciousCode $maliciousCode, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $maliciousCode, $priceCurrency, $imageBuilder, $data);
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
