<?php
namespace Magento\GiftMessage\Block\Adminhtml\Sales\Order\View\Items;

/**
 * Interceptor class for @see \Magento\GiftMessage\Block\Adminhtml\Sales\Order\View\Items
 */
class Interceptor extends \Magento\GiftMessage\Block\Adminhtml\Sales\Order\View\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\GiftMessage\Helper\Message $messageHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $messageHelper, $data);
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
