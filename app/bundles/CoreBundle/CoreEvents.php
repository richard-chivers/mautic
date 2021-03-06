<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\CoreBundle;

/**
 * Class CoreEvents.
 */
final class CoreEvents
{
    /**
     * The mautic.build_menu event is thrown to render menu items.
     *
     * The event listener receives a Mautic\CoreBundle\Event\MenuEvent instance.
     *
     * @var string
     */
    const BUILD_MENU = 'mautic.build_menu';

    /**
     * The mautic.build_route event is thrown to build Mautic bundle routes.
     *
     * The event listener receives a Mautic\CoreBundle\Event\RouteEvent instance.
     *
     * @var string
     */
    const BUILD_ROUTE = 'mautic.build_route';

    /**
     * The mautic.global_search event is thrown to build global search results from applicable bundles.
     *
     * The event listener receives a Mautic\CoreBundle\Event\GlobalSearchEvent instance.
     *
     * @var string
     */
    const GLOBAL_SEARCH = 'mautic.global_search';

    /**
     * The mautic.list_stats event is thrown to build statistical results from applicable bundles/database tables.
     *
     * The event listener receives a Mautic\CoreBundle\Event\StatsEvent instance.
     *
     * @var string
     */
    const LIST_STATS = 'mautic.list_stats';

    /**
     * The mautic.build_command_list event is thrown to build global search's autocomplete list.
     *
     * The event listener receives a Mautic\CoreBundle\Event\CommandListEvent instance.
     *
     * @var string
     */
    const BUILD_COMMAND_LIST = 'mautic.build_command_list';

    /**
     * The mautic.on_fetch_icons event is thrown to fetch icons of menu items.
     *
     * The event listener receives a Mautic\CoreBundle\Event\IconEvent instance.
     *
     * @var string
     */
    const FETCH_ICONS = 'mautic.on_fetch_icons';

    /**
     * The mautic.build_canvas_content event is dispatched to populate the content for the right panel.
     *
     * The event listener receives a Mautic\CoreBundle\Event\SidebarCanvasEvent instance.
     *
     * @var string
     */
    const BUILD_CANVAS_CONTENT = 'mautic.build_canvas_content';

    /**
     * The mautic.pre_upgrade is dispatched before an upgrade.
     *
     * The event listener receives a Mautic\CoreBundle\Event\UpgradeEvent instance.
     *
     * @var string
     */
    const PRE_UPGRADE = 'mautic.pre_upgrade';

    /**
     * The mautic.post_upgrade is dispatched after an upgrade.
     *
     * The event listener receives a Mautic\CoreBundle\Event\UpgradeEvent instance.
     *
     * @var string
     */
    const POST_UPGRADE = 'mautic.post_upgrade';

    /**
     * The mautic.build_embeddable_js event is dispatched to allow plugins to extend the mautic tracking js.
     *
     * The event listener receives a Mautic\CoreBundle\Event\BuildJsEvent instance.
     *
     * @var string
     */
    const BUILD_MAUTIC_JS = 'mautic.build_embeddable_js';

    /**
     * The mautic.maintenance_cleanup_data event is dispatched to purge old data.
     *
     * The event listener receives a Mautic\CoreBundle\Event\MaintenanceEvent instance.
     *
     * @var string
     */
    const MAINTENANCE_CLEANUP_DATA = 'mautic.maintenance_cleanup_data';

    /**
     * The mautic.channel_broadcast event is dispatched by the mautic:send:broadcast command to process communication to pending contacts.
     *
     * The event listener receives a Mautic\CoreBundle\Event\ChannelBroadcastEvent instance.
     *
     * @var string
     */
    const CHANNEL_BROADCAST = 'mautic.channel_broadcast';

    /**
     * The mautic.message_queued event is dispatched to save a message to the queue.
     *
     * The event listener receives a Mautic\CoreBundle\Event\MessageQueueEvent instance.
     *
     * @var string
     */
    const MESSAGE_QUEUED = 'mautic.message_queued';

    /**
     * The mautic.process_message_queue event is dispatched to be processed by a listener.
     *
     * The event listener receives a Mautic\CoreBundle\Event\MessageQueueProcessEvent instance.
     *
     * @var string
     */
    const PROCESS_MESSAGE_QUEUE = 'mautic.process_message_queue';

    /**
     * The mautic.process_message_queue_batch event is dispatched to process a batch of messages by channel and channel ID.
     *
     * The event listener receives a Mautic\CoreBundle\Event\MessageQueueBatchProcessEvent instance.
     *
     * @var string
     */
    const PROCESS_MESSAGE_QUEUE_BATCH = 'mautic.process_message_queue_batch';

    /**
     * The mautic.view_inject_custom_buttons event is dispatched to inject custom buttons into Mautic's UI by plugins/other bundles.
     *
     * The event listener receives a Mautic\CoreBundle\Event\CustomButtonEvent instance.
     *
     * @var string
     */
    const VIEW_INJECT_CUSTOM_BUTTONS = 'mautic.view_inject_custom_buttons';
}
