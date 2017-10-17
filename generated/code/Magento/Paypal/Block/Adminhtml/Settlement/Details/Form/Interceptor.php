<?php
namespace Magento\Paypal\Block\Adminhtml\Settlement\Details\Form;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\Settlement\Details\Form
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\Settlement\Details\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Paypal\Model\Report\Settlement $settlement, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $settlement, $localeCurrency, $data);
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
