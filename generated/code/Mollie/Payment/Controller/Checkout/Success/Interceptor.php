<?php
namespace Mollie\Payment\Controller\Checkout\Success;

/**
 * Interceptor class for @see \Mollie\Payment\Controller\Checkout\Success
 */
class Interceptor extends \Mollie\Payment\Controller\Checkout\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Payment\Helper\Data $paymentHelper, \Mollie\Payment\Model\Mollie $mollieModel, \Mollie\Payment\Helper\General $mollieHelper)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $paymentHelper, $mollieModel, $mollieHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
