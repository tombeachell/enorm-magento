<?php
namespace Magento\Braintree\Block\Paypal\Button;

/**
 * Interceptor class for @see \Magento\Braintree\Block\Paypal\Button
 */
class Interceptor extends \Magento\Braintree\Block\Paypal\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Braintree\Gateway\Config\PayPal\Config $config, \Magento\Braintree\Model\Ui\ConfigProvider $configProvider, \Magento\Payment\Model\MethodInterface $payment, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $localeResolver, $checkoutSession, $config, $configProvider, $payment, $data);
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
