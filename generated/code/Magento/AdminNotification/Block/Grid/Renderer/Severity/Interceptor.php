<?php
namespace Magento\AdminNotification\Block\Grid\Renderer\Severity;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\Grid\Renderer\Severity
 */
class Interceptor extends \Magento\AdminNotification\Block\Grid\Renderer\Severity implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\AdminNotification\Model\Inbox $notice, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $notice, $data);
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
