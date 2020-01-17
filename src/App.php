<?php

namespace Weirdan\T;

class App
{
    public static function run(): ?bool
    {
        if (ENV === 'prod') {
            return true;
        }
        if (ENV === 'test') {
            return false;
        }
        return null;
    }
}
