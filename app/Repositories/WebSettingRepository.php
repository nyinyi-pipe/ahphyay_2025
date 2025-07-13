<?php

namespace App\Repositories;

use App\Models\SiteSettings;

class WebSettingRepository
{
    public function getLandingAttributes(): array
    {
        $keys = ['logo', 'company_name', 'banner_1', 'banner_2', 'about_image'];

        
        $settings = SiteSettings::whereIn('key', $keys)
            ->pluck('value', 'key');

        return [
            'logo'         => $settings['logo']         ?? null,
            'company_name' => $settings['company_name'] ?? '',
            'banner_1'     => $settings['banner_1']     ?? null,
            'banner_2'     => $settings['banner_2']     ?? null,
            'about_img'    => $settings['about_image']  ?? null,
        ];
    }
}
