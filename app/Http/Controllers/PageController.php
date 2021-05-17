<?php

namespace App\Http\Controllers;

use Exception;
use Mail;
use Session;
use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;

class PageController extends Controller
{
    public function Portfolio() {
        return view('profile_pages.portfolio');
    }

    public function Expertises() {
        return view('profile_pages.expertises');
    }

    public function ExpertisesWithId() {

        return view('profile_pages.expertises', ['#service-container']);
        // return view('profile_pages.expertise')->with(['id'=>$id]);
    }
    
    public function Career() {
        return view('profile_pages.career');
    }

    public function CompanyProfile() {
        
        $agent = new Agent();

        if ($agent->isMobile()) {
            return view('profile_pages.company-profile-mobile');
        }else{
            return view('profile_pages.company-profile');
        }
    }

    /**
     * Show the Current Project Detail.
     *
     * @return Illuminate\View\View
     */
    public function ProjectDetail($name) {

        $projects = [
            'secc' => [
                'name' => 'project-detail-lan.secc-name',
                'year' => 'project-detail-lan.secc-year',
                'showcaseImg' =>  '/img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/showcase.jpg',
                'description' => [
                    'heading' => 'project-detail-lan.secc-description-heading',
                    'duration' => 'project-detail-lan.secc-description-duration',
                    'scopeOfWork' => 'project-detail-lan.secc-description-scopeofwork'
                ],
                'location' => "/img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/map.jpg",
                'url'=> "https://goo.gl/maps/5rTdcTeX9yBDqSyo6",
                'previewImg' => [
                    "img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/ex1.jpg",
                    "img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/ex2.jpg",
                    "img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/ex3.jpg",
                    "img/portfolio-construction-images/2018-SECC-security-and-exchange-commision-of-cambodia/showcase.jpg",
                ]
            ],
            'gdnt' => [
                'name' => 'project-detail-lan.gdnt-name',
                'year' => 'project-detail-lan.gdnt-year',
                'showcaseImg' => "img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/showcase.min.jpg",
                'description' => [
                    'heading' => 'project-detail-lan.gdnt-description-heading',
                    'duration' => 'project-detail-lan.gdnt-description-duration',
                    'scopeOfWork' => 'project-detail-lan.gdnt-description-scopeofwork',
                ],
                'location' => "img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/map.jpg",
                'url' => "https://goo.gl/maps/5rTdcTeX9yBDqSyo6",
                'previewImg' => [
                    "img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/1.jpg",
                    "img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/2.jpg",
                    "img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/3.jpg",
                    "img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/4.jpg",
                    "img/portfolio-construction-images/2018-GDNT-general-department-of-national-treasury/showcase.min.jpg",
                ],
            ],
            'gdce' => [
                'name' => 'project-detail-lan.gdce-name',
                'year' => 'project-detail-lan.gdce-year',
                'showcaseImg' => "/img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/showcase.min.jpg",
                'description' => [
                    'heading' => 'project-detail-lan.gdce-description-heading',
                    'duration' => 'project-detail-lan.gdce-description-duration',
                    'scopeOfWork' => 'project-detail-lan.gdce-description-scopeofwork'
            ],
                'location' => "img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/map.jpg",
                'url' => "https://goo.gl/maps/zrWRkdRW6VZ51yoM7",
                'previewImg' => [
                    "img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/1.jpg",
                    "img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/2.jpg",
                    "img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/showcase.min.jpg",
                    "img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/3.jpg",
                    "img/portfolio-construction-images/2018-GDCE-general-departmet-of-custom-exist/4.jpg",
                ]
            ],
            'edcsr' => [
                'name' => 'project-detail-lan.edcsr-name',
                'year' => 'project-detail-lan.edcsr-year',
                'showcaseImg' => "img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/Showcase.jpg",
                'description' => [
                    'heading' => 'project-detail-lan.edcsr-description-heading',
                    'duration' => 'project-detail-lan.edcsr-description-duration',
                    'scopeOfWork' => 'project-detail-lan.edcsr-description-scopeofwork'
                ],
                'location' => "img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/map.jpg",
                'url' => "https://goo.gl/maps/fq8psP55dKAt5JM68",
                'previewImg' => [
                    "img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/1.jpg",
                    "img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/Showcase.jpg",
                    "img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/4.jpg",
                    "img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/2.jpg",
                    "img/portfolio-construction-images/2018-EDC-SR-electricity-du-cambodge-siem-reap/3.jpg",
                ]
            ],
            'gdceuniversity' => [
                'name' => 'project-detail-lan.gdceuniversity-name',
                'year' => 'project-detail-lan.gdceuniversity-year',
                'showcaseImg' => "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/Thumbnail.jpg",
                'description' => [
                    'heading' => 'project-detail-lan.gdceuniversity-description-heading',
                    'duration' => 'project-detail-lan.gdceuniversity-description-duration',
                    'scopeOfWork' => 'project-detail-lan.gdceuniversity-description-scopeofwork'
                ],
                'location' => "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/map.png",
                'url' => "https://goo.gl/maps/fq8psP55dKAt5JM68",
                'previewImg' => [
                    "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/1.jpg",
                    "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/2.jpg",
                    "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/3.jpg",
                    "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/4.jpg",
                    "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/Thumbnail.jpg",
                    "img/portfolio-construction-images/2018-GDCE-School-general-department-of-custom-exist-school/5.jpg",
                ]
            ],
            'acu' => [
                'name' => 'project-detail-lan.acu-name',
                'year' => 'project-detail-lan.acu-year',
                'showcaseImg' => "img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex2.jpg",
                'description' => [
                    'heading' => 'project-detail-lan.acu-description-heading',
                    'duration' => 'project-detail-lan.acu-description-duration',
                    'scopeOfWork' => 'project-detail-lan.acu-description-scopeofwork'
                ],
                'location' => "img/portfolio-construction-images/2019-ACU-anti-corruption-unit/map.png",
                'url' => "https://goo.gl/maps/z9k4txPuWFcfPJer5",
                'previewImg' => [
                    "img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex1.jpg",
                    "img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex2.jpg",
                    "img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex3.jpg",
                    "img/portfolio-construction-images/2019-ACU-anti-corruption-unit/ex4.jpg",
                ]
            ],
            'mef' => [
                'name' => 'project-detail-lan.mef-name',
                'year' => 'project-detail-lan.mef-year',
                'showcaseImg' => "img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/Thumbnail.jpeg",
                'description' => [
                    'heading' => 'project-detail-lan.mef-description-heading',
                    'duration' => 'project-detail-lan.mef-description-duration',
                    'scopeOfWork' => 'project-detail-lan.mef-description-scopeofwork'
                ],
                'location' => "img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/map.jpg",
                'url' => "https://goo.gl/maps/JduYMpYLtgMYL4Db7",
                'previewImg' => [
                    "img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/1.jpeg",
                    "img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/2.jpeg",
                    "img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/3.jpeg",
                    "img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/Thumbnail.jpeg",
                    "img/portfolio-construction-images/2019-MEF-ministry-of-economy-and-finance/4.jpeg",
                ]
            ],
            'tpl' => [
                'name' => 'project-detail-lan.tpl-name',
                'year' => 'project-detail-lan.tpl-year',
                'showcaseImg' => "img/portfolio-construction-images/The-ParkLand-Project/thumbnail-interior-design.jpg",
                'description' => [
                    'heading' => 'project-detail-lan.tpl-description-heading',
                    'duration' => 'project-detail-lan.tpl-description-duration',
                    'scopeOfWork' => 'project-detail-lan.tpl-description-scopeofwork'
                ],
                'location' => "img/portfolio-construction-images/The-ParkLand-Project/map.png",
                'url' => "https://goo.gl/maps/GHmaRbTUHwNqijJc8",
                'previewImg' => [
                    "img/portfolio-construction-images/The-ParkLand-Project/ex1.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in1.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in2.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in3.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in4.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in5.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in6.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in7.png",
                    "img/portfolio-construction-images/The-ParkLand-Project/in8.png",
                ]
            ],
        ];

        try{
            $project = $projects[$name];
        }catch(Exception $e){
            abort(404);
        }
        return view('profile_pages.project-detail')->with('project', $project);
    }
}
