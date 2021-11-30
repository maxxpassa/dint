<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Exceptions\ConfigurationException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Client as HttpClient;
use Twilio\Http\CurlClient;
use Twilio\Security\RequestValidator;
use Twilio\VersionInfo;

/**
 * A client for accessing the Twilio API.
 *
 * @property Accounts $accounts
 * @property Api $api
 * @property Autopilot $autopilot
 * @property Chat $chat
 * @property Conversations $conversations
 * @property Events $events
 * @property Fax $fax
 * @property FlexApi $flexApi
 * @property FrontlineApi $frontlineApi
 * @property Insights $insights
 * @property IpMessaging $ipMessaging
 * @property Lookups $lookups
 * @property Media $media
 * @property Messaging $messaging
 * @property Monitor $monitor
 * @property Notify $notify
 * @property Numbers $numbers
 * @property Preview $preview
 * @property Pricing $pricing
 * @property Proxy $proxy
 * @property Serverless $serverless
 * @property Studio $studio
 * @property Sync $sync
 * @property Taskrouter $taskrouter
 * @property Trunking $trunking
 * @property Trusthub $trusthub
 * @property Verify $verify
 * @property Video $video
 * @property Voice $voice
 * @property Wireless $wireless
 * @property Supersim $supersim
 * @property Bulkexports $bulkexports
 * @property \Twilio\Rest\Api\V2010\AccountInstance $account
 * @property \Twilio\Rest\Api\V2010\Account\AddressList $addresses
 * @property \Twilio\Rest\Api\V2010\Account\ApplicationList $applications
 * @property \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList $authorizedConnectApps
 * @property \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList $availablePhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\BalanceList $balance
 * @property \Twilio\Rest\Api\V2010\Account\CallList $calls
 * @property \Twilio\Rest\Api\V2010\Account\ConferenceList $conferences
 * @property \Twilio\Rest\Api\V2010\Account\ConnectAppList $connectApps
 * @property \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList $incomingPhoneNumbers
 * @property \Twilio\Rest\Api\V2010\Account\KeyList $keys
 * @property \Twilio\Rest\Api\V2010\Account\MessageList $messages
 * @property \Twilio\Rest\Api\V2010\Account\NewKeyList $newKeys
 * @property \Twilio\Rest\Api\V2010\Account\NewSigningKeyList $newSigningKeys
 * @property \Twilio\Rest\Api\V2010\Account\NotificationList $notifications
 * @property \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList $outgoingCallerIds
 * @property \Twilio\Rest\Api\V2010\Account\QueueList $queues
 * @property \Twilio\Rest\Api\V2010\Account\RecordingList $recordings
 * @property \Twilio\Rest\Api\V2010\Account\SigningKeyList $signingKeys
 * @property \Twilio\Rest\Api\V2010\Account\SipList $sip
 * @property \Twilio\Rest\Api\V2010\Account\ShortCodeList $shortCodes
 * @property \Twilio\Rest\Api\V2010\Account\TokenList $tokens
 * @property \Twilio\Rest\Api\V2010\Account\TranscriptionList $transcriptions
 * @property \Twilio\Rest\Api\V2010\Account\UsageList $usage
 * @property \Twilio\Rest\Api\V2010\Account\ValidationRequestList $validationRequests
 * @method \Twilio\Rest\Api\V2010\AccountContext accounts(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\AddressContext addresses(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ApplicationContext applications(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppContext authorizedConnectApps(string $connectAppSid)
 * @method \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext availablePhoneNumbers(string $countryCode)
 * @method \Twilio\Rest\Api\V2010\Account\CallContext calls(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ConferenceContext conferences(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ConnectAppContext connectApps(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext incomingPhoneNumbers(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\KeyContext keys(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\MessageContext messages(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\NotificationContext notifications(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdContext outgoingCallerIds(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\QueueContext queues(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\RecordingContext recordings(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\SigningKeyContext signingKeys(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\ShortCodeContext shortCodes(string $sid)
 * @method \Twilio\Rest\Api\V2010\Account\TranscriptionContext transcriptions(string $sid)
 */
