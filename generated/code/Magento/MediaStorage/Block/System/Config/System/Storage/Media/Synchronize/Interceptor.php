<?php
namespace Magento\MediaStorage\Block\System\Config\System\Storage\Media\Synchronize;

/**
 * Interceptor class for @see \Magento\MediaStorage\Block\System\Config\System\Storage\Media\Synchronize
 */
class Interceptor extends \Magento\MediaStorage\Block\System\Config\System\Storage\Media\Synchronize implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\MediaStorage\Model\File\Storage $fileStorage, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $fileStorage, $data);
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
