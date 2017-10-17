<?php
namespace Magento\Customer\Block\Account\RegisterLink;

/**
 * Interceptor class for @see \Magento\Customer\Block\Account\RegisterLink
 */
class Interceptor extends \Magento\Customer\Block\Account\RegisterLink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Model\Registration $registration, \Magento\Customer\Model\Url $customerUrl, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $httpContext, $registration, $customerUrl, $data);
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
