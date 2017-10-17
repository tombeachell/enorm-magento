<?php
namespace Magento\Catalog\Block\Product\View\Options\Type\File;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\View\Options\Type\File
 */
class Interceptor extends \Magento\Catalog\Block\Product\View\Options\Type\File implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\Helper\Data $pricingHelper, \Magento\Catalog\Helper\Data $catalogData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $pricingHelper, $catalogData, $data);
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
