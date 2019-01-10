<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'WebController';
$route['404_override'] = 'errors/cli/error_404';
$route['translate_uri_dashes'] = FALSE;


/* Applicant View */

    $route['dev/switch/usertype/(:any)'] = 'admin/DevController/ChangeUserType/$1';
    /* Log in */                            $route['login'] = 'admin/HomeController/UserLogin';
    /* Home (Profile) */                    $route['profile'] = 'admin/LoggedUserController/UserHome';
    /* Search */                            $route['search/jobs'] = 'admin/LoggedUserController/SearchJobs';
        /* Job Details */
    /* Saved Jobs */                        $route['saved-jobs'] = 'admin/LoggedUserController/SavedJobs';
    /* My Applications */                   $route['applied-jobs'] = 'admin/LoggedUserController/UserApplications';
    /* My Alerts */                         $route['job-alerts'] = 'admin/LoggedUserController/UserAlerts';
    /* Ask PESO */                          $route['askPESO'] = 'admin/LoggedUserController/AskPeso';
    /* Settings */                          $route['account-settings'] = 'admin/LoggedUserController/Settings';
$route['activate/processor'] = 'WebController/Processor';/* Log in */                                
$route['activate/sendcode'] = 'WebController/SendCode';/* Log in */   
$route['activate/account'] = 'WebController/ActivationPage';/* Log in */   
/* Management View */
$route['manage/verify'] = 'WebController/ActivationPage';/* Log in */    
$route['manage/login'] = 'admin/HomeController/AdminEmployeeLogin';/* Log in */                                
$route['manage'] = 'admin/HomeController/Dashboard';    /* Dashboard */                         
$route['activate/(:any)/(:any)'] = 'WebController/Processor/$1/$2';/* Log in */                       
$route['manage/users-masterlist'] = 'admin/UserController/UserMasterlist';        /* User Masterlist */               
        /* Manage Groups */                 $route['manage/user-groups'] = 'admin/GroupController/Group';
        /* Manage Courses */                 $route['manage/maintenace/user-courses'] = 'admin/CourselistController/Courselist';
        /* Manage Employment Status */                 $route['manage/maintenance/user-status'] = 'admin/EmploymentStatusController/EmploymentStatus';
         /* Manage Account Release */                 $route['manage/account-release'] = 'admin/AccountReleaseController/AccountRelease';
        /* Maintenance */
            /* Language */                  $route['manage/maintenance/languages'] = 'admin/LanguageController/Languages';
            /* Licenses */                  $route['manage/maintenance/licenses'] = 'admin/LicenseController/Licenses';
            /* Certificates */              $route['manage/maintenance/certificates'] = 'admin/CertificatesController/CertificatesList';
            /* Disabilities */              $route['manage/maintenance/disabilities'] = 'admin/DisabilitiesController/Disabilities';
            /* Dress Code */                $route['manage/maintenance/dresscode'] = 'admin/DresscodeController/Dresscode';
            
            /* Preferred Locations */       $route['manage/maintenance/preferred-locations'] = 'admin/LocationController/Location';
            /* Job titles */                $route['manage/maintenance/job-titles'] = 'admin/JobtitlesController/Jobtitles';
            /* Categories */                $route['manage/maintenance/applicant-categories'] = 'admin/CategoriesController/Categories';

            /* Applicant Level */           $route['manage/maintenance/applicant-level'] = 'admin/ApplicantLevelController/ApplicantLevel';

            /* Employment Types */           $route['manage/maintenance/employment-types'] = 'admin/EmploymentTypesController/EmploymentTypes';

            /* Skills */                     $route['manage/maintenance/skills'] = 'admin/SkillsController/Skills';


             /* Industries */                $route['manage/maintenance/industries'] = 'admin/IndustriesController/Industries';

        /* Reviews and Ratings */           $route['manage/reviews-and-ratings'] = 'admin/RnrController/ReviewAndRatings';
        /* Surveys */                       $route['manage/surveys'] = 'admin/SurveyController/Survey';


    /* TRANSACTIONS */
        /* Applicants */ 
            // /* Add walk-in */               $route['manage/do/applicants/add'] = 'admin/ApplicantController/ApplicantInfo';
            //  View List                  $route['manage/do/applicants/view-list'] = 'admin/ApplicantController/Masterlist';
            /* Job Applications */          $route['manage/do/applicants/job-applications'] = 'admin/JobApplicationController/JobApplication';
        /* Establishment */ 
            /* Add new */                   $route['manage/do/establishments/add'] = 'admin/EmployerController/EmployerRegistration';
            /* View List */                 $route['manage/do/establishments/view-list'] = 'admin/EmployerController/EstablishmentMasterlist';
            /* Pending Accreditation */     $route['manage/do/establishments/pending-accreditation'] = 'admin/EmployerController/PendingRequest';   
        /* Jobs */ 
            /* Add new */                   $route['manage/do/jobs/add'] = 'admin/JobsController/NewJob';       
            /* View Jobs */                 $route['manage/do/jobs/view-list'] = 'admin/JobsController/ViewJobs';  
            /* Pending Job Posting */       $route['manage/do/jobs/pending-job-posts'] = 'admin/JobsController/PendingJobs';      

    /* REPORTS */
        /* Applicants Masterlist */         $route['manage/reports/applicants'] = 'admin/ReportController/ApplicantReport'; 
        /* Establishments Masterlist */     $route['manage/reports/establishments'] = 'admin/ReportController/EstablishmentReports'; 
        /* Referral Reports */              $route['manage/reports/referrals'] = 'admin/ReportController/ReferralReports'; 
        /* Successful Hires */              $route['manage/reports/successful-hires'] = 'admin/ReportController/SuccessfulHires'; 
        /* Feedbacks */                     $route['manage/reports/feedbacks'] = 'admin/ReportController/Feedbacks'; 
        /* Establishment Ratings */         $route['manage/reports/establishment-ratings'] = 'admin/ReportController/EstablishmentRatings'; 
        /* Survey Summary */                $route['manage/reports/survey-summary'] = 'admin/ReportController/SurverSummary'; 
        /* Add Posts */                     $route['manage/settings/add-web-post'] = 'admin/WebPostsController/AddWebPosts'; 
        /* Post Types */                    $route['manage/settings/add-post-types'] = 'admin/WebPostsTypesController/PostTypes';

        
