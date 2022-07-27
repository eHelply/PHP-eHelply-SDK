# OpenAPIClient-php

eHelply SDK for SuperStack Services

For more information, please visit [https://superstack.ehelply.com/support](https://superstack.ehelply.com/support).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_access_token = 'x_access_token_example'; // string
$x_secret_token = 'x_secret_token_example'; // string
$authorization = 'authorization_example'; // string
$ehelply_active_participant = 'ehelply_active_participant_example'; // string
$ehelply_project = 'ehelply_project_example'; // string
$ehelply_data = 'ehelply_data_example'; // string

try {
    $result = $apiInstance->createBillingAccount($x_access_token, $x_secret_token, $authorization, $ehelply_active_participant, $ehelply_project, $ehelply_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->createBillingAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.prod.ehelply.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BillingApi* | [**createBillingAccount**](docs/Api/BillingApi.md#createbillingaccount) | **POST** /sam/billing/create_billing_account | Createbillingaccount
*BillingApi* | [**getClientSecret**](docs/Api/BillingApi.md#getclientsecret) | **GET** /sam/billing/retrieve_secret | Getclientsecret
*BillingApi* | [**hasPayment**](docs/Api/BillingApi.md#haspayment) | **GET** /sam/billing/has_payment | Haspayment
*BillingApi* | [**listPaymentMethods**](docs/Api/BillingApi.md#listpaymentmethods) | **GET** /sam/billing/view_payment_method | Listpaymentmethods
*BillingApi* | [**processPayment**](docs/Api/BillingApi.md#processpayment) | **POST** /sam/billing/process_payment | Processpayment
*BillingApi* | [**reconcilePaymentMethod**](docs/Api/BillingApi.md#reconcilepaymentmethod) | **GET** /sam/billing/reconcile_payment | Reconcilepaymentmethod
*BillingApi* | [**removePaymentMethod**](docs/Api/BillingApi.md#removepaymentmethod) | **DELETE** /sam/billing/remove_payment_method | Removepaymentmethod
*CatalogsApi* | [**attachProductToCatalog**](docs/Api/CatalogsApi.md#attachproducttocatalog) | **POST** /products/catalogs/{catalog_uuid}/products/{product_uuid} | Addproducttocatalog
*CatalogsApi* | [**createCatalog**](docs/Api/CatalogsApi.md#createcatalog) | **POST** /products/catalogs | Createcatalog
*CatalogsApi* | [**deleteCatalog**](docs/Api/CatalogsApi.md#deletecatalog) | **DELETE** /products/catalogs/{catalog_uuid} | Deletecatalog
*CatalogsApi* | [**detachProductFromCatalog**](docs/Api/CatalogsApi.md#detachproductfromcatalog) | **DELETE** /products/catalogs/{catalog_uuid}/products/{product_uuid} | Removeproductfromcatalog
*CatalogsApi* | [**getCatalog**](docs/Api/CatalogsApi.md#getcatalog) | **GET** /products/catalogs/{catalog_uuid} | Getcatalog
*CatalogsApi* | [**searchCatalogProducts**](docs/Api/CatalogsApi.md#searchcatalogproducts) | **GET** /products/catalogs/{catalog_uuid}/products | Searchcatalogproducts
*CatalogsApi* | [**searchCatalogs**](docs/Api/CatalogsApi.md#searchcatalogs) | **GET** /products/catalogs | Searchcatalogs
*CatalogsApi* | [**updateCatalog**](docs/Api/CatalogsApi.md#updatecatalog) | **PUT** /products/catalogs/{catalog_uuid} | Updatecatalog
*CategoryApi* | [**createCategoryPlacesCategoriesPost**](docs/Api/CategoryApi.md#createcategoryplacescategoriespost) | **POST** /places/categories | Create Category
*CategoryApi* | [**deleteCategoryPlacesCategoriesCategoryUuidDelete**](docs/Api/CategoryApi.md#deletecategoryplacescategoriescategoryuuiddelete) | **DELETE** /places/categories/{category_uuid} | Delete Category
*CategoryApi* | [**getCategoryPlacesCategoriesCategoryUuidGet**](docs/Api/CategoryApi.md#getcategoryplacescategoriescategoryuuidget) | **GET** /places/categories/{category_uuid} | Get Category
*CategoryApi* | [**searchCategoriesPlacesCategoriesGet**](docs/Api/CategoryApi.md#searchcategoriesplacescategoriesget) | **GET** /places/categories | Search Categories
*CategoryApi* | [**updateCategoryPlacesCategoriesCategoryUuidPut**](docs/Api/CategoryApi.md#updatecategoryplacescategoriescategoryuuidput) | **PUT** /places/categories/{category_uuid} | Update Category
*CompaniesApi* | [**createCompanyPlacesCompaniesPost**](docs/Api/CompaniesApi.md#createcompanyplacescompaniespost) | **POST** /places/companies | Create Company
*CompaniesApi* | [**deletePlacePlacesCompaniesCompanyUuidDelete**](docs/Api/CompaniesApi.md#deleteplaceplacescompaniescompanyuuiddelete) | **DELETE** /places/companies/{company_uuid} | Delete Place
*CompaniesApi* | [**getCompanyPlacesCompaniesCompanyUuidGet**](docs/Api/CompaniesApi.md#getcompanyplacescompaniescompanyuuidget) | **GET** /places/companies/{company_uuid} | Get Company
*CompaniesApi* | [**searchCompaniesPlacesCompaniesGet**](docs/Api/CompaniesApi.md#searchcompaniesplacescompaniesget) | **GET** /places/companies | Search Companies
*CompaniesApi* | [**updateCompanyPlacesCompaniesCompanyUuidPut**](docs/Api/CompaniesApi.md#updatecompanyplacescompaniescompanyuuidput) | **PUT** /places/companies/{company_uuid} | Update Company
*DefaultApi* | [**attachEntityToAppointment**](docs/Api/DefaultApi.md#attachentitytoappointment) | **POST** /appointments/appointments/{appointment_uuid}/entities/{entity_uuid} | Attach Entity To Appointment
*DefaultApi* | [**createAppointment**](docs/Api/DefaultApi.md#createappointment) | **POST** /appointments/appointments | Create Appointment
*DefaultApi* | [**deleteAppointment**](docs/Api/DefaultApi.md#deleteappointment) | **DELETE** /appointments/appointments/{appointment_uuid} | Delete Appointment
*DefaultApi* | [**detachEntityFromAppointment**](docs/Api/DefaultApi.md#detachentityfromappointment) | **DELETE** /appointments/appointments/{appointment_uuid}/entities/{entity_uuid} | Detach Entity From Appointment
*DefaultApi* | [**getAppointment**](docs/Api/DefaultApi.md#getappointment) | **GET** /appointments/appointments/{appointment_uuid} | Get Appointment
*DefaultApi* | [**searchAppointment**](docs/Api/DefaultApi.md#searchappointment) | **GET** /appointments/appointments | Search Appointment
*DefaultApi* | [**searchAppointmentEntities**](docs/Api/DefaultApi.md#searchappointmententities) | **GET** /appointments/appointments/{appointment_uuid}/entities | Search Appointment Entities
*DefaultApi* | [**searchEntityAppointments**](docs/Api/DefaultApi.md#searchentityappointments) | **GET** /appointments/appointments/entities/{entity_uuid}/appointments | Get Entities Appointments
*DefaultApi* | [**updateAppointment**](docs/Api/DefaultApi.md#updateappointment) | **PUT** /appointments/appointments/{appointment_uuid} | Update Appointment
*LoggingApi* | [**getLogs**](docs/Api/LoggingApi.md#getlogs) | **GET** /sam/logging/logs | Getlogs
*LoggingApi* | [**getServiceLogs**](docs/Api/LoggingApi.md#getservicelogs) | **GET** /sam/logging/logs/services/{service} | Getservicelogs
*LoggingApi* | [**getSubjectLogs**](docs/Api/LoggingApi.md#getsubjectlogs) | **GET** /sam/logging/logs/services/{service}/subjects/{subject} | Getsubjectlogs
*MetaApi* | [**createField**](docs/Api/MetaApi.md#createfield) | **POST** /meta/field | Create Field
*MetaApi* | [**createMeta**](docs/Api/MetaApi.md#createmeta) | **POST** /meta/meta/service/{service}/type/{type_str}/entity/{entity_uuid} | Create Meta
*MetaApi* | [**deleteField**](docs/Api/MetaApi.md#deletefield) | **DELETE** /meta/field/{field_uuid} | Delete Field
*MetaApi* | [**deleteMeta**](docs/Api/MetaApi.md#deletemeta) | **DELETE** /meta/meta/service/{service}/type/{type_str}/entity/{entity_uuid} | Delete Meta
*MetaApi* | [**deleteMetaFromUuid**](docs/Api/MetaApi.md#deletemetafromuuid) | **DELETE** /meta/meta/{meta_uuid} | Delete Meta From Uuid
*MetaApi* | [**getField**](docs/Api/MetaApi.md#getfield) | **GET** /meta/field/{field_uuid} | Get Field
*MetaApi* | [**getMeta**](docs/Api/MetaApi.md#getmeta) | **GET** /meta/meta/service/{service}/type/{type_str}/entity/{entity_uuid} | Get Meta
*MetaApi* | [**getMetaFromUuid**](docs/Api/MetaApi.md#getmetafromuuid) | **GET** /meta/meta/{meta_uuid} | Get Meta From Uuid
*MetaApi* | [**makeSlug**](docs/Api/MetaApi.md#makeslug) | **POST** /meta/meta/slug | Make Slug
*MetaApi* | [**touchMeta**](docs/Api/MetaApi.md#touchmeta) | **POST** /meta/meta/service/{service}/type/{type_str}/entity/{entity_uuid}/touch | Touch Meta
*MetaApi* | [**updateField**](docs/Api/MetaApi.md#updatefield) | **PUT** /meta/field/{field_uuid} | Update Field
*MetaApi* | [**updateMeta**](docs/Api/MetaApi.md#updatemeta) | **PUT** /meta/meta/service/{service}/type/{type_str}/entity/{entity_uuid} | Update Meta
*MetaApi* | [**updateMetaFromUuid**](docs/Api/MetaApi.md#updatemetafromuuid) | **PUT** /meta/meta/{meta_uuid} | Update Meta From Uuid
*MonitorApi* | [**acknowledgeAlarm**](docs/Api/MonitorApi.md#acknowledgealarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/acknowledge | Acknowledgealarm
*MonitorApi* | [**assignAlarm**](docs/Api/MonitorApi.md#assignalarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/assign | Assignalarm
*MonitorApi* | [**attachAlarmNote**](docs/Api/MonitorApi.md#attachalarmnote) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/note | Attachalarmnote
*MonitorApi* | [**attachAlarmTicket**](docs/Api/MonitorApi.md#attachalarmticket) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/ticket | Attachalarmticket
*MonitorApi* | [**clearAlarm**](docs/Api/MonitorApi.md#clearalarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/clear | Clearalarm
*MonitorApi* | [**getService**](docs/Api/MonitorApi.md#getservice) | **GET** /sam/monitor/services/{service} | Getservice
*MonitorApi* | [**getServiceAlarm**](docs/Api/MonitorApi.md#getservicealarm) | **GET** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid} | Getservicealarm
*MonitorApi* | [**getServiceAlarms**](docs/Api/MonitorApi.md#getservicealarms) | **GET** /sam/monitor/services/{service}/stages/{stage}/alarms | Getservicealarms
*MonitorApi* | [**getServiceHeartbeat**](docs/Api/MonitorApi.md#getserviceheartbeat) | **GET** /sam/monitor/services/{service}/stages/{stage}/heartbeats | Getserviceheartbeat
*MonitorApi* | [**getServiceKpis**](docs/Api/MonitorApi.md#getservicekpis) | **GET** /sam/monitor/services/{service}/kpis | Getservicekpis
*MonitorApi* | [**getServiceSpec**](docs/Api/MonitorApi.md#getservicespec) | **GET** /sam/monitor/services/{service}/specs/{spec} | Getservicespec
*MonitorApi* | [**getServiceSpecs**](docs/Api/MonitorApi.md#getservicespecs) | **GET** /sam/monitor/services/{service}/specs | Getservicespecs
*MonitorApi* | [**getServiceVitals**](docs/Api/MonitorApi.md#getservicevitals) | **GET** /sam/monitor/services/{service}/stages/{stage}/vitals | Getservicevitals
*MonitorApi* | [**getServices**](docs/Api/MonitorApi.md#getservices) | **GET** /sam/monitor/services | Getservices
*MonitorApi* | [**getServicesWithSpecs**](docs/Api/MonitorApi.md#getserviceswithspecs) | **GET** /sam/monitor/specs/services | Getserviceswithspecs
*MonitorApi* | [**hideService**](docs/Api/MonitorApi.md#hideservice) | **POST** /sam/monitor/services/{service}/stages/{stage}/hide | Hideservice
*MonitorApi* | [**ignoreAlarm**](docs/Api/MonitorApi.md#ignorealarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/ignore | Ignorealarm
*MonitorApi* | [**registerService**](docs/Api/MonitorApi.md#registerservice) | **POST** /sam/monitor/services | Registerservice
*MonitorApi* | [**searchAlarms**](docs/Api/MonitorApi.md#searchalarms) | **GET** /sam/monitor/services/{service}/alarms | Searchalarms
*MonitorApi* | [**showService**](docs/Api/MonitorApi.md#showservice) | **POST** /sam/monitor/services/{service}/stages/{stage}/show | Showservice
*MonitorApi* | [**terminateAlarm**](docs/Api/MonitorApi.md#terminatealarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms/{alarm_uuid}/terminate | Terminatealarm
*MonitorApi* | [**triggerAlarm**](docs/Api/MonitorApi.md#triggeralarm) | **POST** /sam/monitor/services/{service}/stages/{stage}/alarms | Triggeralarm
*NotesApi* | [**createNote**](docs/Api/NotesApi.md#createnote) | **POST** /notes/notes | Create Note
*NotesApi* | [**deleteNote**](docs/Api/NotesApi.md#deletenote) | **DELETE** /notes/notes/{note_id} | Delete Note
*NotesApi* | [**getNote**](docs/Api/NotesApi.md#getnote) | **GET** /notes/notes/{note_id} | Get Note
*NotesApi* | [**updateNote**](docs/Api/NotesApi.md#updatenote) | **PUT** /notes/notes/{note_id} | Update Note
*PlacesApi* | [**advancedSearchPlaces**](docs/Api/PlacesApi.md#advancedsearchplaces) | **GET** /places/search/places/string | Advancedsearchplaces
*PlacesApi* | [**createPlacePlacesPlacesPost**](docs/Api/PlacesApi.md#createplaceplacesplacespost) | **POST** /places/places | Create Place
*PlacesApi* | [**deletePlace**](docs/Api/PlacesApi.md#deleteplace) | **DELETE** /places/places/{place_uuid} | Deleteplace
*PlacesApi* | [**forwardGeocodingPlacesGeocodingForwardGet**](docs/Api/PlacesApi.md#forwardgeocodingplacesgeocodingforwardget) | **GET** /places/geocoding/forward | Forward Geocoding
*PlacesApi* | [**getPlace**](docs/Api/PlacesApi.md#getplace) | **GET** /places/places/{place_uuid} | Getplace
*PlacesApi* | [**reverseGeocodingPlacesGeocodingReverseGet**](docs/Api/PlacesApi.md#reversegeocodingplacesgeocodingreverseget) | **GET** /places/geocoding/reverse | Reverse Geocoding
*PlacesApi* | [**searchPlaces**](docs/Api/PlacesApi.md#searchplaces) | **GET** /places/places | Searchplaces
*PlacesApi* | [**updatePlace**](docs/Api/PlacesApi.md#updateplace) | **PUT** /places/places/{place_uuid} | Updateplace
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /products/products | Createproduct
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /products/products/{product_uuid} | Deleteproduct
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /products/products/{product_uuid} | Getproduct
*ProductsApi* | [**searchProductCatalog**](docs/Api/ProductsApi.md#searchproductcatalog) | **GET** /products/products/{product_uuid}/catalogs | Searchproductcatalog
*ProductsApi* | [**searchProducts**](docs/Api/ProductsApi.md#searchproducts) | **GET** /products/products | Searchproducts
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /products/products/{product_uuid} | Updateproduct
*ProjectsApi* | [**addMemberToProject**](docs/Api/ProjectsApi.md#addmembertoproject) | **POST** /sam/projects/projects/{project_uuid}/members/{entity_uuid} | Addmembertoproject
*ProjectsApi* | [**archiveProject**](docs/Api/ProjectsApi.md#archiveproject) | **DELETE** /sam/projects/projects/{project_uuid} | Archiveproject
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /sam/projects/projects | Createproject
*ProjectsApi* | [**createProjectKey**](docs/Api/ProjectsApi.md#createprojectkey) | **POST** /sam/projects/projects/{project_uuid}/keys | Createprojectkey
*ProjectsApi* | [**createUsageType**](docs/Api/ProjectsApi.md#createusagetype) | **POST** /sam/projects/usage/types | Createusagetype
*ProjectsApi* | [**deleteProjectKey**](docs/Api/ProjectsApi.md#deleteprojectkey) | **DELETE** /sam/projects/projects/{project_uuid}/keys | Deleteprojectkey
*ProjectsApi* | [**deleteUsageType**](docs/Api/ProjectsApi.md#deleteusagetype) | **DELETE** /sam/projects/usage/types/{usage_type_key} | Deleteusagetype
*ProjectsApi* | [**getAllProjectUsage**](docs/Api/ProjectsApi.md#getallprojectusage) | **GET** /sam/projects/projects/{project_uuid}/usage | Getallprojectusage
*ProjectsApi* | [**getMemberProjects**](docs/Api/ProjectsApi.md#getmemberprojects) | **GET** /sam/projects/members/{entity_uuid}/projects | Getmemberprojects
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /sam/projects/projects/{project_uuid} | Getproject
*ProjectsApi* | [**getProjectKeys**](docs/Api/ProjectsApi.md#getprojectkeys) | **GET** /sam/projects/projects/{project_uuid}/keys | Getprojectkeys
*ProjectsApi* | [**getProjectMembers**](docs/Api/ProjectsApi.md#getprojectmembers) | **GET** /sam/projects/projects/{project_uuid}/members | Getprojectmembers
*ProjectsApi* | [**getSpecificProjectUsage**](docs/Api/ProjectsApi.md#getspecificprojectusage) | **GET** /sam/projects/projects/{project_uuid}/usage/{usage_type_key} | Getspecificprojectusage
*ProjectsApi* | [**getUsageType**](docs/Api/ProjectsApi.md#getusagetype) | **GET** /sam/projects/usage/types/{usage_type_key} | Getusagetype
*ProjectsApi* | [**removeMemberFromProject**](docs/Api/ProjectsApi.md#removememberfromproject) | **DELETE** /sam/projects/projects/{project_uuid}/members/{entity_uuid} | Removememberfromproject
*ProjectsApi* | [**searchProjects**](docs/Api/ProjectsApi.md#searchprojects) | **GET** /sam/projects/projects | Searchprojects
*ProjectsApi* | [**searchUsageType**](docs/Api/ProjectsApi.md#searchusagetype) | **GET** /sam/projects/usage/types | Searchusagetype
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PUT** /sam/projects/projects/{project_uuid} | Updateproject
*ProjectsApi* | [**updateUsageType**](docs/Api/ProjectsApi.md#updateusagetype) | **PUT** /sam/projects/usage/types/{usage_type_key} | Updateusagetype
*ReviewsApi* | [**createReview**](docs/Api/ReviewsApi.md#createreview) | **POST** /products/reviews/types/{entity_type}/entities/{entity_uuid} | Create
*ReviewsApi* | [**deleteReview**](docs/Api/ReviewsApi.md#deletereview) | **DELETE** /products/reviews/types/{entity_type}/entities/{entity_uuid}/reviews/{review_uuid} | Deletereview
*ReviewsApi* | [**getReview**](docs/Api/ReviewsApi.md#getreview) | **GET** /products/reviews/types/{entity_type}/entities/{entity_uuid}/reviews/{review_uuid} | Getreview
*ReviewsApi* | [**searchReviews**](docs/Api/ReviewsApi.md#searchreviews) | **GET** /products/reviews/types/{entity_type}/entities/{entity_uuid} | Searchreview
*ReviewsApi* | [**updateReview**](docs/Api/ReviewsApi.md#updatereview) | **PUT** /products/reviews/types/{entity_type}/entities/{entity_uuid}/reviews/{review_uuid} | Updatereview
*SecurityApi* | [**createEncryptionKey**](docs/Api/SecurityApi.md#createencryptionkey) | **POST** /sam/security/encryption/categories/{category}/keys | Createencryptionkey
*SecurityApi* | [**createKey**](docs/Api/SecurityApi.md#createkey) | **POST** /sam/security/keys | Createkey
*SecurityApi* | [**deleteKey**](docs/Api/SecurityApi.md#deletekey) | **DELETE** /sam/security/keys/{key_uuid} | Deletekey
*SecurityApi* | [**generateToken**](docs/Api/SecurityApi.md#generatetoken) | **POST** /sam/security/tokens | Generatetoken
*SecurityApi* | [**getEncryptionKey**](docs/Api/SecurityApi.md#getencryptionkey) | **GET** /sam/security/encryption/categories/{category}/keys | Getencryptionkey
*SecurityApi* | [**getKey**](docs/Api/SecurityApi.md#getkey) | **GET** /sam/security/keys/{key_uuid} | Getkey
*SecurityApi* | [**searchKeys**](docs/Api/SecurityApi.md#searchkeys) | **GET** /sam/security/keys | Searchkeys
*SecurityApi* | [**verifyKey**](docs/Api/SecurityApi.md#verifykey) | **POST** /sam/security/keys/verify | Verifykey
*StaffApi* | [**createStaff**](docs/Api/StaffApi.md#createstaff) | **POST** /places/staff | Createstaff
*StaffApi* | [**deleteStaff**](docs/Api/StaffApi.md#deletestaff) | **DELETE** /places/staff/{staff_uuid} | Deletestaff
*StaffApi* | [**getStaff**](docs/Api/StaffApi.md#getstaff) | **GET** /places/staff/{staff_uuid} | Getstaff
*StaffApi* | [**searchStaff**](docs/Api/StaffApi.md#searchstaff) | **GET** /places/staff | Searchstaff
*StaffApi* | [**updateStaff**](docs/Api/StaffApi.md#updatestaff) | **PUT** /places/staff/{staff_uuid} | Updatestaff
*SupportApi* | [**createContact**](docs/Api/SupportApi.md#createcontact) | **POST** /sam/support/contact | Createcontact
*SupportApi* | [**createTicket**](docs/Api/SupportApi.md#createticket) | **POST** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets | Createticket
*SupportApi* | [**listTickets**](docs/Api/SupportApi.md#listtickets) | **GET** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets | Listtickets
*SupportApi* | [**updateTicket**](docs/Api/SupportApi.md#updateticket) | **PUT** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets/{ticket_id} | Updateticket
*SupportApi* | [**viewTicket**](docs/Api/SupportApi.md#viewticket) | **GET** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets/{ticket_id} | Viewticket
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /places/tags/{tag_uuid} | Deletetag
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /places/tags | Createtag
*TagsApi* | [**getTag**](docs/Api/TagsApi.md#gettag) | **GET** /places/tags/{tag_uuid} | Gettag
*TagsApi* | [**searchTag**](docs/Api/TagsApi.md#searchtag) | **GET** /places/tags | Searchtag
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /places/tags/{tag_uuid} | Updatetag
*UsersApi* | [**confirmSignup**](docs/Api/UsersApi.md#confirmsignup) | **POST** /sam/users/auth/signup/confirm | Confirmsignup
*UsersApi* | [**createParticipant**](docs/Api/UsersApi.md#createparticipant) | **POST** /sam/users/participants | Createparticipant
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /sam/users | Createuser
*UsersApi* | [**deleteParticipant**](docs/Api/UsersApi.md#deleteparticipant) | **DELETE** /sam/users/participants/{participant_id} | Deleteparticipant
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /sam/users/{user_id} | Deleteuser
*UsersApi* | [**getParticipant**](docs/Api/UsersApi.md#getparticipant) | **GET** /sam/users/participants/{participant_id} | Getparticipant
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /sam/users/{user_id} | Getuser
*UsersApi* | [**login**](docs/Api/UsersApi.md#login) | **POST** /sam/users/auth/login | Login
*UsersApi* | [**refreshToken**](docs/Api/UsersApi.md#refreshtoken) | **POST** /sam/users/auth/{app_client}/refresh-token | Refreshtoken
*UsersApi* | [**resetPassword**](docs/Api/UsersApi.md#resetpassword) | **POST** /sam/users/auth/password/reset | Resetpassword
*UsersApi* | [**resetPasswordConfirmation**](docs/Api/UsersApi.md#resetpasswordconfirmation) | **POST** /sam/users/auth/password/reset/confirm | Resetpasswordconfirmation
*UsersApi* | [**searchParticipants**](docs/Api/UsersApi.md#searchparticipants) | **GET** /sam/users/participants | Searchparticipants
*UsersApi* | [**signup**](docs/Api/UsersApi.md#signup) | **POST** /sam/users/auth/signup | Signup
*UsersApi* | [**updateParticipant**](docs/Api/UsersApi.md#updateparticipant) | **PUT** /sam/users/participants/{participant_id} | Updateparticipant
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /sam/users/{user_id} | Updateuser
*UsersApi* | [**userValidations**](docs/Api/UsersApi.md#uservalidations) | **POST** /sam/users/validations/{field} | Uservalidations

## Models

- [AddressBase](docs/Model/AddressBase.md)
- [AlarmAcknowledge](docs/Model/AlarmAcknowledge.md)
- [AlarmAssign](docs/Model/AlarmAssign.md)
- [AlarmCreate](docs/Model/AlarmCreate.md)
- [AlarmIgnore](docs/Model/AlarmIgnore.md)
- [AlarmNote](docs/Model/AlarmNote.md)
- [AlarmResponse](docs/Model/AlarmResponse.md)
- [AlarmTerminate](docs/Model/AlarmTerminate.md)
- [AlarmTicket](docs/Model/AlarmTicket.md)
- [AppointmentBase](docs/Model/AppointmentBase.md)
- [AppointmentResponse](docs/Model/AppointmentResponse.md)
- [AttachPaymentToProject](docs/Model/AttachPaymentToProject.md)
- [Basic](docs/Model/Basic.md)
- [BasicMeta](docs/Model/BasicMeta.md)
- [BasicMetaCreate](docs/Model/BasicMetaCreate.md)
- [CatalogBase](docs/Model/CatalogBase.md)
- [CatalogReturn](docs/Model/CatalogReturn.md)
- [CategoryBase](docs/Model/CategoryBase.md)
- [CategoryDb](docs/Model/CategoryDb.md)
- [Company](docs/Model/Company.md)
- [CompanyBase](docs/Model/CompanyBase.md)
- [CompanyResponse](docs/Model/CompanyResponse.md)
- [Contact](docs/Model/Contact.md)
- [ContactBase](docs/Model/ContactBase.md)
- [ContactMethod](docs/Model/ContactMethod.md)
- [ContactResponse](docs/Model/ContactResponse.md)
- [CreateKeyResponse](docs/Model/CreateKeyResponse.md)
- [CreateReview](docs/Model/CreateReview.md)
- [CreateTicket](docs/Model/CreateTicket.md)
- [CustomList](docs/Model/CustomList.md)
- [DatesMeta](docs/Model/DatesMeta.md)
- [Detailed](docs/Model/Detailed.md)
- [DetailedMeta](docs/Model/DetailedMeta.md)
- [DetailedMetaCreate](docs/Model/DetailedMetaCreate.md)
- [DetailedMetaGet](docs/Model/DetailedMetaGet.md)
- [Email](docs/Model/Email.md)
- [Field](docs/Model/Field.md)
- [FieldDynamo](docs/Model/FieldDynamo.md)
- [GetAppointment403Response](docs/Model/GetAppointment403Response.md)
- [GetServiceServiceWithSpecsResponse](docs/Model/GetServiceServiceWithSpecsResponse.md)
- [GetServiceSpecResponse](docs/Model/GetServiceSpecResponse.md)
- [GetServiceSpecsResponse](docs/Model/GetServiceSpecsResponse.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [HeartbeatResponse](docs/Model/HeartbeatResponse.md)
- [KpiResponse](docs/Model/KpiResponse.md)
- [LoggingDynamo](docs/Model/LoggingDynamo.md)
- [MetaChildren](docs/Model/MetaChildren.md)
- [MetaCreate](docs/Model/MetaCreate.md)
- [MetaCustom](docs/Model/MetaCustom.md)
- [MetaDynamo](docs/Model/MetaDynamo.md)
- [MetaGet](docs/Model/MetaGet.md)
- [MetaSlugger](docs/Model/MetaSlugger.md)
- [NoteBase](docs/Model/NoteBase.md)
- [NoteDynamoHistoryResponse](docs/Model/NoteDynamoHistoryResponse.md)
- [NoteDynamoResponse](docs/Model/NoteDynamoResponse.md)
- [NoteMeta](docs/Model/NoteMeta.md)
- [OptionGroup](docs/Model/OptionGroup.md)
- [Options](docs/Model/Options.md)
- [Page](docs/Model/Page.md)
- [Pagination](docs/Model/Pagination.md)
- [ParticipantCreate](docs/Model/ParticipantCreate.md)
- [ParticipantUpdate](docs/Model/ParticipantUpdate.md)
- [ParticipantUserReturn](docs/Model/ParticipantUserReturn.md)
- [Payment](docs/Model/Payment.md)
- [PaymentMethodResponse](docs/Model/PaymentMethodResponse.md)
- [PlaceBase](docs/Model/PlaceBase.md)
- [PlaceResponse](docs/Model/PlaceResponse.md)
- [ProductBase](docs/Model/ProductBase.md)
- [ProductReturn](docs/Model/ProductReturn.md)
- [ProjectDB](docs/Model/ProjectDB.md)
- [ProjectsProjectCreate](docs/Model/ProjectsProjectCreate.md)
- [ProjectsProjectGet](docs/Model/ProjectsProjectGet.md)
- [ProjectsProjectMemberDB](docs/Model/ProjectsProjectMemberDB.md)
- [ProjectsProjectUpdate](docs/Model/ProjectsProjectUpdate.md)
- [ProjectsProjectUsageDB](docs/Model/ProjectsProjectUsageDB.md)
- [ProjectsUsageTypeCreate](docs/Model/ProjectsUsageTypeCreate.md)
- [ProjectsUsageTypeDB](docs/Model/ProjectsUsageTypeDB.md)
- [ProjectsUsageTypeGet](docs/Model/ProjectsUsageTypeGet.md)
- [ProjectsUsageTypeUnitPrice](docs/Model/ProjectsUsageTypeUnitPrice.md)
- [ProjectsUsageTypeUpdate](docs/Model/ProjectsUsageTypeUpdate.md)
- [ResponseAddmembertoproject](docs/Model/ResponseAddmembertoproject.md)
- [ResponseArchiveproject](docs/Model/ResponseArchiveproject.md)
- [ResponseCreatekey](docs/Model/ResponseCreatekey.md)
- [ResponseDeletekey](docs/Model/ResponseDeletekey.md)
- [ResponseDeleteusagetype](docs/Model/ResponseDeleteusagetype.md)
- [ResponseGeneratetoken](docs/Model/ResponseGeneratetoken.md)
- [ResponseRemovememberfromproject](docs/Model/ResponseRemovememberfromproject.md)
- [SecurityCreateToken](docs/Model/SecurityCreateToken.md)
- [SecurityEncryptionKeyGet](docs/Model/SecurityEncryptionKeyGet.md)
- [SecurityEncryptionKeyResponse](docs/Model/SecurityEncryptionKeyResponse.md)
- [SecurityKeyCreate](docs/Model/SecurityKeyCreate.md)
- [SecurityKeyGet](docs/Model/SecurityKeyGet.md)
- [SecurityKeyVerify](docs/Model/SecurityKeyVerify.md)
- [Selection](docs/Model/Selection.md)
- [ServiceCreate](docs/Model/ServiceCreate.md)
- [ServiceMessageResponse](docs/Model/ServiceMessageResponse.md)
- [ServiceResponse](docs/Model/ServiceResponse.md)
- [StaffCreate](docs/Model/StaffCreate.md)
- [StaffDb](docs/Model/StaffDb.md)
- [StaffResponse](docs/Model/StaffResponse.md)
- [StatsVitalsResponse](docs/Model/StatsVitalsResponse.md)
- [StripeAccountResponse](docs/Model/StripeAccountResponse.md)
- [StripeCustomerSecretResponse](docs/Model/StripeCustomerSecretResponse.md)
- [TagBase](docs/Model/TagBase.md)
- [TagDb](docs/Model/TagDb.md)
- [TicketResponse](docs/Model/TicketResponse.md)
- [TicketsResponse](docs/Model/TicketsResponse.md)
- [UpdateReview](docs/Model/UpdateReview.md)
- [User](docs/Model/User.md)
- [UserConfirmation](docs/Model/UserConfirmation.md)
- [UserEmail](docs/Model/UserEmail.md)
- [UserFlags](docs/Model/UserFlags.md)
- [UserLogin](docs/Model/UserLogin.md)
- [UserLoginReturn](docs/Model/UserLoginReturn.md)
- [UserPasswordReset](docs/Model/UserPasswordReset.md)
- [UserPasswordResetConfirmation](docs/Model/UserPasswordResetConfirmation.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UserSignup](docs/Model/UserSignup.md)
- [UserSignupReturn](docs/Model/UserSignupReturn.md)
- [UserTokenReturn](docs/Model/UserTokenReturn.md)
- [UserValidations](docs/Model/UserValidations.md)
- [ValidationError](docs/Model/ValidationError.md)
- [Validations](docs/Model/Validations.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@ehelply.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.1.98`
    - Package version: `1.1.98`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
