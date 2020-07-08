<?php declare(strict_types = 1);

namespace Kubomikita\Events;

interface EventsSubscriber
{

	public function onEvents(EventsManager $em): void;

}
