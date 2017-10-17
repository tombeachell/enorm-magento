<?php
namespace Magento\Paypal\Block\Bml\Banners;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Bml\Banners
 */
class Interceptor extends \Magento\Paypal\Block\Bml\Banners implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Paypal\Model\Config $paypalConfig, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $paypalConfig, $data);
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
