<?php
namespace Magento\Email\Block\Adminhtml\Template;

/**
 * Interceptor class for @see \Magento\Email\Block\Adminhtml\Template
 */
class Interceptor extends \Magento\Email\Block\Adminhtml\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Block\Widget\Button\ButtonList $buttonList, \Magento\Backend\Block\Widget\Button\ToolbarInterface $toolbar, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $buttonList, $toolbar, $data);
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
