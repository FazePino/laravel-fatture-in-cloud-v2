<?php

namespace OfflineAgency\LaravelFattureInCloudV2\Entities\Company;

use OfflineAgency\LaravelFattureInCloudV2\Entities\AbstractEntity;

class Company extends AbstractEntity
{
    /**
     * @var int
     */
    public $id;


    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $fic;

    /**
     * @var string
     */
    public $fic_plan_name;

    /**
     * @var string
     */
    public $fic_signup_date;

    /**
     * @var string
     */
    public $fic_license_expire;

    /**
     * @var string
     */
    public $use_fic;

    /**
     * @var string
     */
    public $fic_need_setup;

    /**
     * @var string
     */
    public $fic_license_type;

    /**
     * @var string
     */
    public $dic;

    /**
     * @var string
     */
    public $dic_plan_name;

    /**
     * @var string
     */
    public $dic_signup_date;


    /**
     * @var string
     */
    public $dic_license_expire;

    /**
     * @var string
     */
    public $use_dic;

    /**
     * @var string
     */
    public $dic_license_type;

    /**
     * @var string
     */
    public $registration_service;

    /**
     * @var string
     */
    public $can_use_coupon;

    /**
     * @var string
     */
    public $access_info;

    /**
     * @var string
     */
    public $plan_info;

    /**
     * @var string
     */
    public $is_accountant;

    /**
     * @var string
     */
    public $accountant_id;

    /**
     * @var string
     */
    public $fic_payment_subject;

    /**
     * @var string
     */
    public $dic_payment_subject;
}
