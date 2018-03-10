<?php
namespace StomtFeedback\Subscriber;

use Enlight\Event\SubscriberInterface;
use Shopware\Components\Plugin\ConfigReader;
use StomtFeedback\Components\StomtFeedback;

class RouteSubscriber implements SubscriberInterface
{
    private $pluginDirectory;
    private $StomtFeedback;
    private $config;

    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onPostDispatch'
        ];
    }

    public function __construct($pluginName, $pluginDirectory, StomtFeedback $StomtFeedback, ConfigReader $configReader)
    {
        $this->pluginDirectory = $pluginDirectory;
        $this->StomtFeedback = $StomtFeedback;

        $this->config = $configReader->getByPluginName($pluginName);
    }

    public function onPostDispatch(\Enlight_Controller_ActionEventArgs $args)
    {
        /** @var \Enlight_Controller_Action $controller */
        $controller = $args->get('subject');
        $view = $controller->View();

        $view->addTemplateDir($this->pluginDirectory . '/Resources/views');

       
        $view->assign('stomtContent', $this->config['stomtContent']);
        $view->assign('stomttitle', $this->config['stomttitle']);
        $view->assign('stomtContentBackgroundColor', $this->config['stomtContentBackgroundColor']);
         $view->assign('stomtContentHoverColor', $this->config['stomtContentHoverColor']);
        $view->assign('stomtContentTextColor', $this->config['stomtContentTextColor']);
        $view->assign('stomtContentPreload', $this->config['stomtContentPreload']);
        $view->assign('stomtContentPosition', $this->config['stomtContentPosition']);

        
        
    }
}