// $route['manage/do/jobs/view-list'] = 'PostController/JobPost';


/* Developers */
                                            $route['changelog'] = 'admin/HomeController/Changelog';




$route['web/register/applicant'] = 'web/RegisterController/CreateApplicant';
$route['web/login/applicant'] = 'web/LoginController/authenticate';


$route['web/logout'] = 'WebController/logout';
$route['logout'] = 'WebController/logout';


//ERRORS

$route['403'] = 'SiteErrorController/Error403';
$route['admin/login/auth'] = 'web/LoginController/authenticate';
$route['admin/login'] = 'admin/AuthenticationController/LoginPage';



// MAINTENANCE (CREATE, READ, UPDATE, DELETE)

        //Languages
        $route['admin/languages/add'] = 'admin/LanguageController/Create';
        $route['admin/languages/edit'] = 'admin/LanguageController/Update';
        $route['admin/languages/del'] = 'admin/LanguageController/Delete';
        $route['admin/languages/read'] = 'admin/LanguageController/Read';

        //Licences
        $route['admin/licenses/add'] = 'admin/LicenseController/Create';
        $route['admin/licenses/edit'] = 'admin/LicenseController/Update';
        $route['admin/licenses/del'] = 'admin/LicenseController/Delete';
        $route['admin/licenses/read'] = 'admin/LicenseController/Read';

        //Certificates
        $route['admin/certificates/add'] = 'admin/CertificatesController/Create';
        $route['admin/certificates/edit'] = 'admin/CertificatesController/Update';
        $route['admin/certificates/del'] = 'admin/CertificatesController/Delete';
        $route['admin/certificates/read'] = 'admin/CertificatesController/Read';

        //Disabilities
        $route['admin/disabilities/add'] = 'admin/DisabilitiesController/Create';
        $route['admin/disabilities/edit'] = 'admin/DisabilitiesController/Update';
        $route['admin/disabilities/del'] = 'admin/DisabilitiesController/Delete';
        $route['admin/disabilities/read'] = 'admin/DisabilitiesController/Read';

        //Disabilities
        $route['admin/dresscode/add'] = 'admin/DresscodeController/Create';
        $route['admin/dresscode/edit'] = 'admin/DresscodeController/Update';
        $route['admin/dresscode/del'] = 'admin/DresscodeController/Delete';
        $route['admin/dresscode/read'] = 'admin/DresscodeController/Read';
 
        //Preferred Locations
        $route['admin/preferred-locations/add'] = 'admin/LocationController/Create';
        $route['admin/preferred-locations/edit'] = 'admin/LocationController/Update';
        $route['admin/preferred-locations/del'] = 'admin/LocationController/Delete';
        $route['admin/preferred-locations/read'] = 'admin/LocationController/Read';
          
        //Job Titles
        $route['admin/job-titles/add'] = 'admin/JobtitlesController/Create';
        $route['admin/job-titles/edit'] = 'admin/JobtitlesController/Update';
        $route['admin/job-titles/del'] = 'admin/JobtitlesController/Delete';
        $route['admin/job-titles/read'] = 'admin/JobtitlesController/Read';

        //Categories
        $route['admin/categories/add'] = 'admin/CategoriesController/Create'; //POST to create
        $route['admin/categories/edit'] = 'admin/CategoriesController/Update'; // POST to edit
        $route['admin/categories/del'] = 'admin/CategoriesController/Delete'; // POST to delete
        $route['admin/categories/read'] = 'admin/CategoriesController/Read'; // POST to view

          //industries
        $route['admin/industries/add'] = 'admin/IndustriesController/Create'; //POST to create
        $route['admin/industries/edit'] = 'admin/IndustriesController/Update'; // POST to edit
        $route['admin/industries/del'] = 'admin/IndustriesController/Delete'; // POST to delete
        $route['admin/industries/read'] = 'admin/IndustriesController/Read'; // POST to view

        //Applicant Level
        $route['admin/applicantlevel/add'] = 'admin/ApplicantLevelController/Create';
        $route['admin/applicantlevel/edit'] = 'admin/ApplicantLevelController/Update';
        $route['admin/applicantlevel/del'] = 'admin/ApplicantLevelController/Delete';
        $route['admin/applicantlevel/read'] = 'admin/ApplicantLevelController/Read';

        //Employment Types
        $route['admin/employmenttypes/add'] = 'admin/EmploymentTypesController/Create';
        $route['admin/employmenttypes/edit'] = 'admin/EmploymentTypesController/Update';
        $route['admin/employmenttypes/del'] = 'admin/EmploymentTypesController/Delete';
        $route['admin/employmenttypes/read'] = 'admin/EmploymentTypesController/Read';


         //Group
        $route['admin/group/add'] = 'admin/GroupController/Create'; //POST to create
        $route['admin/group/edit'] = 'admin/GroupController/Update'; // POST to edit
        $route['admin/group/del'] = 'admin/GroupController/Delete'; // POST to delete
        $route['admin/group/read'] = 'admin/GroupController/Read'; // POST to view

         //Courselist
        $route['admin/course/add'] = 'admin/CourselistController/Create'; //POST to create
        $route['admin/course/edit'] = 'admin/CourselistController/Update'; // POST to edit
        $route['admin/course/del'] = 'admin/CourselistController/Delete'; // POST to delete
        $route['admin/course/read'] = 'admin/CourselistController/Read'; // POST to view

         //EmploymentStatuss
        $route['admin/employmentstat/add'] = 'admin/EmploymentStatusController/Create'; //POST to create
        $route['admin/employmentstat/edit'] = 'admin/EmploymentStatusController/Update'; // POST to edit
        $route['admin/employmentstat/del'] = 'admin/EmploymentStatusController/Delete'; // POST to delete
        $route['admin/employmentstat/read'] = 'admin/EmploymentStatusController/Read'; // POST to view

         //AccountRelease
        $route['admin/accountrelease/add'] = 'admin/AccountReleaseController/Create'; //POST to create
        $route['admin/accountrelease/edit'] = 'admin/AccountReleaseController/Update'; // POST to edit
        $route['admin/accountrelease/del'] = 'admin/AccountReleaseController/Delete'; // POST to delete
        $route['admin/accountrelease/read'] = 'admin/AccountReleaseController/Read'; // POST to view

        //industries
        $route['admin/posttypes/add'] = 'admin/WebPostsTypesController/Create'; //POST to create
        $route['admin/posttypes/edit'] = 'admin/WebPostsTypesController/Update'; // POST to edit
        $route['admin/posttypes/del'] = 'admin/WebPostsTypesController/Delete'; // POST to delete
        $route['admin/posttypes/read'] = 'admin/WebPostsTypesController/Read'; // POST to view

         //webpost
        $route['admin/webposts/add'] = 'admin/WebPostsController/Create'; //POST to create
        $route['admin/webposts/edit'] = 'admin/WebPostsController/Update'; // POST to edit
        $route['admin/webposts/del'] = 'admin/WebPostsController/Delete'; // POST to delete
        $route['admin/webposts/read'] = 'admin/WebPostsController/Read'; // POST to view

        //Skills
        $route['admin/skills/add'] = 'admin/SkillsController/Create';
        $route['admin/skills/edit'] = 'admin/SkillsController/Update';
        $route['admin/skills/del'] = 'admin/SkillsController/Delete';
        $route['admin/skills/read'] = 'admin/SkillsController/Read';

        $route['admin/applicants/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1';
        $route['admin/applicants'] = 'admin/ApplicantController/ApplicantInfo';
        $route['admin/applicants/add'] = 'admin/ApplicantController/Create'; //POST to create
        $route['admin/applicants/edit'] = 'admin/ApplicantController/Update'; // POST to edit
        $route['admin/applicants/del'] = 'admin/ApplicantController/Delete'; // POST to delete
        $route['admin/applicants/read'] = 'admin/ApplicantController/Read'; // POST to view
        $route['admin/applicants/(:any)/(:any)'] = 'admin/ApplicantController/ApplicantInfo/$1/$2';
        $route['manage/settings/all-web-post'] = 'admin/WebPostsController/AllWebPosts';
        $route['admin/EstablishmentMasterlist/add'] = 'admin/EstablishmentlistController/Create'; //POST to create
        $route['admin/EstablishmentMasterlist/edit'] = 'admin/EstablishmentlistController/Update'; // POST to edit
        $route['admin/EstablishmentMasterlist/del'] = 'admin/EstablishmentlistController/Delete'; // POST to delete
        $route['admin/EstablishmentMasterlist/read'] = 'admin/EstablishmentlistController/Read'; // POST to view


        /* Tags */ $route['manage/settings/tags'] = 'admin/TagsController/Tags';

        $route['admin/tags/add'] = 'admin/TagsController/Create'; //POST to create
        $route['admin/tags/edit'] = 'admin/TagsController/Update'; // POST to edit
        $route['admin/tags/del'] = 'admin/TagsController/Delete'; // POST to delete
        $route['admin/tags/read'] = 'admin/TagsController/Read'; // POST to view

        /* Types */ $route['manage/settings/types'] = 'admin/TypesController/Types';

        $route['admin/types/add'] = 'admin/TypesController/Create'; //POST to create
        $route['admin/types/edit'] = 'admin/TypesController/Update'; // POST to edit
        $route['admin/types/del'] = 'admin/TypesController/Delete'; // POST to delete
        $route['admin/types/read'] = 'admin/TypesController/Read'; // POST to view

        //industries
        $route['admin/industries/add'] = 'admin/IndustriesController/Create'; //POST to create
        $route['admin/industries/edit'] = 'admin/IndustriesController/Update'; // POST to edit
        $route['admin/industries/del'] = 'admin/IndustriesController/Delete'; // POST to delete
        $route['admin/industries/read'] = 'admin/IndustriesController/Read'; // POST to view

        $route['manage/maintenance/countries'] = 'admin/CountriesController/Countries';
        $route['admin/countries/add'] = 'admin/CountriesController/Create'; //POST to create
        $route['admin/countries/edit'] = 'admin/CountriesController/Update'; // POST to edit
        $route['admin/countries/del'] = 'admin/CountriesController/Delete'; // POST to delete
        $route['admin/countries/read'] = 'admin/CountriesController/Read'; // POST to view

        /* Nationality */                     $route['manage/maintenance/nationality'] = 'admin/NationalityController/Nationality';
        
        //Nationality
        $route['admin/nationality/add'] = 'admin/NationalityController/Create'; //POST to create
        $route['admin/nationality/edit'] = 'admin/NationalityController/Update'; // POST to edit
        $route['admin/nationality/del'] = 'admin/NationalityController/Delete'; // POST to delete
        $route['admin/nationality/read'] = 'admin/NationalityController/Read'; // POST to view

        /* Regions */                     $route['manage/maintenance/region'] = 'admin/RegionController/Region';
        
        //Regions
        $route['admin/region/add'] = 'admin/RegionController/Create'; //POST to create
        $route['admin/region/edit'] = 'admin/RegionController/Update'; // POST to edit
        $route['admin/region/del'] = 'admin/RegionController/Delete'; // POST to delete
        $route['admin/region/read'] = 'admin/RegionController/Read'; // POST to view

        /* Cities */                     $route['manage/maintenance/cities'] = 'admin/CitiesController/Cities';
        
        //Cities
        $route['admin/cities/add'] = 'admin/CitiesController/Create'; //POST to create
        $route['admin/cities/edit'] = 'admin/CitiesController/Update'; // POST to edit
        $route['admin/cities/del'] = 'admin/CitiesController/Delete'; // POST to delete
        $route['admin/cities/read'] = 'admin/CitiesController/Read'; // POST to view


        $route['manage/settings/view-web-post/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1';
      
        $route['manage/settings/add-web-post/(:any)/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1/$2';
        $route['manage/settings/view-web-post/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1';
      
        $route['manage/settings/add-web-post/(:any)/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1/$2';

        $route['manage/settings/update-web-post/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1';
        $route['manage/settings/update-web-post/(:any)/(:any)'] = 'admin/WebPostsController/AddWebPosts/$1/$2';



        $route['manage/settings/add-services'] = 'admin/ServicesController/AddServices'; 
        $route['manage/settings/all-services'] = 'admin/ServicesController/AllServices';
        $route['manage/settings/services'] = 'admin/ServicesController/Services';
        $route['admin/services/add'] = 'admin/ServicesController/Create'; //POST to create
        $route['admin/services/edit'] = 'admin/ServicesController/Update'; // POST to edit
        $route['admin/services/del'] = 'admin/ServicesController/Delete'; // POST to delete
        $route['admin/services/read'] = 'admin/ServicesController/Read'; // POST to view
        $route['manage/settings/view-services/(:any)'] = 'admin/ServicesController/AddServices/$1';
        $route['manage/settings/add-services/(:any)/(:any)'] = 'admin/ServicesController/AddServices/$1/$2';
        $route['manage/settings/update-services/(:any)'] = 'admin/ServicesController/AddServices/$1';
        $route['manage/settings/update-services/(:any)/(:any)'] = 'admin/ServicesController/AddServices/$1/$2';



        $route['web/browsejob'] = 'web/browsejobcontroller/browsejob';
      $route['admin/job-applications/del'] = 'admin/JobApplicationController/Delete'; // POST to delete



        //Dialect
        $route['admin/dialect/add'] = 'admin/DialectController/Create'; //POST to create
        $route['admin/dialect/edit'] = 'admin/DialectController/Update'; // POST to edit
        $route['admin/dialect/del'] = 'admin/DialectController/Delete'; // POST to delete
        $route['admin/dialect/read'] = 'admin/DialectController/Read'; // POST to view


      // jobposts

        $route['manage/do/jobs/addnewjob'] = 'admin/JobsController/AddNewJob'; 
        $route['admin/jobposts/del'] = 'admin/JobsController/Delete';
      
        $route['manage/do/jobs/add/(:any)'] = 'admin/JobsController/NewJob/$1'; 
        $route['manage/do/jobs/add/(:any)/(:any)'] = 'admin/JobsController/NewJob/$1/$2';

        $route['admin/emppost/add'] = 'admin/EmployerController/Create'; //POST to create
        $route['admin/emppost/edit'] = 'admin/EmployerController/Update'; // POST to edit
        $route['admin/emppost/del'] = 'admin/EmployerController/Delete'; // POST to delete
        $route['admin/emppost/read'] = 'admin/EmployerController/Read'; // POST to view


        /* Modules */ $route['manage/modules'] = 'admin/ModulesController/Modules';

        $route['admin/modules/add'] = 'admin/ModulesController/Create'; //POST to create
        $route['admin/modules/edit'] = 'admin/ModulesController/Update'; // POST to edit
        $route['admin/modules/del'] = 'admin/ModulesController/Delete'; // POST to delete
        $route['admin/modules/read'] = 'admin/ModulesController/Read'; // POST to view

        $route['manage/do/jobs/edit/(:any)'] = 'admin/JobsController/NewJob/$1';
        $route['manage/do/jobs/edit/(:any)/(:any)'] = 'admin/JobsController/NewJob/$1/$2';

        $route['admin/surveyandratings/edit'] = 'admin/SurveyAndRatingsController/Update'; // POST to edit
        $route['admin/surveyandratings/del'] = 'admin/SurveyAndRatingsController/Delete'; // POST to delete
        $route['admin/surveyandratings/read'] = 'admin/SurveyAndRatingsController/Read'; // POST to view

        //JobApplication
        $route['admin/jobapplication/add'] = 'admin/JobApplicationController/Create'; //POST to create
        $route['admin/jobapplication/edit'] = 'admin/JobApplicationController/Update'; // POST to edit
        $route['admin/jobapplication/del'] = 'admin/JobApplicationController/Delete'; // POST to delete
        $route['admin/jobapplication/read'] = 'admin/JobApplicationController/Read'; // POST to view

       /* Applicants Masterlist */         $route['manage/maintenance/dialect'] = 'admin/DialectController/Dialect'; 

       //Applicant list
        $route['admin/applicantlist/add'] = 'admin/ApplicantController/Create'; //POST to create
        $route['admin/applicantlist/edit'] = 'admin/ApplicantController/Update'; // POST to edit
        $route['admin/applicantlist/del'] = 'admin/ApplicantController/Delete'; // POST to delete
        $route['admin/applicantlist/read'] = 'admin/ApplicantController/Read'; // POST to view



         /* Survey and Ratings Masterlist */         $route['manage/maintenance/SurveyAndRatings'] = 'admin/SurveyAndRatingsController/SurveyAndRatings';

         // SurveyAndRatings list
        $route['admin/surveyandratings/add'] = 'admin/SurveyAndRatingsController/Create'; //POST to create
        $route['admin/surveyandratings/edit'] = 'admin/SurveyAndRatingsController/Update'; // POST to edit
        $route['admin/surveyandratings/del'] = 'admin/SurveyAndRatingsController/Delete'; // POST to delete
        $route['admin/surveyandratings/read'] = 'admin/SurveyAndRatingsController/Read'; // POST to view


         $route['web/JobDescription/(:any)'] = 'web/BrowseJobController/BrowseJobDescription/$1';

//ERROR 404
$route['404'] = 'admin/SiteErrorController/Error404';

        $route['manage/do/jobs/update/(:any)'] = 'admin/JobsController/NewJob/$1';
        $route['manage/do/jobs/update/(:any)/(:any)'] = 'admin/JobsController/NewJob/$1/$2';
        $route['admin/jobposts/edit'] = 'admin/JobsController/Update';

        //register page

        $route['web/register'] = 'web/RegisterController/register';

        
 $route['manage/transactions/add-applicant'] = 'admin/ApplicantController/AddNewApplicant'; 
        $route['manage/transactions/applicant'] = 'admin/ApplicantController/AllApplicants';
        $route['admin/applicant/add'] = 'admin/ApplicantController/Create'; //POST to create
        $route['admin/applicant/edit'] = 'admin/ApplicantController/Update'; // POST to edit
        $route['admin/applicant/del'] = 'admin/ApplicantController/Delete'; // POST to delete
        $route['admin/applicant/read'] = 'admin/ApplicantController/Read'; // POST to view
        $route['manage/transactions/view-applicant/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1';
        $route['manage/transactions/add-applicant/(:any)/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1/$2';
        $route['manage/transactions/update-applicant/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1';
        $route['manage/transactions/update-applicant/(:any)/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1/$2';
        $route['manage/applicant/add'] = 'admin/ApplicantController/AddNewApplicant';
        $route['manage/applicant/view-list'] = 'admin/ApplicantController/AllApplicants';
        $route['account/(:any)'] = 'admin/ApplicantController/AddNewApplicant/$1';
        $route['admin/emppost/edit/(:any)'] = 'admin/EmployerController/EmployerRegistration/$1'; 
        $route['admin/emppost/edit/(:any)/(:any)'] = 'admin/EmployerController/EmployerRegistration/$1/$2';
        $route['admin/emppost/read/(:any)'] = 'admin/EmployerController/EmployerRegistration/$1';
        //Reports
         // Applicants
         /* Masterlist*/        $route['manage/reports/applicants'] = 'reports/ReportsMasterlistController/ReportsMasterlist';
         /* Applications*/      $route['manage/reports/reportsapplications'] = 'reports/ReportsApplicationsController/ReportsApplications';
         /* Custom Reports*/    $route['manage/reports/reportscustom'] = 'reports/ReportsCustomController/ReportsCustom';
         // Establishments
         /* Masterlist*/        $route['manage/reports/reportsestablishmentsmasterlist'] = 'reports/ReportsEstablishmentsMasterlistController/ReportsEstablishmentsMasterlist';
         /* Post Jobs*/         $route['manage/reports/reportsestablishmentspostedjobs'] = 'reports/ReportsEstablishmentsPostedJobsController/ReportsEstablishmentsPostedJobs';
         /* Reviw and Ratings*/ $route['manage/reports/reportsestablishmentreviewandratings'] = 'reports/ReportsEstablishmentsReviewController/ReportsEstablishmentsReview';
         /* Custom Reports*/    $route['manage/reports/reportsestablishmentcustom'] = 'reports/ReportsEstablishmentsCustomController/ReportsEstablishmentsCustom';
         // Applicants
         /* Masterlist*/        $route['manage/reports/reportsaccountsmasterlist'] = 'reports/ReportsAccountsMasterlistController/ReportsAccountsMasterlist';
         /* Access list*/       $route['manage/reports/reportsaccountsaccesslist'] = 'reports/ReportsAccountsAccesslistController/ReportsAccountsAccesslist';
         /* Custom Reports*/    $route['manage/reports/reportsaccountscustom'] = 'reports/ReportsAccountsCustomController/ReportsAccountsCustom';
        /* Activity Logs */     $route['manage/reports/reportsactivitylog'] = 'reports/ReportsActivitylogController/ReportsActivitylog';


         // System
         /* Security*/                  $route['manage/system/security'] = 'admin/SecurityController/Security';
         /* Server and Database*/       $route['manage/system/serveranddatabase'] = 'admin/ServerandDatabaseController/ServerandDatabase';
         /* Notification*/              $route['manage/system/notification'] = 'admin/NotificationController/Notification';

         /* Change Logs*/              $route['manage/settings/changelogs'] = 'admin/ChangeLogsController/ChangeLogs';


        $route['manage/transactions/all-applicant'] = 'admin/ApplicantController/AllApplicants';



        $route['applicant/BrowseJobs'] = 'applicant/ApplicantBrowseJobsController/ApplicantBrowseJobs';
        $route['applicant/Dashboard'] = 'applicant/ApplicantDashboardController/ApplicantDashboard';
        $route['applicant/Notification'] = 'applicant/ApplicantNotificationsController/ApplicantNotifications';
        $route['applicant/MyAlerts'] = 'applicant/MyAlertsController/MyAlerts';
        $route['applicant/MyApplication'] = 'applicant/MyApplicationController/MyApplication';

        $route['Underconstruction'] = 'SiteErrorController/Underconstruction';
        // jobposts approve

        $route['admin/jobposts/approve'] = 'admin/JobsController/Approve';

        $route['admin/myapplication/del'] = 'applicant/MyApplicationController/Delete';

