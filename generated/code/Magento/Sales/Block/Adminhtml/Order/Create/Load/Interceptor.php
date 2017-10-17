<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Load;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Load
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Load implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\View\Helper\Js $jsHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $jsHelper, $data);
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
