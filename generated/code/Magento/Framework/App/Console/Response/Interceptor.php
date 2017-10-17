<?php
namespace Magento\Framework\App\Console\Response;

/**
 * Interceptor class for @see \Magento\Framework\App\Console\Response
 */
class Interceptor extends \Magento\Framework\App\Console\Response implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function sendResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendResponse');
        if (!$pluginInfo) {
            return parent::sendResponse();
        } else {
            return $this->___callPlugins('sendResponse', func_get_args(), $pluginInfo);
        }
    }
}
