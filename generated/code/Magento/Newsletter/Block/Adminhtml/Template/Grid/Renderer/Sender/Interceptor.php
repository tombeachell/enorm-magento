<?php
namespace Magento\Newsletter\Block\Adminhtml\Template\Grid\Renderer\Sender;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Template\Grid\Renderer\Sender
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Template\Grid\Renderer\Sender implements \Magento\Framework\Interception\InterceptorInterface
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
