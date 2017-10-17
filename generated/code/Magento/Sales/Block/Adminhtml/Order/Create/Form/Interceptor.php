<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Customer\Model\Metadata\FormFactory $customerFormFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Magento\Customer\Model\Address\Mapper $addressMapper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $jsonEncoder, $customerFormFactory, $customerRepository, $localeCurrency, $addressMapper, $data);
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
