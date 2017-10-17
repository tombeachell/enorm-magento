<?php
namespace Magento\GoogleAnalytics\Block\Ga;

/**
 * Interceptor class for @see \Magento\GoogleAnalytics\Block\Ga
 */
class Interceptor extends \Magento\GoogleAnalytics\Block\Ga implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $salesOrderCollection, \Magento\GoogleAnalytics\Helper\Data $googleAnalyticsData, array $data = array(), \Magento\Cookie\Helper\Cookie $cookieHelper = null)
    {
        $this->___init();
        parent::__construct($context, $salesOrderCollection, $googleAnalyticsData, $data, $cookieHelper);
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
