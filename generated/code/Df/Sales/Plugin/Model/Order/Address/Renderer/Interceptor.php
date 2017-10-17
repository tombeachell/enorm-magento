<?php
namespace Df\Sales\Plugin\Model\Order\Address\Renderer;

/**
 * Interceptor class for @see \Df\Sales\Plugin\Model\Order\Address\Renderer
 */
class Interceptor extends \Df\Sales\Plugin\Model\Order\Address\Renderer implements \Magento\Framework\Interception\InterceptorInterface
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
    public function format(\Magento\Sales\Model\Order\Address $address, $type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'format');
        if (!$pluginInfo) {
            return parent::format($address, $type);
        } else {
            return $this->___callPlugins('format', func_get_args(), $pluginInfo);
        }
    }
}
