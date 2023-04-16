<?php

namespace App\Ldap;

//use LdapRecord\Models\Model;

use illuminate\Foundation\Auth\User as Authenticatable;
use illuminate\Notifications\Notifiable;
use LdapRecord\Laravel\Auth\AuthtenticatesWithLdap;

class Users extends Authenticatable
{
    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static $objectClasses = [

        'top',
        'person',
        'organizationalperson',
        'inetOrgPerson',
    ];
}
