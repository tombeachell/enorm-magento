<?php
namespace Magento\Customer\Block\Form\Login;

/**
 * Interceptor class for @see \Magento\Customer\Block\Form\Login
 */
class Interceptor extends \Magento\Customer\Block\Form\Login implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Url $customerUrl, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerSession, $customerUrl, $data);
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
