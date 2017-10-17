<?php
namespace Magento\Newsletter\Block\Adminhtml\Template\Edit;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Template\Edit
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Template\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $wysiwygConfig, $registry, $data);
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