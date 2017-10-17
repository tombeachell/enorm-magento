<?php
namespace Magento\AdminNotification\Block\ToolbarEntry;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\ToolbarEntry
 */
class Interceptor extends \Magento\AdminNotification\Block\ToolbarEntry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\AdminNotification\Model\ResourceModel\Inbox\Collection\Unread $notificationList, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $notificationList, $data);
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
