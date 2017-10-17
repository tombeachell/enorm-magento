<?php
namespace Magento\GiftMessage\Block\Message\Inline;

/**
 * Interceptor class for @see \Magento\GiftMessage\Block\Message\Inline
 */
class Interceptor extends \Magento\GiftMessage\Block\Message\Inline implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\GiftMessage\Helper\Message $giftMessageMessage, \Magento\Catalog\Block\Product\ImageBuilder $imageBuilder, \Magento\Framework\App\Http\Context $httpContext, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerSession, $giftMessageMessage, $imageBuilder, $httpContext, $data);
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
