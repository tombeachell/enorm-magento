<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Options;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Options
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Option\ArrayPool $sourceModelPool, \Magento\Widget\Model\Widget $widget, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $sourceModelPool, $widget, $data);
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
