<?php
namespace Magento\Paypal\Block\Express\Form;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Express\Form
 */
class Interceptor extends \Magento\Paypal\Block\Express\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Paypal\Model\ConfigFactory $paypalConfigFactory, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Paypal\Helper\Data $paypalData, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $paypalConfigFactory, $localeResolver, $paypalData, $currentCustomer, $data);
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
