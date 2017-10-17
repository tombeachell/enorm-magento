<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $data);
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
