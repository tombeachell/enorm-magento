<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Options;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Options
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $data);
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