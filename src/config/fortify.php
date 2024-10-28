<?php

use Laravel\Fortify\Features; 

return [
    'guard' => 'web',
    
    'passwords' => 'users',
    
    'username' => 'email',
    
    'email' => 'email',
    
    'views' => true,  // カスタムビューの使用を有効化
    
    'features' => [
        Features::registration(),
        Features::resetPasswords(),
    ],
];
