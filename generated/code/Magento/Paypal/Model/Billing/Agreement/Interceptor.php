<?php
namespace Magento\Paypal\Model\Billing\Agreement;

/**
 * Interceptor class for @see \Magento\Paypal\Model\Billing\Agreement
 */
class Interceptor extends \Magento\Paypal\Model\Billing\Agreement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Payment\Helper\Data $paymentData, \Magento\Paypal\Model\ResourceModel\Billing\Agreement\CollectionFactory $billingAgreementFactory, \Magento\Framework\Stdlib\DateTime\DateTimeFactory $dateFactory, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $paymentData, $billingAgreementFactory, $dateFactory, $resource, $resourceCollection, $data);
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
