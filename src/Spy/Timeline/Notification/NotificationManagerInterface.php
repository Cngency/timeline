<?php

namespace Spy\Timeline\Notification;

use Spy\Timeline\Model\ActionInterface;
use Spy\Timeline\Model\ComponentInterface;
use Spy\Timeline\Notification\Notifier\NotifierInterface;

/**
 * NotificationManager
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
interface NotificationManagerInterface
{
    /**
     * @param NotifierInterface $notifier
     */
    public function addNotifier(NotifierInterface $notifier);

    /**
     * @param ActionInterface    $action  action notified
     * @param string             $context Context notified
     * @param ComponentInterface $subject Subject notified
     */
    public function notify(ActionInterface $action, $context, ComponentInterface $subject);
}
