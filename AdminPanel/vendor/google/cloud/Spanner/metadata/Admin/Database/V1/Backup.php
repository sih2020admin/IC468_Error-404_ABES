<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace GPBMetadata\Google\Spanner\Admin\Database\V1;

class Backup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Common::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9e110a2d676f6f676c652f7370616e6e65722f61646d696e2f64617461" .
            "626173652f76312f6261636b75702e70726f746f1220676f6f676c652e73" .
            "70616e6e65722e61646d696e2e64617461626173652e76311a19676f6f67" .
            "6c652f6170692f7265736f757263652e70726f746f1a23676f6f676c652f" .
            "6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a20" .
            "676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f" .
            "746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e" .
            "70726f746f1a2d676f6f676c652f7370616e6e65722f61646d696e2f6461" .
            "7461626173652f76312f636f6d6d6f6e2e70726f746f1a1c676f6f676c65" .
            "2f6170692f616e6e6f746174696f6e732e70726f746f22cd030a06426163" .
            "6b757012360a0864617461626173651802200128094224fa41210a1f7370" .
            "616e6e65722e676f6f676c65617069732e636f6d2f446174616261736512" .
            "2f0a0b6578706972655f74696d6518032001280b321a2e676f6f676c652e" .
            "70726f746f6275662e54696d657374616d70120c0a046e616d6518012001" .
            "280912340a0b6372656174655f74696d6518042001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d704203e0410312170a0a" .
            "73697a655f62797465731805200128034203e0410312420a057374617465" .
            "18062001280e322e2e676f6f676c652e7370616e6e65722e61646d696e2e" .
            "64617461626173652e76312e4261636b75702e53746174654203e0410312" .
            "220a157265666572656e63696e675f646174616261736573180720032809" .
            "4203e0410322370a05537461746512150a1153544154455f554e53504543" .
            "49464945441000120c0a084352454154494e47100112090a055245414459" .
            "10023a5cea41590a1d7370616e6e65722e676f6f676c65617069732e636f" .
            "6d2f4261636b7570123870726f6a656374732f7b70726f6a6563747d2f69" .
            "6e7374616e6365732f7b696e7374616e63657d2f6261636b7570732f7b62" .
            "61636b75707d22a5010a134372656174654261636b757052657175657374" .
            "12370a06706172656e741801200128094227e04102fa41210a1f7370616e" .
            "6e65722e676f6f676c65617069732e636f6d2f496e7374616e636512160a" .
            "096261636b75705f69641802200128094203e04102123d0a066261636b75" .
            "7018032001280b32282e676f6f676c652e7370616e6e65722e61646d696e" .
            "2e64617461626173652e76312e4261636b75704203e0410222ae010a1443" .
            "72656174654261636b75704d65746164617461120c0a046e616d65180120" .
            "01280912100a08646174616261736518022001280912450a0870726f6772" .
            "65737318032001280b32332e676f6f676c652e7370616e6e65722e61646d" .
            "696e2e64617461626173652e76312e4f7065726174696f6e50726f677265" .
            "7373122f0a0b63616e63656c5f74696d6518042001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d70228a010a1355706461" .
            "74654261636b757052657175657374123d0a066261636b75701801200128" .
            "0b32282e676f6f676c652e7370616e6e65722e61646d696e2e6461746162" .
            "6173652e76312e4261636b75704203e0410212340a0b7570646174655f6d" .
            "61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669" .
            "656c644d61736b4203e0410222470a104765744261636b75705265717565" .
            "737412330a046e616d651801200128094225e04102fa411f0a1d7370616e" .
            "6e65722e676f6f676c65617069732e636f6d2f4261636b7570224a0a1344" .
            "656c6574654261636b75705265717565737412330a046e616d6518012001" .
            "28094225e04102fa411f0a1d7370616e6e65722e676f6f676c6561706973" .
            "2e636f6d2f4261636b75702284010a124c6973744261636b757073526571" .
            "7565737412370a06706172656e741801200128094227e04102fa41210a1f" .
            "7370616e6e65722e676f6f676c65617069732e636f6d2f496e7374616e63" .
            "65120e0a0666696c74657218022001280912110a09706167655f73697a65" .
            "18032001280512120a0a706167655f746f6b656e18042001280922690a13" .
            "4c6973744261636b757073526573706f6e736512390a076261636b757073" .
            "18012003280b32282e676f6f676c652e7370616e6e65722e61646d696e2e" .
            "64617461626173652e76312e4261636b757012170a0f6e6578745f706167" .
            "655f746f6b656e180220012809228d010a1b4c6973744261636b75704f70" .
            "65726174696f6e735265717565737412370a06706172656e741801200128" .
            "094227e04102fa41210a1f7370616e6e65722e676f6f676c65617069732e" .
            "636f6d2f496e7374616e6365120e0a0666696c7465721802200128091211" .
            "0a09706167655f73697a6518032001280512120a0a706167655f746f6b65" .
            "6e180420012809226a0a1c4c6973744261636b75704f7065726174696f6e" .
            "73526573706f6e736512310a0a6f7065726174696f6e7318012003280b32" .
            "1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e" .
            "12170a0f6e6578745f706167655f746f6b656e18022001280922660a0a42" .
            "61636b7570496e666f120e0a066261636b7570180120012809122f0a0b63" .
            "72656174655f74696d6518022001280b321a2e676f6f676c652e70726f74" .
            "6f6275662e54696d657374616d7012170a0f736f757263655f6461746162" .
            "61736518032001280942d1010a24636f6d2e676f6f676c652e7370616e6e" .
            "65722e61646d696e2e64617461626173652e7631420b4261636b75705072" .
            "6f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e7072" .
            "6f746f2f676f6f676c65617069732f7370616e6e65722f61646d696e2f64" .
            "617461626173652f76313b6461746162617365aa0226476f6f676c652e43" .
            "6c6f75642e5370616e6e65722e41646d696e2e44617461626173652e5631" .
            "ca0226476f6f676c655c436c6f75645c5370616e6e65725c41646d696e5c" .
            "44617461626173655c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
