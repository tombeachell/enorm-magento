<?php
namespace Magento\Customer\Block\Adminhtml\Sales\Order\Address\Form\Renderer\Vat;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Sales\Order\Address\Form\Renderer\Vat
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Sales\Order\Address\Form\Renderer\Vat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data);
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
