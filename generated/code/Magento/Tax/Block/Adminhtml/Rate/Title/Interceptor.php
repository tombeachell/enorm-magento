<?php
namespace Magento\Tax\Block\Adminhtml\Rate\Title;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Rate\Title
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Rate\Title implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Store\Model\StoreFactory $storeFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Tax\Api\TaxRateRepositoryInterface $taxRateRepository, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $storeFactory, $coreRegistry, $taxRateRepository, $data);
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
