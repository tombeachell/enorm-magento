<?php
namespace Magento\SalesRule\Block\Rss\Discounts;

/**
 * Interceptor class for @see \Magento\SalesRule\Block\Rss\Discounts
 */
class Interceptor extends \Magento\SalesRule\Block\Rss\Discounts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Http\Context $httpContext, \Magento\SalesRule\Model\Rss\Discounts $rssModel, \Magento\Framework\App\Rss\UrlBuilderInterface $rssUrlBuilder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $httpContext, $rssModel, $rssUrlBuilder, $data);
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
