<?php
namespace Magento\Customer\Block\Form\Register;

/**
 * Interceptor class for @see \Magento\Customer\Block\Form\Register
 */
class Interceptor extends \Magento\Customer\Block\Form\Register implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\App\Cache\Type\Config $configCacheType, \Magento\Directory\Model\ResourceModel\Region\CollectionFactory $regionCollectionFactory, \Magento\Directory\Model\ResourceModel\Country\CollectionFactory $countryCollectionFactory, \Magento\Framework\Module\Manager $moduleManager, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Url $customerUrl, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $directoryHelper, $jsonEncoder, $configCacheType, $regionCollectionFactory, $countryCollectionFactory, $moduleManager, $customerSession, $customerUrl, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormData');
        if (!$pluginInfo) {
            return parent::getFormData();
        } else {
            return $this->___callPlugins('getFormData', func_get_args(), $pluginInfo);
        }
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
