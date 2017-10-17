<?php
namespace Magento\AdminNotification\Block\Window;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\Window
 */
class Interceptor extends \Magento\AdminNotification\Block\Window implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Auth\Session $authSession, \Magento\AdminNotification\Model\ResourceModel\Inbox\Collection\Critical $criticalCollection, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $authSession, $criticalCollection, $data);
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