class Client {
    const ENV_ACCOUNT_SID = 'TWILIO_ACCOUNT_SID';
    const ENV_AUTH_TOKEN = 'TWILIO_AUTH_TOKEN';
    const ENV_REGION = 'TWILIO_REGION';
    const ENV_EDGE = 'TWILIO_EDGE';
    const DEFAULT_REGION = 'us1';
    const ENV_LOG = 'TWILIO_LOG_LEVEL';

    protected $username;
    protected $password;
    protected $accountSid;
    protected $region;
    protected $edge;
    protected $httpClient;
    protected $environment;
    protected $logLevel;
    protected $_account;
    protected $_accounts;
    protected $_api;
    protected $_autopilot;
    protected $_chat;
    protected $_conversations;
    protected $_events;
    protected $_fax;
    protected $_flexApi;
    protected $_frontlineApi;
    protected $_insights;
    protected $_ipMessaging;
    protected $_lookups;
    protected $_media;
    protected $_messaging;
    protected $_monitor;
    protected $_notify;
    protected $_numbers;
    protected $_preview;
    protected $_pricing;
    protected $_proxy;
    protected $_serverless;
    protected $_studio;
    protected $_sync;
    protected $_taskrouter;
    protected $_trunking;
    protected $_trusthub;
    protected $_verify;
    protected $_video;
    protected $_voice;
    protected $_wireless;
    protected $_supersim;
    protected $_bulkexports;

    /**
     * Initializes the Twilio Client
     *
     * @param string $username Username to authenticate with
     * @param string $password Password to authenticate with
     * @param string $accountSid Account SID to authenticate with, defaults to
     *                           $username
     * @param string $region Region to send requests to, defaults to 'us1' if Edge
     *                       provided
     * @param HttpClient $httpClient HttpClient, defaults to CurlClient
     * @param mixed[] $environment Environment to look for auth details, defaults
     *                             to $_ENV
     * @throws ConfigurationException If valid authentication is not present
     */
    public function __construct(string $username = null, string $password = null, string $accountSid = null, string $region = null, HttpClient $httpClient = null, array $environment = null) {
        $this->environment = $environment ?: \getenv();

        $this->username = $this->getArg($username, self::ENV_ACCOUNT_SID);
        $this->password = $this->getArg($password, self::ENV_AUTH_TOKEN);
        $this->region = $this->getArg($region, self::ENV_REGION);
        $this->edge = $this->getArg(null, self::ENV_EDGE);
        $this->logLevel = $this->getArg(null, self::ENV_LOG);

        if (!$this->username || !$this->password) {
            throw new ConfigurationException('Credentials are required to create a Client');
        }

        $this->accountSid = $accountSid ?: $this->username;

        if ($httpClient) {
            $this->httpClient = $httpClient;
        } else {
            $this->httpClient = new CurlClient();
        }
    }

    /**
     * Determines argument value accounting for environment variables.
     *
     * @param string $arg The constructor argument
     * @param string $envVar The environment variable name
     * @return ?string Argument value
     */
    public function getArg(?string $arg, string $envVar): ?string {
        if ($arg) {
            return $arg;
        }

        if (\array_key_exists($envVar, $this->environment)) {
            return $this->environment[$envVar];
        }

        return null;
    }

