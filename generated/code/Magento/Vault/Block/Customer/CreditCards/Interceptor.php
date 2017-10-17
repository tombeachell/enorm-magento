<?php
namespace Magento\Vault\Block\Customer\CreditCards;

/**
 * Interceptor class for @see \Magento\Vault\Block\Customer\CreditCards
 */
class Interceptor extends \Magento\Vault\Block\Customer\CreditCards implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Vault\Model\CustomerTokenManagement $customerTokenManagement, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerTokenManagement, $data);
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
