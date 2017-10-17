<?php
namespace Magento\Tax\Block\Adminhtml\Rate\Grid\Renderer\Data;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Rate\Grid\Renderer\Data
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Rate\Grid\Renderer\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = array())
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