    /**
     * Makes a request to the Twilio API using the configured http client
     * Authentication information is automatically added if none is provided
     *
     * @param string $method HTTP Method
     * @param string $uri Fully qualified url
     * @param string[] $params Query string parameters
     * @param string[] $data POST body data
     * @param string[] $headers HTTP Headers
     * @param string $username User for Authentication
     * @param string $password Password for Authentication
     * @param int $timeout Timeout in seconds
     * @return \Twilio\Http\Response Response from the Twilio API
     */
    public function request(string $method, string $uri, array $params = [], array $data = [], array $headers = [], string $username = null, string $password = null, int $timeout = null): \Twilio\Http\Response {
        $username = $username ?: $this->username;
        $password = $password ?: $this->password;
        $logLevel = (getenv('DEBUG_HTTP_TRAFFIC') === 'true' ? 'debug' : $this->getLogLevel());

        $headers['User-Agent'] = 'twilio-php/' . VersionInfo::string() .
                                 ' (PHP ' . PHP_VERSION . ')';
        $headers['Accept-Charset'] = 'utf-8';

        if ($method === 'POST' && !\array_key_exists('Content-Type', $headers)) {
            $headers['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        if (!\array_key_exists('Accept', $headers)) {
            $headers['Accept'] = 'application/json';
        }

        $uri = $this->buildUri($uri);

        if ($logLevel === 'debug') {
            error_log('-- BEGIN Twilio API Request --');
            error_log('Request Method: ' . $method);
            $u = parse_url($uri);
            if (isset($u['path'])) {
                error_log('Request URL: ' . $u['path']);
            }
            if (isset($u['query']) && strlen($u['query']) > 0) {
                error_log('Query Params: ' . $u['query']);
            }
            error_log('Request Headers: ');
            foreach ($headers as $key => $value) {
                if (strpos(strtolower($key), 'authorization') === false) {
                    error_log("$key: $value");
                }
            }
            error_log('-- END Twilio API Request --');
        }

        $response = $this->getHttpClient()->request(
            $method,
            $uri,
            $params,
            $data,
            $headers,
            $username,
            $password,
            $timeout
        );

        if ($logLevel === 'debug') {
            error_log('Status Code: ' . $response->getStatusCode());
            error_log('Response Headers:');
            $responseHeaders = $response->getHeaders();
            foreach ($responseHeaders as $key => $value) {
                error_log("$key: $value");
            }
        }

        return $response;
    }

    /**
     * Build the final request uri
     *
     * @param string $uri The original request uri
     * @return string Request uri
     */
    public function buildUri(string $uri): string {
        if ($this->region == null && $this->edge == null) {
            return $uri;
        }

        $parsedUrl = \parse_url($uri);
        $pieces = \explode('.', $parsedUrl['host']);
        $product = $pieces[0];
        $domain = \implode('.', \array_slice($pieces, -2));
        $newEdge = $this->edge;
        $newRegion = $this->region;
        if (count($pieces) == 4) { // product.region.twilio.com
            $newRegion = $newRegion ?: $pieces[1];
        } elseif (count($pieces) == 5) { // product.edge.region.twilio.com
            $newEdge = $newEdge ?: $pieces[1];
            $newRegion = $newRegion ?: $pieces[2];
        }

        if ($newEdge != null && $newRegion == null) {
            $newRegion = self::DEFAULT_REGION;
        }

        $parsedUrl['host'] = \implode('.', \array_filter([$product, $newEdge, $newRegion, $domain]));
        return RequestValidator::unparse_url($parsedUrl);
    }

    /**
     * Retrieve the Username
     *
     * @return string Current Username
     */
    public function getUsername(): string {
        return $this->username;
    }

    /**
     * Retrieve the Password
     *
     * @return string Current Password
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * Retrieve the AccountSid
     *
     * @return string Current AccountSid
     */
    public function getAccountSid(): string {
        return $this->accountSid;
    }

    /**
     * Retrieve the Region
     *
     * @return string Current Region
     */
    public function getRegion(): string {
        return $this->region;
    }

    /**
     * Retrieve the Edge
     *
     * @return string Current Edge
     */
    public function getEdge(): string {
        return $this->edge;
    }

    /**
     * Set Edge
     *
     * @param string $uri Edge to use, unsets the Edge when called with no arguments
     */
    public function setEdge(string $edge = null): void {
        $this->edge = $this->getArg($edge, self::ENV_EDGE);
    }

    /**
     * Retrieve the HttpClient
     *
     * @return HttpClient Current HttpClient
     */
    public function getHttpClient(): HttpClient {
        return $this->httpClient;
    }

    /**
     * Set the HttpClient
     *
     * @param HttpClient $httpClient HttpClient to use
     */
    public function setHttpClient(HttpClient $httpClient): void {
        $this->httpClient = $httpClient;
    }

    /**
     * Retrieve the log level
     *
     * @return ?string Current log level
     */
    public function getLogLevel(): ?string {
        return $this->logLevel;
    }

    /**
     * Set log level to debug
     *
     * @param string $logLevel log level to use
     */
    public function setLogLevel(string $logLevel = null): void {
        $this->logLevel = $this->getArg($logLevel, self::ENV_LOG);
    }

    /**
     * Access the Accounts Twilio Domain
     *
     * @return Accounts Accounts Twilio Domain
     */
    protected function getAccounts(): Accounts {
        if (!$this->_accounts) {
            $this->_accounts = new Accounts($this);
        }
        return $this->_accounts;
    }

    /**
     * Access the Api Twilio Domain
     *
     * @return Api Api Twilio Domain
     */
    protected function getApi(): Api {
        if (!$this->_api) {
            $this->_api = new Api($this);
        }
        return $this->_api;
    }

    /**
     * @return \Twilio\Rest\Api\V2010\AccountContext Account provided as the
     *                                               authenticating account
     */
    public function getAccount(): \Twilio\Rest\Api\V2010\AccountContext {
        return $this->api->v2010->account;
    }

    protected function getAddresses(): \Twilio\Rest\Api\V2010\Account\AddressList {
        return $this->api->v2010->account->addresses;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextAddresses(string $sid): \Twilio\Rest\Api\V2010\Account\AddressContext {
        return $this->api->v2010->account->addresses($sid);
    }

    protected function getApplications(): \Twilio\Rest\Api\V2010\Account\ApplicationList {
        return $this->api->v2010->account->applications;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextApplications(string $sid): \Twilio\Rest\Api\V2010\Account\ApplicationContext {
        return $this->api->v2010->account->applications($sid);
    }

    protected function getAuthorizedConnectApps(): \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList {
        return $this->api->v2010->account->authorizedConnectApps;
    }

    /**
     * @param string $connectAppSid The SID of the Connect App to fetch
     */
    protected function contextAuthorizedConnectApps(string $connectAppSid): \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppContext {
        return $this->api->v2010->account->authorizedConnectApps($connectAppSid);
    }

    protected function getAvailablePhoneNumbers(): \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList {
        return $this->api->v2010->account->availablePhoneNumbers;
    }

    /**
     * @param string $countryCode The ISO country code of the country to fetch
     *                            available phone number information about
     */
    protected function contextAvailablePhoneNumbers(string $countryCode): \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryContext {
        return $this->api->v2010->account->availablePhoneNumbers($countryCode);
    }

    protected function getBalance(): \Twilio\Rest\Api\V2010\Account\BalanceList {
        return $this->api->v2010->account->balance;
    }

    protected function getCalls(): \Twilio\Rest\Api\V2010\Account\CallList {
        return $this->api->v2010->account->calls;
    }

    /**
     * @param string $sid The SID of the Call resource to fetch
     */
    protected function contextCalls(string $sid): \Twilio\Rest\Api\V2010\Account\CallContext {
        return $this->api->v2010->account->calls($sid);
    }

    protected function getConferences(): \Twilio\Rest\Api\V2010\Account\ConferenceList {
        return $this->api->v2010->account->conferences;
    }

    /**
     * @param string $sid The unique string that identifies this resource
     */
    protected function contextConferences(string $sid): \Twilio\Rest\Api\V2010\Account\ConferenceContext {
        return $this->api->v2010->account->conferences($sid);
    }

    protected function getConnectApps(): \Twilio\Rest\Api\V2010\Account\ConnectAppList {
        return $this->api->v2010->account->connectApps;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextConnectApps(string $sid): \Twilio\Rest\Api\V2010\Account\ConnectAppContext {
        return $this->api->v2010->account->connectApps($sid);
    }

    protected function getIncomingPhoneNumbers(): \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList {
        return $this->api->v2010->account->incomingPhoneNumbers;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextIncomingPhoneNumbers(string $sid): \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberContext {
        return $this->api->v2010->account->incomingPhoneNumbers($sid);
    }

    protected function getKeys(): \Twilio\Rest\Api\V2010\Account\KeyList {
        return $this->api->v2010->account->keys;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextKeys(string $sid): \Twilio\Rest\Api\V2010\Account\KeyContext {
        return $this->api->v2010->account->keys($sid);
    }

    protected function getMessages(): \Twilio\Rest\Api\V2010\Account\MessageList {
        return $this->api->v2010->account->messages;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextMessages(string $sid): \Twilio\Rest\Api\V2010\Account\MessageContext {
        return $this->api->v2010->account->messages($sid);
    }

    protected function getNewKeys(): \Twilio\Rest\Api\V2010\Account\NewKeyList {
        return $this->api->v2010->account->newKeys;
    }

    protected function getNewSigningKeys(): \Twilio\Rest\Api\V2010\Account\NewSigningKeyList {
        return $this->api->v2010->account->newSigningKeys;
    }

    protected function getNotifications(): \Twilio\Rest\Api\V2010\Account\NotificationList {
        return $this->api->v2010->account->notifications;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextNotifications(string $sid): \Twilio\Rest\Api\V2010\Account\NotificationContext {
        return $this->api->v2010->account->notifications($sid);
    }

    protected function getOutgoingCallerIds(): \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList {
        return $this->api->v2010->account->outgoingCallerIds;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextOutgoingCallerIds(string $sid): \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdContext {
        return $this->api->v2010->account->outgoingCallerIds($sid);
    }

    protected function getQueues(): \Twilio\Rest\Api\V2010\Account\QueueList {
        return $this->api->v2010->account->queues;
    }

    /**
     * @param string $sid The unique string that identifies this resource
     */
    protected function contextQueues(string $sid): \Twilio\Rest\Api\V2010\Account\QueueContext {
        return $this->api->v2010->account->queues($sid);
    }

    protected function getRecordings(): \Twilio\Rest\Api\V2010\Account\RecordingList {
        return $this->api->v2010->account->recordings;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextRecordings(string $sid): \Twilio\Rest\Api\V2010\Account\RecordingContext {
        return $this->api->v2010->account->recordings($sid);
    }

    protected function getSigningKeys(): \Twilio\Rest\Api\V2010\Account\SigningKeyList {
        return $this->api->v2010->account->signingKeys;
    }

    /**
     * @param string $sid The sid
     */
    protected function contextSigningKeys(string $sid): \Twilio\Rest\Api\V2010\Account\SigningKeyContext {
        return $this->api->v2010->account->signingKeys($sid);
    }

    protected function getSip(): \Twilio\Rest\Api\V2010\Account\SipList {
        return $this->api->v2010->account->sip;
    }

    protected function getShortCodes(): \Twilio\Rest\Api\V2010\Account\ShortCodeList {
        return $this->api->v2010->account->shortCodes;
    }

    /**
     * @param string $sid The unique string that identifies this resource
     */
    protected function contextShortCodes(string $sid): \Twilio\Rest\Api\V2010\Account\ShortCodeContext {
        return $this->api->v2010->account->shortCodes($sid);
    }

    protected function getTokens(): \Twilio\Rest\Api\V2010\Account\TokenList {
        return $this->api->v2010->account->tokens;
    }

    protected function getTranscriptions(): \Twilio\Rest\Api\V2010\Account\TranscriptionList {
        return $this->api->v2010->account->transcriptions;
    }

    /**
     * @param string $sid The unique string that identifies the resource
     */
    protected function contextTranscriptions(string $sid): \Twilio\Rest\Api\V2010\Account\TranscriptionContext {
        return $this->api->v2010->account->transcriptions($sid);
    }

    protected function getUsage(): \Twilio\Rest\Api\V2010\Account\UsageList {
        return $this->api->v2010->account->usage;
    }

    protected function getValidationRequests(): \Twilio\Rest\Api\V2010\Account\ValidationRequestList {
        return $this->api->v2010->account->validationRequests;
    }

    /**
     * Access the Autopilot Twilio Domain
     *
     * @return Autopilot Autopilot Twilio Domain
     */
    protected function getAutopilot(): Autopilot {
        if (!$this->_autopilot) {
            $this->_autopilot = new Autopilot($this);
        }
        return $this->_autopilot;
    }

    /**
     * Access the Chat Twilio Domain
     *
     * @return Chat Chat Twilio Domain
     */
    protected function getChat(): Chat {
        if (!$this->_chat) {
            $this->_chat = new Chat($this);
        }
        return $this->_chat;
    }

    /**
     * Access the Conversations Twilio Domain
     *
     * @return Conversations Conversations Twilio Domain
     */
    protected function getConversations(): Conversations {
        if (!$this->_conversations) {
            $this->_conversations = new Conversations($this);
        }
        return $this->_conversations;
    }

    /**
     * Access the Events Twilio Domain
     *
     * @return Events Events Twilio Domain
     */
    protected function getEvents(): Events {
        if (!$this->_events) {
            $this->_events = new Events($this);
        }
        return $this->_events;
    }

    /**
     * Access the Fax Twilio Domain
     *
     * @return Fax Fax Twilio Domain
     */
    protected function getFax(): Fax {
        if (!$this->_fax) {
            $this->_fax = new Fax($this);
        }
        return $this->_fax;
    }

    /**
     * Access the FlexApi Twilio Domain
     *
     * @return FlexApi FlexApi Twilio Domain
     */
    protected function getFlexApi(): FlexApi {
        if (!$this->_flexApi) {
            $this->_flexApi = new FlexApi($this);
        }
        return $this->_flexApi;
    }

    /**
     * Access the FrontlineApi Twilio Domain
     *
     * @return FrontlineApi FrontlineApi Twilio Domain
     */
    protected function getFrontlineApi(): FrontlineApi {
        if (!$this->_frontlineApi) {
            $this->_frontlineApi = new FrontlineApi($this);
        }
        return $this->_frontlineApi;
    }

    /**
     * Access the Insights Twilio Domain
     *
     * @return Insights Insights Twilio Domain
     */
    protected function getInsights(): Insights {
        if (!$this->_insights) {
            $this->_insights = new Insights($this);
        }
        return $this->_insights;
    }

    /**
     * Access the IpMessaging Twilio Domain
     *
     * @return IpMessaging IpMessaging Twilio Domain
     */
    protected function getIpMessaging(): IpMessaging {
        if (!$this->_ipMessaging) {
            $this->_ipMessaging = new IpMessaging($this);
        }
        return $this->_ipMessaging;
    }

    /**
     * Access the Lookups Twilio Domain
     *
     * @return Lookups Lookups Twilio Domain
     */
    protected function getLookups(): Lookups {
        if (!$this->_lookups) {
            $this->_lookups = new Lookups($this);
        }
        return $this->_lookups;
    }

    /**
     * Access the Media Twilio Domain
     *
     * @return Media Media Twilio Domain
     */
    protected function getMedia(): Media {
        if (!$this->_media) {
            $this->_media = new Media($this);
        }
        return $this->_media;
    }

    /**
     * Access the Messaging Twilio Domain
     *
     * @return Messaging Messaging Twilio Domain
     */
    protected function getMessaging(): Messaging {
        if (!$this->_messaging) {
            $this->_messaging = new Messaging($this);
        }
        return $this->_messaging;
    }

    /**
     * Access the Monitor Twilio Domain
     *
     * @return Monitor Monitor Twilio Domain
     */
    protected function getMonitor(): Monitor {
        if (!$this->_monitor) {
            $this->_monitor = new Monitor($this);
        }
        return $this->_monitor;
    }

    /**
     * Access the Notify Twilio Domain
     *
     * @return Notify Notify Twilio Domain
     */
    protected function getNotify(): Notify {
        if (!$this->_notify) {
            $this->_notify = new Notify($this);
        }
        return $this->_notify;
    }

    /**
     * Access the Numbers Twilio Domain
     *
     * @return Numbers Numbers Twilio Domain
     */
    protected function getNumbers(): Numbers {
        if (!$this->_numbers) {
            $this->_numbers = new Numbers($this);
        }
        return $this->_numbers;
    }

    /**
     * Access the Preview Twilio Domain
     *
     * @return Preview Preview Twilio Domain
     */
    protected function getPreview(): Preview {
        if (!$this->_preview) {
            $this->_preview = new Preview($this);
        }
        return $this->_preview;
    }

    /**
     * Access the Pricing Twilio Domain
     *
     * @return Pricing Pricing Twilio Domain
     */
    protected function getPricing(): Pricing {
        if (!$this->_pricing) {
            $this->_pricing = new Pricing($this);
        }
        return $this->_pricing;
    }

    /**
     * Access the Proxy Twilio Domain
     *
     * @return Proxy Proxy Twilio Domain
     */
    protected function getProxy(): Proxy {
        if (!$this->_proxy) {
            $this->_proxy = new Proxy($this);
        }
        return $this->_proxy;
    }

    /**
     * Access the Serverless Twilio Domain
     *
     * @return Serverless Serverless Twilio Domain
     */
    protected function getServerless(): Serverless {
        if (!$this->_serverless) {
            $this->_serverless = new Serverless($this);
        }
        return $this->_serverless;
    }

    /**
     * Access the Studio Twilio Domain
     *
     * @return Studio Studio Twilio Domain
     */
    protected function getStudio(): Studio {
        if (!$this->_studio) {
            $this->_studio = new Studio($this);
        }
        return $this->_studio;
    }

    /**
     * Access the Sync Twilio Domain
     *
     * @return Sync Sync Twilio Domain
     */
    protected function getSync(): Sync {
        if (!$this->_sync) {
            $this->_sync = new Sync($this);
        }
        return $this->_sync;
    }

    /**
     * Access the Taskrouter Twilio Domain
     *
     * @return Taskrouter Taskrouter Twilio Domain
     */
    protected function getTaskrouter(): Taskrouter {
        if (!$this->_taskrouter) {
            $this->_taskrouter = new Taskrouter($this);
        }
        return $this->_taskrouter;
    }

    /**
     * Access the Trunking Twilio Domain
     *
     * @return Trunking Trunking Twilio Domain
     */
    protected function getTrunking(): Trunking {
        if (!$this->_trunking) {
            $this->_trunking = new Trunking($this);
        }
        return $this->_trunking;
    }

    /**
     * Access the Trusthub Twilio Domain
     *
     * @return Trusthub Trusthub Twilio Domain
     */
    protected function getTrusthub(): Trusthub {
        if (!$this->_trusthub) {
            $this->_trusthub = new Trusthub($this);
        }
        return $this->_trusthub;
    }

    /**
     * Access the Verify Twilio Domain
     *
     * @return Verify Verify Twilio Domain
     */
    protected function getVerify(): Verify {
        if (!$this->_verify) {
            $this->_verify = new Verify($this);
        }
        return $this->_verify;
    }

    /**
     * Access the Video Twilio Domain
     *
     * @return Video Video Twilio Domain
     */
    protected function getVideo(): Video {
        if (!$this->_video) {
            $this->_video = new Video($this);
        }
        return $this->_video;
    }

    /**
     * Access the Voice Twilio Domain
     *
     * @return Voice Voice Twilio Domain
     */
    protected function getVoice(): Voice {
        if (!$this->_voice) {
            $this->_voice = new Voice($this);
        }
        return $this->_voice;
    }

    /**
     * Access the Wireless Twilio Domain
     *
     * @return Wireless Wireless Twilio Domain
     */
    protected function getWireless(): Wireless {
        if (!$this->_wireless) {
            $this->_wireless = new Wireless($this);
        }
        return $this->_wireless;
    }

    /**
     * Access the Supersim Twilio Domain
     *
     * @return Supersim Supersim Twilio Domain
     */
    protected function getSupersim(): Supersim {
        if (!$this->_supersim) {
            $this->_supersim = new Supersim($this);
        }
        return $this->_supersim;
    }

    /**
     * Access the Bulkexports Twilio Domain
     *
     * @return Bulkexports Bulkexports Twilio Domain
     */
    protected function getBulkexports(): Bulkexports {
        if (!$this->_bulkexports) {
            $this->_bulkexports = new Bulkexports($this);
        }
        return $this->_bulkexports;
    }

    /**
     * Magic getter to lazy load domains
     *
     * @param string $name Domain to return
     * @return \Twilio\Domain The requested domain
     * @throws TwilioException For unknown domains
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown domain ' . $name);
    }

    /**
     * Magic call to lazy load contexts
     *
     * @param string $name Context to return
     * @param mixed[] $arguments Context to return
     * @return \Twilio\InstanceContext The requested context
     * @throws TwilioException For unknown contexts
     */
    public function __call(string $name, array $arguments) {
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array([$this, $method], $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Client ' . $this->getAccountSid() . ']';
    }

    /**
     * Validates connection to new SSL certificate endpoint
     *
     * @param CurlClient $client
     * @throws TwilioException if request fails
     */
    public function validateSslCertificate(CurlClient $client): void {
        $response = $client->request('GET', 'https://api.twilio.com:8443');

        if ($response->getStatusCode() < 200 || $response->getStatusCode() > 300) {
            throw new TwilioException('Failed to validate SSL certificate');
        }
    }
}