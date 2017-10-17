<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Settings;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Settings
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Settings implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\View\Design\Theme\LabelFactory $themeLabelFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $themeLabelFactory, $data);
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
