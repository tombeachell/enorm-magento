<?php
namespace Magento\GroupedProduct\Block\Order\Item\Renderer\Grouped;

/**
 * Interceptor class for @see \Magento\GroupedProduct\Block\Order\Item\Renderer\Grouped
 */
class Interceptor extends \Magento\GroupedProduct\Block\Order\Item\Renderer\Grouped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $string, $productOptionFactory, $data);
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
