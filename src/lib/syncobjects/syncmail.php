<?php
/***********************************************
* File      :   syncmail.php
* Project   :   Z-Push
* Descr     :   WBXML mail entities that can be parsed
*               directly (as a stream) from WBXML.
*               It is automatically decoded
*               according to $mapping,
*               and the Sync WBXML mappings.
*
* Created   :   05.09.2011
*
* Copyright 2007 - 2013 Zarafa Deutschland GmbH
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License, version 3,
* as published by the Free Software Foundation with the following additional
* term according to sec. 7:
*
* According to sec. 7 of the GNU Affero General Public License, version 3,
* the terms of the AGPL are supplemented with the following terms:
*
* "Zarafa" is a registered trademark of Zarafa B.V.
* "Z-Push" is a registered trademark of Zarafa Deutschland GmbH
* The licensing of the Program under the AGPL does not imply a trademark license.
* Therefore any rights, title and interest in our trademarks remain entirely with us.
*
* However, if you propagate an unmodified version of the Program you are
* allowed to use the term "Z-Push" to indicate that you distribute the Program.
* Furthermore you may use our trademarks where it is necessary to indicate
* the intended purpose of a product or service provided you use it in accordance
* with honest practices in industrial or commercial matters.
* If you want to propagate modified versions of the Program under the name "Z-Push",
* you may only do so if you have a written permission by Zarafa Deutschland GmbH
* (to acquire a permission please contact Zarafa at trademark@zarafa.com).
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
* Consult LICENSE file for details
************************************************/


class SyncMail extends SyncObject {
    public $to;
    public $cc;
    public $from;
    public $subject;
    public $threadtopic;
    public $datereceived;
    public $displayto;
    public $importance;
    public $read;
    public $attachments;
    public $mimetruncated;
    public $mimedata;
    public $mimesize;
    public $bodytruncated;
    public $bodysize;
    public $body;
    public $messageclass;
    public $meetingrequest;
    public $reply_to;

    // AS 2.5 prop
    public $internetcpid;

    // AS 12.0 props
    public $asbody;
    public $asattachments;
    public $flag;
    public $contentclass;
    public $nativebodytype;

    // AS 14.0 props
    public $umcallerid;
    public $umusernotes;
    public $conversationid;
    public $conversationindex;
    public $lastverbexecuted; //possible values unknown, reply to sender, reply to all, forward
    public $lastverbexectime;
    public $receivedasbcc;
    public $sender;

    function SyncMail() {
        $mapping = array (
                    SYNC_POOMMAIL_TO                                    => array (  self::STREAMER_VAR      => "to",
                                                                                    self::STREAMER_TYPE     => self::STREAMER_TYPE_COMMA_SEPARATED,
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_LENGTHMAX      => 32768,
                                                                                                                        self::STREAMER_CHECK_EMAIL        => "" )),

                    SYNC_POOMMAIL_CC                                    => array (  self::STREAMER_VAR      => "cc",
                                                                                    self::STREAMER_TYPE     => self::STREAMER_TYPE_COMMA_SEPARATED,
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_LENGTHMAX      => 32768,
                                                                                                                        self::STREAMER_CHECK_EMAIL        => "" )),

