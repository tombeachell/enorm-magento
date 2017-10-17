<?php
namespace Magento\Sales\Model\Order\Address\Renderer;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Address\Renderer
 */
class Interceptor extends \Magento\Sales\Model\Order\Address\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Address\Config $addressConfig, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->___init();
        parent::__construct($addressConfig, $eventManager);
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
