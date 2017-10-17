<?php
namespace Magento\Payment\Block\Form\Container;

/**
 * Interceptor class for @see \Magento\Payment\Block\Form\Container
 */
class Interceptor extends \Magento\Payment\Block\Form\Container implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Helper\Data $paymentHelper, \Magento\Payment\Model\Checks\SpecificationFactory $methodSpecificationFactory, array $data = array(), array $additionalChecks = array())
    {
        $this->___init();
        parent::__construct($context, $paymentHelper, $methodSpecificationFactory, $data, $additionalChecks);
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
