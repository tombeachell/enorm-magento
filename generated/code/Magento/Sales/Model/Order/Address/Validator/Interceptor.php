<?php
namespace Magento\Sales\Model\Order\Address\Validator;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Address\Validator
 */
class Interceptor extends \Magento\Sales\Model\Order\Address\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Directory\Helper\Data $directoryHelper, \Magento\Directory\Model\CountryFactory $countryFactory, \Magento\Eav\Model\Config $eavConfig = null)
    {
        $this->___init();
        parent::__construct($directoryHelper, $countryFactory, $eavConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Sales\Model\Order\Address $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($address);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }
}
