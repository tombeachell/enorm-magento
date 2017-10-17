<?php
namespace Magento\Sales\Block\Adminhtml\Order\View\History;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\View\History
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\View\History implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Sales\Helper\Data $salesData, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Admin $adminHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $salesData, $registry, $adminHelper, $data);
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