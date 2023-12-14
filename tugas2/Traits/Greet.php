<?php

namespace Traits;

if (!trait_exists('Traits\Greet')) {
    trait Greet {
        public function greet()
        {
            return "Hi! ";
        }
    }
}
