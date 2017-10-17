<?php
namespace Magento\Review\Block\Adminhtml\Main;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Main
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Framework\Registry $registry, \Magento\Customer\Helper\View $customerViewHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerRepository, $productFactory, $registry, $customerViewHelper, $data);
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
