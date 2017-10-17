<?php
namespace Magento\Wishlist\Block\Cart\Item\Renderer\Actions\MoveToWishlist;

/**
 * Interceptor class for @see \Magento\Wishlist\Block\Cart\Item\Renderer\Actions\MoveToWishlist
 */
class Interceptor extends \Magento\Wishlist\Block\Cart\Item\Renderer\Actions\MoveToWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Wishlist\Helper\Data $wishlistHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $wishlistHelper, $data);
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
