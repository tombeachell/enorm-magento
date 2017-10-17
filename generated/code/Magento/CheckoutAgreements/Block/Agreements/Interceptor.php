<?php
namespace Magento\CheckoutAgreements\Block\Agreements;

/**
 * Interceptor class for @see \Magento\CheckoutAgreements\Block\Agreements
 */
class Interceptor extends \Magento\CheckoutAgreements\Block\Agreements implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\CheckoutAgreements\Model\ResourceModel\Agreement\CollectionFactory $agreementCollectionFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $agreementCollectionFactory, $data);
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
