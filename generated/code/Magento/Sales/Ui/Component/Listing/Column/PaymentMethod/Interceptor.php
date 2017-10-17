<?php
namespace Magento\Sales\Ui\Component\Listing\Column\PaymentMethod;

/**
 * Interceptor class for @see \Magento\Sales\Ui\Component\Listing\Column\PaymentMethod
 */
class Interceptor extends \Magento\Sales\Ui\Component\Listing\Column\PaymentMethod implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Payment\Helper\Data $paymentHelper, array $components = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $paymentHelper, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        if (!$pluginInfo) {
            return parent::prepare();
        } else {
            return $this->___callPlugins('prepare', func_get_args(), $pluginInfo);
        }
    }
}
