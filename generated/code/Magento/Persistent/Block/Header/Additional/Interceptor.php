<?php
namespace Magento\Persistent\Block\Header\Additional;

/**
 * Interceptor class for @see \Magento\Persistent\Block\Header\Additional
 */
class Interceptor extends \Magento\Persistent\Block\Header\Additional implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\View $customerViewHelper, \Magento\Persistent\Helper\Session $persistentSessionHelper, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerViewHelper, $persistentSessionHelper, $customerRepository, $data);
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
