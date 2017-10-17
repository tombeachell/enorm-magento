<?php
namespace Magento\Paypal\Block\Express\InContext\Component;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Express\InContext\Component
 */
class Interceptor extends \Magento\Paypal\Block\Express\InContext\Component implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Paypal\Model\ConfigFactory $configFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $localeResolver, $configFactory, $data);
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
