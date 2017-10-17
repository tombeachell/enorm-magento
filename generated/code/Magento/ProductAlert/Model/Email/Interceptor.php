<?php
namespace Magento\ProductAlert\Model\Email;

/**
 * Interceptor class for @see \Magento\ProductAlert\Model\Email
 */
class Interceptor extends \Magento\ProductAlert\Model\Email implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\ProductAlert\Helper\Data $productAlertData, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Helper\View $customerHelper, \Magento\Store\Model\App\Emulation $appEmulation, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $productAlertData, $scopeConfig, $storeManager, $customerRepository, $customerHelper, $appEmulation, $transportBuilder, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}
