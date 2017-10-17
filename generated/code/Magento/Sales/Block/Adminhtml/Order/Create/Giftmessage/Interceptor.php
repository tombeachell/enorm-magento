<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Giftmessage;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Giftmessage
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Giftmessage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\GiftMessage\Model\Save $giftMessageSave, \Magento\GiftMessage\Helper\Message $messageHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $giftMessageSave, $messageHelper, $data);
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
