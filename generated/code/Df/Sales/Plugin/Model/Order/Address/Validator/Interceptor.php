<?php
namespace Df\Sales\Plugin\Model\Order\Address\Validator;

/**
 * Interceptor class for @see \Df\Sales\Plugin\Model\Order\Address\Validator
 */
class Interceptor extends \Df\Sales\Plugin\Model\Order\Address\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
        parent::__construct();
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
