<?php
namespace Magento\Directory\Model\Currency;

/**
 * Interceptor class for @see \Magento\Directory\Model\Currency
 */
class Interceptor extends \Magento\Directory\Model\Currency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Directory\Model\Currency\FilterFactory $currencyFilterFactory, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $localeFormat, $storeManager, $directoryHelper, $currencyFilterFactory, $localeCurrency, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function format($price, $options = array(), $includeContainer = true, $addBrackets = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'format');
        if (!$pluginInfo) {
            return parent::format($price, $options, $includeContainer, $addBrackets);
        } else {
            return $this->___callPlugins('format', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatPrecision($price, $precision, $options = array(), $includeContainer = true, $addBrackets = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatPrecision');
        if (!$pluginInfo) {
            return parent::formatPrecision($price, $precision, $options, $includeContainer, $addBrackets);
        } else {
            return $this->___callPlugins('formatPrecision', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function formatTxt($price, $options = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatTxt');
        if (!$pluginInfo) {
            return parent::formatTxt($price, $options);
        } else {
            return $this->___callPlugins('formatTxt', func_get_args(), $pluginInfo);
        }
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
