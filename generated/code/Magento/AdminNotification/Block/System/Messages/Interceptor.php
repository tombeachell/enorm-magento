<?php
namespace Magento\AdminNotification\Block\System\Messages;

/**
 * Interceptor class for @see \Magento\AdminNotification\Block\System\Messages
 */
class Interceptor extends \Magento\AdminNotification\Block\System\Messages implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\AdminNotification\Model\ResourceModel\System\Message\Collection\Synchronized $messages, \Magento\Framework\Json\Helper\Data $jsonHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $messages, $jsonHelper, $data);
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
