<?php
namespace Magento\Braintree\Block\Customer\PayPal\VaultTokenRenderer;

/**
 * Interceptor class for @see \Magento\Braintree\Block\Customer\PayPal\VaultTokenRenderer
 */
class Interceptor extends \Magento\Braintree\Block\Customer\PayPal\VaultTokenRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Braintree\Gateway\Config\PayPal\Config $config, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $config, $data);
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
