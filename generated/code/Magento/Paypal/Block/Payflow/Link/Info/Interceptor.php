<?php
namespace Magento\Paypal\Block\Payflow\Link\Info;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Payflow\Link\Info
 */
class Interceptor extends \Magento\Paypal\Block\Payflow\Link\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Payment\Model\Config $paymentConfig, \Magento\Paypal\Model\InfoFactory $paypalInfoFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $paymentConfig, $paypalInfoFactory, $data);
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
