<?php

namespace SDK\Umeng\Push\android;

use SDK\Umeng\Push\AndroidNotification;

class AndroidUnicast extends AndroidNotification
{
    public function __construct()
    {
        parent::__construct();
        $this->data['type'] = 'unicast';
        $this->data['device_tokens'] = null;
    }
}
