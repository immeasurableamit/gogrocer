<?php
namespace App\Utility;

use App\Models\SmsTemplate;



class SmsUtility
{
    public static function phone_number_verification($user = '')
    {
        $sms_template   = SmsTemplate::where('identifier', 'phone_number_verification')->first();
        $sms_body       = $sms_template->sms_body;
        $sms_body       = str_replace('[[code]]', $user->verification_code, $sms_body);
        $sms_body       = str_replace('[[site_name]]', env('APP_NAME'), $sms_body);
        $template_id    = $sms_template->template_id;

        try {
            sendSMS($user->phone, env('APP_NAME'), $sms_body, $template_id);
        } catch (\Exception $e) { }
    }

}
