<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $login = [
        'email'        => 'required|valid_email',
        'password'     => 'required|min_length[4]',
    ];

    public $login_errors = [
        'email' => [
            'required' => 'Email không được để trống!',
            'valid_email' => 'Email không hợp lệ!',
        ],
        'password' => [
            'required' => 'Mật khẩu không được để trống!',
            'min_length' => 'Mật khẩu phải có ít nhất 4 kí tự!',
        ],
    ];
}
