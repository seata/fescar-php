<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Seata\Core\Codec\Seata;

use Hyperf\Seata\Core\Codec\Seata\Protocol as CodecProtocol;
use Hyperf\Seata\Core\Protocol;
use Hyperf\Seata\Core\Protocol\AbstractMessage;
use Hyperf\Seata\Core\Protocol\MessageType;

class MessageCodecFactory
{
    public function getMessage(int $typeCode): ?AbstractMessage
    {
        $message = null;
        $mapping = [
            MessageType::TYPE_SEATA_MERGE => Protocol\MergedWarpMessage::class,
            MessageType::TYPE_SEATA_MERGE_RESULT => Protocol\MergeResultMessage::class,
            MessageType::TYPE_REG_CLT => Protocol\RegisterTMRequest::class,
            MessageType::TYPE_REG_CLT_RESULT => Protocol\RegisterTMResponse::class,
            MessageType::TYPE_REG_RM => Protocol\RegisterRMRequest::class,
            MessageType::TYPE_REG_RM_RESULT => Protocol\RegisterRMResponse::class,
            MessageType::TYPE_BRANCH_COMMIT => Protocol\Transaction\BranchCommitRequest::class,
            MessageType::TYPE_BRANCH_ROLLBACK => Protocol\Transaction\BranchRollbackRequest::class,
        ];
        if (isset($mapping[$typeCode])) {
            $message = new $mapping[$typeCode]();
        }
        if ($message !== null) {
            return $message;
        }
        return $this->getMergeResponseInstanceByCode($typeCode);
    }

    public function getMessageCodec(int $typeCode): MessageSeataCodecInterface
    {
        $msgCodec = null;
        $mapping = [
            MessageType::TYPE_SEATA_MERGE => CodecProtocol\MergedWarpMessageCodec::class,
            MessageType::TYPE_SEATA_MERGE_RESULT => CodecProtocol\MergeResultMessageCodec::class,
            MessageType::TYPE_REG_CLT => CodecProtocol\RegisterTMRequestCodec::class,
            MessageType::TYPE_REG_CLT_RESULT => CodecProtocol\RegisterTMResponseCodec::class,
            MessageType::TYPE_REG_RM => CodecProtocol\RegisterRMRequestCodec::class,
            MessageType::TYPE_REG_RM_RESULT => CodecProtocol\RegisterRMResponseCodec::class,
            MessageType::TYPE_BRANCH_COMMIT => CodecProtocol\Transaction\BranchCommitRequestCodec::class,
            MessageType::TYPE_BRANCH_ROLLBACK => CodecProtocol\Transaction\BranchRollbackRequestCodec::class,
        ];
        if (isset($mapping[$typeCode])) {
            $msgCodec = new $mapping[$typeCode]();
        }
        if ($msgCodec !== null) {
            return $msgCodec;
        }

        try {
            $msgCodec = $this->getMergeRequestMessageSeataCodec($typeCode);
        } catch (\Exception $exception) {
        }
        if ($msgCodec !== null) {
            return $msgCodec;
        }

        return $this->getMergeResponseMessageSeataCodec($typeCode);
    }

    protected function getMergeRequestMessageSeataCodec(int $typeCode)
    {
        $mapping = [
            MessageType::TYPE_GLOBAL_BEGIN => CodecProtocol\Transaction\GlobalBeginRequestCodec::class,
            MessageType::TYPE_GLOBAL_COMMIT => CodecProtocol\Transaction\GlobalCommitRequestCodec::class,
            MessageType::TYPE_GLOBAL_ROLLBACK => CodecProtocol\Transaction\GlobalRollbackRequestCodec::class,
            MessageType::TYPE_GLOBAL_STATUS => CodecProtocol\Transaction\GlobalStatusRequestCodec::class,
            MessageType::TYPE_GLOBAL_LOCK_QUERY => CodecProtocol\Transaction\GlobalLockQueryRequestCodec::class,
            MessageType::TYPE_BRANCH_REGISTER => CodecProtocol\Transaction\BranchRegisterRequestCodec::class,
            MessageType::TYPE_BRANCH_STATUS_REPORT => CodecProtocol\Transaction\BranchReportRequestCodec::class,
        ];
        if (isset($mapping[$typeCode])) {
            return new $mapping[$typeCode]();
        }
        throw new \InvalidArgumentException('Not support typeCode: ' + $typeCode);
    }

    protected function getMergeResponseMessageSeataCodec(int $typeCode)
    {
        $mapping = [
            MessageType::TYPE_GLOBAL_BEGIN_RESULT => CodecProtocol\Transaction\GlobalBeginResponseCodec::class,
            MessageType::TYPE_GLOBAL_COMMIT_RESULT => CodecProtocol\Transaction\GlobalCommitResponseCodec::class,
            MessageType::TYPE_GLOBAL_ROLLBACK_RESULT => CodecProtocol\Transaction\GlobalRollbackResponseCodec::class,
            MessageType::TYPE_GLOBAL_STATUS_RESULT => CodecProtocol\Transaction\GlobalStatusResponseCodec::class,
            MessageType::TYPE_GLOBAL_LOCK_QUERY_RESULT => CodecProtocol\Transaction\GlobalLockQueryResponseCodec::class,
            MessageType::TYPE_BRANCH_REGISTER_RESULT => CodecProtocol\Transaction\BranchRegisterResponseCodec::class,
            MessageType::TYPE_BRANCH_STATUS_REPORT_RESULT => CodecProtocol\Transaction\BranchReportResponseCodec::class,
            MessageType::TYPE_BRANCH_COMMIT_RESULT => CodecProtocol\Transaction\BranchCommitResponseCodec::class,
            MessageType::TYPE_BRANCH_ROLLBACK_RESULT => CodecProtocol\Transaction\BranchRollbackResponseCodec::class,
        ];
        if (isset($mapping[$typeCode])) {
            return new $mapping[$typeCode]();
        }
        throw new \InvalidArgumentException('Not support typeCode: ' + $typeCode);
    }

    protected function getMergeResponseInstanceByCode(int $typeCode)
    {
        $mapping = [
            MessageType::TYPE_GLOBAL_BEGIN_RESULT => Protocol\Transaction\GlobalBeginResponse::class,
            MessageType::TYPE_GLOBAL_COMMIT_RESULT => Protocol\Transaction\GlobalCommitResponse::class,
            MessageType::TYPE_GLOBAL_ROLLBACK_RESULT => Protocol\Transaction\GlobalRollbackResponse::class,
            MessageType::TYPE_GLOBAL_STATUS_RESULT => Protocol\Transaction\GlobalStatusResponse::class,
            MessageType::TYPE_GLOBAL_LOCK_QUERY_RESULT => Protocol\Transaction\GlobalLockQueryResponse::class,
            MessageType::TYPE_BRANCH_REGISTER_RESULT => Protocol\Transaction\BranchRegisterResponse::class,
            MessageType::TYPE_BRANCH_STATUS_REPORT_RESULT => Protocol\Transaction\BranchReportResponse::class,
            MessageType::TYPE_BRANCH_COMMIT_RESULT => Protocol\Transaction\BranchCommitResponse::class,
            MessageType::TYPE_BRANCH_ROLLBACK_RESULT => Protocol\Transaction\BranchRollbackResponse::class,
        ];
        if (isset($mapping[$typeCode])) {
            return new $mapping[$typeCode]();
        }
        throw new \InvalidArgumentException('Not support typeCode: ' + $typeCode);
    }
}
