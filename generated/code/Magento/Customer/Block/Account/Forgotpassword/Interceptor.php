<?php
namespace Magento\Customer\Block\Account\Forgotpassword;

/**
 * Interceptor class for @see \Magento\Customer\Block\Account\Forgotpassword
 */
class Interceptor extends \Magento\Customer\Block\Account\Forgotpassword implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Url $customerUrl, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerUrl, $data);
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
