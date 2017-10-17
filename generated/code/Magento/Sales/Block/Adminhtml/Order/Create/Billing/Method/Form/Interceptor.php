<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Method\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Payment\Model\Checks\SpecificationFactory $methodSpecificationFactory, \Magento\Backend\Model\Session\Quote $sessionQuote, array $data = array(), array $additionalChecks = array())
    {
        $this->___init();
        parent::__construct($context, $paymentHelper, $methodSpecificationFactory, $sessionQuote, $data, $additionalChecks);
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
