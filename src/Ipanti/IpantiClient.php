<?php
/**
 * Ipanti
 *
 * @category Jdcloud
 * @package  Jdcloud\Ipanti
 * @author   Jdcloud <jdcloud-api@jd.com>
 * @license  Apache-2.0 http://www.apache.org/licenses/LICENSE-2.0
 * @link     https://www.jdcloud.com/help/faq
 */

namespace Jdcloud\Ipanti;

use Jdcloud\JdCloudClient;
use Jdcloud\Api\Service;
use Jdcloud\Api\DocModel;
use Jdcloud\Api\ApiProvider;
use Jdcloud\PresignUrlMiddleware;

/**
 * Client used to interact with ipanti.
 *
 * @method \Jdcloud\Result describeDDoSAttackLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDDoSAttackLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeCCAttackLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCAttackLogsAsync(array $args = [])
 * @method \Jdcloud\Result describeCCAttackLogDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCAttackLogDetailsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttackStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackStatisticsAsync(array $args = [])
 * @method \Jdcloud\Result describeAttackTypeCount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAttackTypeCountAsync(array $args = [])
 * @method \Jdcloud\Result describeDDoSGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDDoSGraphAsync(array $args = [])
 * @method \Jdcloud\Result describeFwdGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFwdGraphAsync(array $args = [])
 * @method \Jdcloud\Result describeCCGraph(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCGraphAsync(array $args = [])
 * @method \Jdcloud\Result describeForwardRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeForwardRulesAsync(array $args = [])
 * @method \Jdcloud\Result createForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result switchForwardRuleProtect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchForwardRuleProtectAsync(array $args = [])
 * @method \Jdcloud\Result switchForwardRuleOrigin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchForwardRuleOriginAsync(array $args = [])
 * @method \Jdcloud\Result describeProtectionRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyProtectionRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyProtectionRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeGeoAreas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGeoAreasAsync(array $args = [])
 * @method \Jdcloud\Result describeBlackListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBlackListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyBlackListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBlackListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableBlackListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableBlackListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result disableBlackListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableBlackListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeWhiteListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWhiteListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyWhiteListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWhiteListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableWhiteListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWhiteListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result disableWhiteListRuleOfForwardRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWhiteListRuleOfForwardRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Jdcloud\Result createInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceAsync(array $args = [])
 * @method \Jdcloud\Result describeInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAsync(array $args = [])
 * @method \Jdcloud\Result modifyInstanceName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceNameAsync(array $args = [])
 * @method \Jdcloud\Result modifyEPB(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyEPBAsync(array $args = [])
 * @method \Jdcloud\Result describeAlarmConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAlarmConfigAsync(array $args = [])
 * @method \Jdcloud\Result modifyAlarmConfig(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAlarmConfigAsync(array $args = [])
 * @method \Jdcloud\Result describeServiceIpList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeServiceIpListAsync(array $args = [])
 * @method \Jdcloud\Result describeNameList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNameListAsync(array $args = [])
 * @method \Jdcloud\Result describeProtectionStatistics(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProtectionStatisticsAsync(array $args = [])
 * @method \Jdcloud\Result checkName(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkNameAsync(array $args = [])
 * @method \Jdcloud\Result describeVpcIpList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcIpListAsync(array $args = [])
 * @method \Jdcloud\Result describeCpsIpList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCpsIpListAsync(array $args = [])
 * @method \Jdcloud\Result describeIpSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpSetsAsync(array $args = [])
 * @method \Jdcloud\Result createIpSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIpSetAsync(array $args = [])
 * @method \Jdcloud\Result describeIpSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpSetAsync(array $args = [])
 * @method \Jdcloud\Result deleteIpSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIpSetAsync(array $args = [])
 * @method \Jdcloud\Result describeIpSetUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpSetUsageAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRulesAsync(array $args = [])
 * @method \Jdcloud\Result createWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result bindCert(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bindCertAsync(array $args = [])
 * @method \Jdcloud\Result switchWebRuleProtect(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchWebRuleProtectAsync(array $args = [])
 * @method \Jdcloud\Result switchWebRuleOrigin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise switchWebRuleOriginAsync(array $args = [])
 * @method \Jdcloud\Result enableWebRuleCC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWebRuleCCAsync(array $args = [])
 * @method \Jdcloud\Result disableWebRuleCC(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWebRuleCCAsync(array $args = [])
 * @method \Jdcloud\Result enableWebRuleCCObserverMode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWebRuleCCObserverModeAsync(array $args = [])
 * @method \Jdcloud\Result disableWebRuleCCObserverMode(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWebRuleCCObserverModeAsync(array $args = [])
 * @method \Jdcloud\Result describeCCProtectionRulesOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCProtectionRulesOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result createCCProtectionRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCCProtectionRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeCCProtectionRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCProtectionRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyCCProtectionRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCCProtectionRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteCCProtectionRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCCProtectionRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableCCProtectionRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableCCProtectionRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result disableCCProtectionRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableCCProtectionRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeCCProtectionConfigOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCProtectionConfigOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyCCProtectionConfigOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCCProtectionConfigOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeCCProtectionDefaultConfigOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCCProtectionDefaultConfigOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyCertInfo(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCertInfoAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRuleBlackListUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRuleBlackListUsageAsync(array $args = [])
 * @method \Jdcloud\Result describeBlackListRulesOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBlackListRulesOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result createBlackListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBlackListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeBlackListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBlackListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyBlackListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyBlackListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteBlackListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBlackListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableWebRuleBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWebRuleBlackListAsync(array $args = [])
 * @method \Jdcloud\Result enableBlackListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableBlackListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result disableWebRuleBlackList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWebRuleBlackListAsync(array $args = [])
 * @method \Jdcloud\Result disableBlackListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableBlackListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRuleWhiteListUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRuleWhiteListUsageAsync(array $args = [])
 * @method \Jdcloud\Result describeWhiteListRulesOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWhiteListRulesOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result createWhiteListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWhiteListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeWhiteListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWhiteListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result modifyWhiteListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWhiteListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result deleteWhiteListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWhiteListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result enableWebRuleWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWebRuleWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result enableWhiteListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableWhiteListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result disableWebRuleWhiteList(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWebRuleWhiteListAsync(array $args = [])
 * @method \Jdcloud\Result disableWhiteListRuleOfWebRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableWhiteListRuleOfWebRuleAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRuleBlackListGeoAreas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRuleBlackListGeoAreasAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRuleWhiteListGeoAreas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRuleWhiteListGeoAreasAsync(array $args = [])
 * @method \Jdcloud\Result describeWebRuleRSGeoAreas(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWebRuleRSGeoAreasAsync(array $args = [])
 */
class IpantiClient extends JdCloudClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                        ],
                        'service' => 'ipanti',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ipanti'
            );
        };

        parent::__construct($args);
    }
}