<?php
namespace Magento\Catalog\Block\Adminhtml\Product;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Catalog\Model\Product\TypeFactory $typeFactory, \Magento\Catalog\Model\ProductFactory $productFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $typeFactory, $productFactory, $data);
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
