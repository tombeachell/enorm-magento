<?php
namespace Magento\Tax\Block\Adminhtml\Frontend\Region\Updater;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Frontend\Region\Updater
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Frontend\Region\Updater implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Directory\Helper\Data $directoryHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $directoryHelper, $data);
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
