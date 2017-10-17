<?php
namespace Magento\Integration\Block\Adminhtml\Integration\Edit;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Integration\Edit
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Integration\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Integration\Helper\Data $integrationHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $integrationHelper, $data);
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