                    SYNC_POOMMAIL_FROM                                  => array (  self::STREAMER_VAR      => "from",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_LENGTHMAX      => 32768,
                                                                                                                        self::STREAMER_CHECK_EMAIL        => "" )),

                    SYNC_POOMMAIL_SUBJECT                               => array (  self::STREAMER_VAR      => "subject"),
                    SYNC_POOMMAIL_THREADTOPIC                           => array (  self::STREAMER_VAR      => "threadtopic"),
                    SYNC_POOMMAIL_DATERECEIVED                          => array (  self::STREAMER_VAR      => "datereceived",
                                                                                    self::STREAMER_TYPE     => self::STREAMER_TYPE_DATE_DASHES),

                    SYNC_POOMMAIL_DISPLAYTO                             => array (  self::STREAMER_VAR      => "displayto"),

                    // Importance values
                    // 0 = Low
                    // 1 = Normal
                    // 2 = High
                    // even the default value 1 is optional, the native android client 2.2 interprets a non-existing value as 0 (low)
                    SYNC_POOMMAIL_IMPORTANCE                            => array (  self::STREAMER_VAR      => "importance",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_REQUIRED       => self::STREAMER_CHECK_SETONE,
                                                                                                                        self::STREAMER_CHECK_ONEVALUEOF     => array(0,1,2) )),

                    SYNC_POOMMAIL_READ                                  => array (  self::STREAMER_VAR      => "read",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_ONEVALUEOF     => array(0,1) )),

                    SYNC_POOMMAIL_ATTACHMENTS                           => array (  self::STREAMER_VAR      => "attachments",
                                                                                    self::STREAMER_TYPE     => "SyncAttachment",
                                                                                    self::STREAMER_ARRAY    => SYNC_POOMMAIL_ATTACHMENT),

                    SYNC_POOMMAIL_MIMETRUNCATED                         => array (  self::STREAMER_VAR      => "mimetruncated",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_ZEROORONE      => self::STREAMER_CHECK_SETZERO)),

                    SYNC_POOMMAIL_MIMEDATA                              => array (  self::STREAMER_VAR      => "mimedata"), //TODO mimedata should be of a type stream

                    SYNC_POOMMAIL_MIMESIZE                              => array (  self::STREAMER_VAR      => "mimesize",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_CMPHIGHER      => -1)),

                    SYNC_POOMMAIL_BODYTRUNCATED                         => array (  self::STREAMER_VAR      => "bodytruncated",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_ZEROORONE      => self::STREAMER_CHECK_SETZERO)),

                    SYNC_POOMMAIL_BODYSIZE                              => array (  self::STREAMER_VAR      => "bodysize",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_CMPHIGHER      => -1)),

                    SYNC_POOMMAIL_BODY                                  => array (  self::STREAMER_VAR      => "body"),
                    SYNC_POOMMAIL_MESSAGECLASS                          => array (  self::STREAMER_VAR      => "messageclass"),
                    SYNC_POOMMAIL_MEETINGREQUEST                        => array (  self::STREAMER_VAR      => "meetingrequest",
                                                                                    self::STREAMER_TYPE     => "SyncMeetingRequest"),

                    SYNC_POOMMAIL_REPLY_TO                              => array (  self::STREAMER_VAR      => "reply_to",
                                                                                    self::STREAMER_TYPE     => self::STREAMER_TYPE_SEMICOLON_SEPARATED,
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_EMAIL        => "" )),

                );

        if (Request::GetProtocolVersion() >= 2.5) {
            $mapping[SYNC_POOMMAIL_INTERNETCPID]                        = array (   self::STREAMER_VAR      => "internetcpid");
        }

        if (Request::GetProtocolVersion() >= 12.0) {
            $mapping[SYNC_AIRSYNCBASE_BODY]                             = array (   self::STREAMER_VAR      => "asbody",
                                                                                    self::STREAMER_TYPE     => "SyncBaseBody");

            $mapping[SYNC_AIRSYNCBASE_ATTACHMENTS]                      = array (   self::STREAMER_VAR      => "asattachments",
                                                                                    self::STREAMER_TYPE     => "SyncBaseAttachment",
                                                                                    self::STREAMER_ARRAY    => SYNC_AIRSYNCBASE_ATTACHMENT);

            $mapping[SYNC_POOMMAIL_CONTENTCLASS]                        = array (   self::STREAMER_VAR      => "contentclass",
                                                                                    self::STREAMER_CHECKS   => array(   self::STREAMER_CHECK_ONEVALUEOF     => array(DEFAULT_EMAIL_CONTENTCLASS, DEFAULT_CALENDAR_CONTENTCLASS) ));

            $mapping[SYNC_POOMMAIL_FLAG]                                = array (   self::STREAMER_VAR      => "flag",
                                                                                    self::STREAMER_TYPE     => "SyncMailFlags",
                                                                                    self::STREAMER_PROP     => self::STREAMER_TYPE_SEND_EMPTY);

            $mapping[SYNC_AIRSYNCBASE_NATIVEBODYTYPE]                   = array (   self::STREAMER_VAR      => "nativebodytype");

            //unset these properties because airsyncbase body and attachments will be used instead
            unset($mapping[SYNC_POOMMAIL_BODY], $mapping[SYNC_POOMMAIL_BODYTRUNCATED], $mapping[SYNC_POOMMAIL_ATTACHMENTS]);
        }

        if (Request::GetProtocolVersion() >= 14.0) {
            $mapping[SYNC_POOMMAIL2_UMCALLERID]                         = array (   self::STREAMER_VAR      => "umcallerid");
            $mapping[SYNC_POOMMAIL2_UMUSERNOTES]                        = array (   self::STREAMER_VAR      => "umusernotes");
            $mapping[SYNC_POOMMAIL2_CONVERSATIONID]                     = array (   self::STREAMER_VAR      => "conversationid");
            $mapping[SYNC_POOMMAIL2_CONVERSATIONINDEX]                  = array (   self::STREAMER_VAR      => "conversationindex");
            $mapping[SYNC_POOMMAIL2_LASTVERBEXECUTED]                   = array (   self::STREAMER_VAR      => "lastverbexecuted");

            $mapping[SYNC_POOMMAIL2_LASTVERBEXECUTIONTIME]              = array (   self::STREAMER_VAR      => "lastverbexectime",
                                                                                    self::STREAMER_TYPE     => self::STREAMER_TYPE_DATE_DASHES);

            $mapping[SYNC_POOMMAIL2_RECEIVEDASBCC]                      = array (   self::STREAMER_VAR      => "receivedasbcc");
            $mapping[SYNC_POOMMAIL2_SENDER]                             = array (   self::STREAMER_VAR      => "sender");
            $mapping[SYNC_POOMMAIL_CATEGORIES]                          = array (   self::STREAMER_VAR      => "categories",
                                                                                    self::STREAMER_ARRAY    => SYNC_POOMMAIL_CATEGORY);
            //TODO bodypart, accountid, rightsmanagementlicense
        }

        parent::SyncObject($mapping);
    }
}

?>