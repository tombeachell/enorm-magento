<?php
namespace Magento\GiftMessage\Block\Adminhtml\Sales\Order\Create\Form;

/**
 * Interceptor class for @see \Magento\GiftMessage\Block\Adminhtml\Sales\Order\Create\Form
 */
class Interceptor extends \Magento\GiftMessage\Block\Adminhtml\Sales\Order\Create\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\GiftMessage\Helper\Message $messageHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $messageHelper, $data);
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
