<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'ASDevice' => $baseDir . '/lib/core/asdevice.php',
    'AuthenticationRequiredException' => $baseDir . '/lib/exceptions/authenticationrequiredexception.php',
    'Backend' => $baseDir . '/lib/default/backend.php',
    'BackendDiff' => $baseDir . '/lib/default/diffbackend/diffbackend.php',
    'BodyPreference' => $baseDir . '/lib/core/bodypreference.php',
    'ChangesMemoryWrapper' => $baseDir . '/lib/core/changesmemorywrapper.php',
    'ContentParameters' => $baseDir . '/lib/core/contentparameters.php',
    'DeviceManager' => $baseDir . '/lib/core/devicemanager.php',
    'DiffState' => $baseDir . '/lib/default/diffbackend/diffstate.php',
    'ExportChangesDiff' => $baseDir . '/lib/default/diffbackend/exportchangesdiff.php',
    'FatalException' => $baseDir . '/lib/exceptions/fatalexception.php',
    'FatalMisconfigurationException' => $baseDir . '/lib/exceptions/fatalmisconfigurationexception.php',
    'FatalNotImplementedException' => $baseDir . '/lib/exceptions/fatalnotimplementedexception.php',
    'FileStateMachine' => $baseDir . '/lib/default/filestatemachine.php',
    'FolderChange' => $baseDir . '/lib/request/folderchange.php',
    'FolderSync' => $baseDir . '/lib/request/foldersync.php',
    'GetAttachment' => $baseDir . '/lib/request/getattachment.php',
    'GetHierarchy' => $baseDir . '/lib/request/gethierarchy.php',
    'GetItemEstimate' => $baseDir . '/lib/request/getitemestimate.php',
    'HTTPReturnCodeException' => $baseDir . '/lib/exceptions/httpreturncodeexception.php',
    'HierarchyCache' => $baseDir . '/lib/core/hierarchycache.php',
    'IBackend' => $baseDir . '/lib/interface/ibackend.php',
    'IChanges' => $baseDir . '/lib/interface/ichanges.php',
    'IExportChanges' => $baseDir . '/lib/interface/iexportchanges.php',
    'IImportChanges' => $baseDir . '/lib/interface/iimportchanges.php',
    'ISearchProvider' => $baseDir . '/lib/interface/isearchprovider.php',
    'IStateMachine' => $baseDir . '/lib/interface/istatemachine.php',
    'ImportChangesDiff' => $baseDir . '/lib/default/diffbackend/importchangesdiff.php',
    'ImportChangesStream' => $baseDir . '/lib/core/streamimporter.php',
    'InterProcessData' => $baseDir . '/lib/ipc/shm/interprocessdata.php',
    'ItemOperations' => $baseDir . '/lib/request/itemoperations.php',
    'LoopDetection' => $baseDir . '/lib/ipc/shm/loopdetection.php',
    'Mail_RFC822' => $baseDir . '/include/z_RFC822.php',
    'Mail_mimeDecode' => $baseDir . '/include/mimeDecode.php',
    'MeetingResponse' => $baseDir . '/lib/request/meetingresponse.php',
    'MoveItems' => $baseDir . '/lib/request/moveitems.php',
    'NoHierarchyCacheAvailableException' => $baseDir . '/lib/exceptions/nohierarchycacheavailableexception.php',
    'NoPostRequestException' => $baseDir . '/lib/exceptions/nopostrequestexception.php',
    'NotImplementedException' => $baseDir . '/lib/exceptions/notimplementedexception.php',
    'Notify' => $baseDir . '/lib/request/notify.php',
    'Ping' => $baseDir . '/lib/request/ping.php',
    'PingTracking' => $baseDir . '/lib/ipc/shm/pingtracking.php',
    'Provisioning' => $baseDir . '/lib/request/provisioning.php',
    'ProvisioningRequiredException' => $baseDir . '/lib/exceptions/provisioningrequiredexception.php',
    'Request' => $baseDir . '/lib/request/request.php',
    'RequestProcessor' => $baseDir . '/lib/request/requestprocessor.php',
    'ResolveRecipients' => $baseDir . '/lib/request/resolverecipients.php',
    'Search' => $baseDir . '/lib/request/search.php',
    'SearchProvider' => $baseDir . '/lib/default/searchprovider.php',
    'SendMail' => $baseDir . '/lib/request/sendmail.php',
    'Settings' => $baseDir . '/lib/request/settings.php',
    'SimpleMutex' => $baseDir . '/lib/default/simplemutex.php',
    'StateInvalidException' => $baseDir . '/lib/exceptions/stateinvalidexception.php',
    'StateManager' => $baseDir . '/lib/core/statemanager.php',
    'StateNotFoundException' => $baseDir . '/lib/exceptions/statenotfoundexception.php',
    'StateNotYetAvailableException' => $baseDir . '/lib/exceptions/statenotyetavailableexception.php',
    'StateObject' => $baseDir . '/lib/core/stateobject.php',
    'StatusException' => $baseDir . '/lib/exceptions/statusexception.php',
    'Streamer' => $baseDir . '/lib/core/streamer.php',
    'StringStreamWrapper' => $baseDir . '/include/stringstreamwrapper.php',
    'Sync' => $baseDir . '/lib/request/sync.php',
    'SyncAppointment' => $baseDir . '/lib/syncobjects/syncappointment.php',
    'SyncAppointmentException' => $baseDir . '/lib/syncobjects/syncappointmentexception.php',
    'SyncAttachment' => $baseDir . '/lib/syncobjects/syncattachment.php',
    'SyncAttendee' => $baseDir . '/lib/syncobjects/syncattendee.php',
    'SyncBaseAttachment' => $baseDir . '/lib/syncobjects/syncbaseattachment.php',
    'SyncBaseBody' => $baseDir . '/lib/syncobjects/syncbasebody.php',
    'SyncCollections' => $baseDir . '/lib/core/synccollections.php',
    'SyncContact' => $baseDir . '/lib/syncobjects/synccontact.php',
    'SyncDeviceInformation' => $baseDir . '/lib/syncobjects/syncdeviceinformation.php',
    'SyncDevicePassword' => $baseDir . '/lib/syncobjects/syncdevicepassword.php',
    'SyncFolder' => $baseDir . '/lib/syncobjects/syncfolder.php',
    'SyncItemOperationsAttachment' => $baseDir . '/lib/syncobjects/syncitemoperationsattachment.php',
    'SyncMail' => $baseDir . '/lib/syncobjects/syncmail.php',
    'SyncMailFlags' => $baseDir . '/lib/syncobjects/syncmailflags.php',
    'SyncMeetingRequest' => $baseDir . '/lib/syncobjects/syncmeetingrequest.php',
    'SyncMeetingRequestRecurrence' => $baseDir . '/lib/syncobjects/syncmeetingrequestrecurrence.php',
    'SyncNote' => $baseDir . '/lib/syncobjects/syncnote.php',
    'SyncOOF' => $baseDir . '/lib/syncobjects/syncoof.php',
    'SyncOOFMessage' => $baseDir . '/lib/syncobjects/syncoofmessage.php',
    'SyncObject' => $baseDir . '/lib/syncobjects/syncobject.php',
    'SyncObjectBrokenException' => $baseDir . '/lib/exceptions/syncobjectbrokenexception.php',
    'SyncParameters' => $baseDir . '/lib/core/syncparameters.php',
    'SyncProvisioning' => $baseDir . '/lib/syncobjects/syncprovisioning.php',
    'SyncRRAvailability' => $baseDir . '/lib/syncobjects/syncresolverecipientsavailability.php',
    'SyncRRCertificates' => $baseDir . '/lib/syncobjects/syncresolverecipientscertificates.php',
    'SyncRROptions' => $baseDir . '/lib/syncobjects/syncresolverecipientsoptions.php',
    'SyncRRPicture' => $baseDir . '/lib/syncobjects/syncresolverecipientspicture.php',
    'SyncRecurrence' => $baseDir . '/lib/syncobjects/syncrecurrence.php',
    'SyncResolveRecipient' => $baseDir . '/lib/syncobjects/syncresolverecipient.php',
    'SyncResolveRecipients' => $baseDir . '/lib/syncobjects/syncresolverecipients.php',
    'SyncSendMail' => $baseDir . '/lib/syncobjects/syncsendmail.php',
    'SyncSendMailSource' => $baseDir . '/lib/syncobjects/syncsendmailsource.php',
    'SyncTask' => $baseDir . '/lib/syncobjects/synctask.php',
    'SyncTaskRecurrence' => $baseDir . '/lib/syncobjects/synctaskrecurrence.php',
    'SyncUserInformation' => $baseDir . '/lib/syncobjects/syncuserinformation.php',
    'SyncValidateCert' => $baseDir . '/lib/syncobjects/syncvalidatecert.php',
    'TimezoneUtil' => $baseDir . '/lib/utils/timezoneutil.php',
    'TopCollector' => $baseDir . '/lib/ipc/shm/topcollector.php',
    'Utils' => $baseDir . '/lib/utils/utils.php',
    'ValidateCert' => $baseDir . '/lib/request/validatecert.php',
    'WBXMLDecoder' => $baseDir . '/lib/wbxml/wbxmldecoder.php',
    'WBXMLDefs' => $baseDir . '/lib/wbxml/wbxmldefs.php',
    'WBXMLEncoder' => $baseDir . '/lib/wbxml/wbxmlencoder.php',
    'WBXMLException' => $baseDir . '/lib/exceptions/wbxmlexception.php',
    'Webservice' => $baseDir . '/lib/webservice/webservice.php',
    'WebserviceDevice' => $baseDir . '/lib/webservice/webservicedevice.php',
    'WebserviceUsers' => $baseDir . '/lib/webservice/webserviceusers.php',
    'ZLog' => $baseDir . '/lib/core/zlog.php',
    'ZPush' => $baseDir . '/lib/core/zpush.php',
    'ZPushAdmin' => $baseDir . '/lib/utils/zpushadmin.php',
    'ZPushAutodiscover' => $baseDir . '/autodiscover/autodiscover.php',
    'ZPushException' => $baseDir . '/lib/exceptions/zpushexception.php',
    'padding_filter' => $baseDir . '/lib/core/paddingfilter.php',
);
