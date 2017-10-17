<?php
namespace Magento\Braintree\Block\Customer\CardRenderer;

/**
 * Interceptor class for @see \Magento\Braintree\Block\Customer\CardRenderer
 */
class Interceptor extends \Magento\Braintree\Block\Customer\CardRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\CcConfigProvider $iconsProvider, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $iconsProvider, $data);
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
