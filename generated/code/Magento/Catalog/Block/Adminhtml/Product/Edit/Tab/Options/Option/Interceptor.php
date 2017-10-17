<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Option;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Option
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Options\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Config\Model\Config\Source\Yesno $configYesNo, \Magento\Catalog\Model\Config\Source\Product\Options\Type $optionType, \Magento\Catalog\Model\Product $product, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\ProductOptions\ConfigInterface $productOptionConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $configYesNo, $optionType, $product, $registry, $productOptionConfig, $data);
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
