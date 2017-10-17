<?php
namespace Magento\Rss\Block\Feeds;

/**
 * Interceptor class for @see \Magento\Rss\Block\Feeds
 */
class Interceptor extends \Magento\Rss\Block\Feeds implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\Rss\RssManagerInterface $rssManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $rssManager, $data);
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
