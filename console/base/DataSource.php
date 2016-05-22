<?php

namespace omgdef\fias\console\base;

interface DataSource
{
    public function getRows($maxCount = 1000);
}
