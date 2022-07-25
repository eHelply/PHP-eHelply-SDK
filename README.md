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
*DefaultApi* | [**attachProductToCatalog**](docs/Api/DefaultApi.md#attachproducttocatalog) | **POST** /products/catalogs/{catalog_uuid}/products/{product_uuid} | Attach Product To Catalog
*DefaultApi* | [**createAppointment**](docs/Api/DefaultApi.md#createappointment) | **POST** /appointments/appointments | Create Appointment
*DefaultApi* | [**createCatalog**](docs/Api/DefaultApi.md#createcatalog) | **POST** /products/catalogs | Create Catalog
*DefaultApi* | [**createProduct**](docs/Api/DefaultApi.md#createproduct) | **POST** /products/products | Create Product
*DefaultApi* | [**createReview**](docs/Api/DefaultApi.md#createreview) | **POST** /products/reviews/types/{entity_type}/entities/{entity_uuid} | Create Review
*DefaultApi* | [**deleteAppointment**](docs/Api/DefaultApi.md#deleteappointment) | **DELETE** /appointments/appointments/{appointment_uuid} | Delete Appointment
*DefaultApi* | [**deleteCatalog**](docs/Api/DefaultApi.md#deletecatalog) | **DELETE** /products/catalogs/{catalog_uuid} | Delete Catalog
*DefaultApi* | [**deleteProduct**](docs/Api/DefaultApi.md#deleteproduct) | **DELETE** /products/products/{product_uuid} | Delete Product
*DefaultApi* | [**deleteReview**](docs/Api/DefaultApi.md#deletereview) | **DELETE** /products/reviews/types/{entity_type}/entities/{entity_uuid}/reviews/{review_uuid} | Delete Review
*DefaultApi* | [**detachEntityFromAppointment**](docs/Api/DefaultApi.md#detachentityfromappointment) | **DELETE** /appointments/appointments/{appointment_uuid}/entities/{entity_uuid} | Detach Entity From Appointment
*DefaultApi* | [**detachProductFromCatalog**](docs/Api/DefaultApi.md#detachproductfromcatalog) | **DELETE** /products/catalogs/{catalog_uuid}/products/{product_uuid} | Detach Product From Catalog
*DefaultApi* | [**getAppointment**](docs/Api/DefaultApi.md#getappointment) | **GET** /appointments/appointments/{appointment_uuid} | Get Appointment
*DefaultApi* | [**getCatalog**](docs/Api/DefaultApi.md#getcatalog) | **GET** /products/catalogs/{catalog_uuid} | Get Catalog
*DefaultApi* | [**getProduct**](docs/Api/DefaultApi.md#getproduct) | **GET** /products/products/{product_uuid} | Get Product
*DefaultApi* | [**getReview**](docs/Api/DefaultApi.md#getreview) | **GET** /products/reviews/types/{entity_type}/entities/{entity_uuid}/reviews/{review_uuid} | Get Review
*DefaultApi* | [**searchAppointment**](docs/Api/DefaultApi.md#searchappointment) | **GET** /appointments/appointments | Search Appointment
*DefaultApi* | [**searchAppointmentEntities**](docs/Api/DefaultApi.md#searchappointmententities) | **GET** /appointments/appointments/{appointment_uuid}/entities | Search Appointment Entities
*DefaultApi* | [**searchCatalogProducts**](docs/Api/DefaultApi.md#searchcatalogproducts) | **GET** /products/catalogs/{catalog_uuid}/products | Search Catalog Products
*DefaultApi* | [**searchCatalogs**](docs/Api/DefaultApi.md#searchcatalogs) | **GET** /products/catalogs | Search Catalogs
*DefaultApi* | [**searchEntityAppointments**](docs/Api/DefaultApi.md#searchentityappointments) | **GET** /appointments/appointments/entities/{entity_uuid}/appointments | Get Entities Appointments
*DefaultApi* | [**searchProduct**](docs/Api/DefaultApi.md#searchproduct) | **GET** /products/products | Search Products
*DefaultApi* | [**searchProductCatalog**](docs/Api/DefaultApi.md#searchproductcatalog) | **GET** /products/products/{product_uuid}/catalogs | Search Product Catalogs
*DefaultApi* | [**searchReviews**](docs/Api/DefaultApi.md#searchreviews) | **GET** /products/reviews/types/{entity_type}/entities/{entity_uuid} | Search Review
*DefaultApi* | [**updateAppointment**](docs/Api/DefaultApi.md#updateappointment) | **PUT** /appointments/appointments/{appointment_uuid} | Update Appointment
*DefaultApi* | [**updateCatalog**](docs/Api/DefaultApi.md#updatecatalog) | **PUT** /products/catalogs/{catalog_uuid} | Update Catalog
*DefaultApi* | [**updateProduct**](docs/Api/DefaultApi.md#updateproduct) | **PUT** /products/products/{product_uuid} | Update Product
*DefaultApi* | [**updateReview**](docs/Api/DefaultApi.md#updatereview) | **PUT** /products/reviews/types/{entity_type}/entities/{entity_uuid}/reviews/{review_uuid} | Update Review
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
*PlacesApi* | [**createPlacePlacesPlacesPost**](docs/Api/PlacesApi.md#createplaceplacesplacespost) | **POST** /places/places | Create Place
*PlacesApi* | [**deletePlacePlacesPlacesPlaceUuidDelete**](docs/Api/PlacesApi.md#deleteplaceplacesplacesplaceuuiddelete) | **DELETE** /places/places/{place_uuid} | Delete Place
*PlacesApi* | [**forwardGeocodingPlacesGeocodingForwardGet**](docs/Api/PlacesApi.md#forwardgeocodingplacesgeocodingforwardget) | **GET** /places/geocoding/forward | Forward Geocoding
*PlacesApi* | [**getPlacePlacesPlacesPlaceUuidGet**](docs/Api/PlacesApi.md#getplaceplacesplacesplaceuuidget) | **GET** /places/places/{place_uuid} | Get Place
*PlacesApi* | [**reverseGeocodingPlacesGeocodingReverseGet**](docs/Api/PlacesApi.md#reversegeocodingplacesgeocodingreverseget) | **GET** /places/geocoding/reverse | Reverse Geocoding
*PlacesApi* | [**searchPlacesBySearchStringPlacesSearchPlacesStringGet**](docs/Api/PlacesApi.md#searchplacesbysearchstringplacessearchplacesstringget) | **GET** /places/search/places/string | Search Places By Search String
*PlacesApi* | [**searchPlacesPlacesPlacesGet**](docs/Api/PlacesApi.md#searchplacesplacesplacesget) | **GET** /places/places | Search Places
*PlacesApi* | [**updatePlacePlacesPlacesPlaceUuidPut**](docs/Api/PlacesApi.md#updateplaceplacesplacesplaceuuidput) | **PUT** /places/places/{place_uuid} | Update Place
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
*SecurityApi* | [**createEncryptionKey**](docs/Api/SecurityApi.md#createencryptionkey) | **POST** /sam/security/encryption/categories/{category}/keys | Createencryptionkey
*SecurityApi* | [**createKey**](docs/Api/SecurityApi.md#createkey) | **POST** /sam/security/keys | Createkey
*SecurityApi* | [**deleteKey**](docs/Api/SecurityApi.md#deletekey) | **DELETE** /sam/security/keys/{key_uuid} | Deletekey
*SecurityApi* | [**generateToken**](docs/Api/SecurityApi.md#generatetoken) | **POST** /sam/security/tokens | Generatetoken
*SecurityApi* | [**getEncryptionKey**](docs/Api/SecurityApi.md#getencryptionkey) | **GET** /sam/security/encryption/categories/{category}/keys | Getencryptionkey
*SecurityApi* | [**getKey**](docs/Api/SecurityApi.md#getkey) | **GET** /sam/security/keys/{key_uuid} | Getkey
*SecurityApi* | [**searchKeys**](docs/Api/SecurityApi.md#searchkeys) | **GET** /sam/security/keys | Searchkeys
*SecurityApi* | [**verifyKey**](docs/Api/SecurityApi.md#verifykey) | **POST** /sam/security/keys/verify | Verifykey
*StaffApi* | [**createStaffPlacesStaffPost**](docs/Api/StaffApi.md#createstaffplacesstaffpost) | **POST** /places/staff | Create Staff
*StaffApi* | [**deleteStaffPlacesStaffStaffUuidDelete**](docs/Api/StaffApi.md#deletestaffplacesstaffstaffuuiddelete) | **DELETE** /places/staff/{staff_uuid} | Delete Staff
*StaffApi* | [**getStaffPlacesStaffStaffUuidGet**](docs/Api/StaffApi.md#getstaffplacesstaffstaffuuidget) | **GET** /places/staff/{staff_uuid} | Get Staff
*StaffApi* | [**searchStaffPlacesStaffGet**](docs/Api/StaffApi.md#searchstaffplacesstaffget) | **GET** /places/staff | Search Staff
*StaffApi* | [**updateStaffPlacesStaffStaffUuidPut**](docs/Api/StaffApi.md#updatestaffplacesstaffstaffuuidput) | **PUT** /places/staff/{staff_uuid} | Update Staff
*SupportApi* | [**createContact**](docs/Api/SupportApi.md#createcontact) | **POST** /sam/support/contact | Createcontact
*SupportApi* | [**createTicket**](docs/Api/SupportApi.md#createticket) | **POST** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets | Createticket
*SupportApi* | [**listTickets**](docs/Api/SupportApi.md#listtickets) | **GET** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets | Listtickets
*SupportApi* | [**updateTicket**](docs/Api/SupportApi.md#updateticket) | **PUT** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets/{ticket_id} | Updateticket
*SupportApi* | [**viewTicket**](docs/Api/SupportApi.md#viewticket) | **GET** /sam/support/projects/{project_uuid}/members/{member_uuid}/tickets/{ticket_id} | Viewticket
*TagApi* | [**createTagPlacesTagsPost**](docs/Api/TagApi.md#createtagplacestagspost) | **POST** /places/tags | Create Tag
*TagApi* | [**deleteTagPlacesTagsTagUuidDelete**](docs/Api/TagApi.md#deletetagplacestagstaguuiddelete) | **DELETE** /places/tags/{tag_uuid} | Delete Tag
*TagApi* | [**getTagPlacesTagsTagUuidGet**](docs/Api/TagApi.md#gettagplacestagstaguuidget) | **GET** /places/tags/{tag_uuid} | Get Tag
*TagApi* | [**searchTagsPlacesTagsGet**](docs/Api/TagApi.md#searchtagsplacestagsget) | **GET** /places/tags | Search Tags
*TagApi* | [**updateTagPlacesTagsTagUuidPut**](docs/Api/TagApi.md#updatetagplacestagstaguuidput) | **PUT** /places/tags/{tag_uuid} | Update Tag
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

- API version: `1.1.92`
    - Package version: `1.1.92`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
