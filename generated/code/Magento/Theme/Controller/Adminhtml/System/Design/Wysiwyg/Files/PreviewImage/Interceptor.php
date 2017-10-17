<?php
namespace Magento\Theme\Controller\Adminhtml\System\Design\Wysiwyg\Files\PreviewImage;

/**
 * Interceptor class for @see \Magento\Theme\Controller\Adminhtml\System\Design\Wysiwyg\Files\PreviewImage
 */
class Interceptor extends \Magento\Theme\Controller\Adminhtml\System\Design\Wysiwyg\Files\PreviewImage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Theme\Helper\Storage $storage)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $storage);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }
}
