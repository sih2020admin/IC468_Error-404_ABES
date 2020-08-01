<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event_service.proto

namespace GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1;

class UserEventService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Import::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEvent::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab9170a42676f6f676c652f636c6f75642f7265636f6d6d656e64617469" .
            "6f6e656e67696e652f763162657461312f757365725f6576656e745f7365" .
            "72766963652e70726f746f1229676f6f676c652e636c6f75642e7265636f" .
            "6d6d656e646174696f6e656e67696e652e763162657461311a1f676f6f67" .
            "6c652f6170692f6669656c645f6265686176696f722e70726f746f1a1967" .
            "6f6f676c652f6170692f68747470626f64792e70726f746f1a36676f6f67" .
            "6c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f" .
            "763162657461312f696d706f72742e70726f746f1a3a676f6f676c652f63" .
            "6c6f75642f7265636f6d6d656e646174696f6e656e67696e652f76316265" .
            "7461312f757365725f6576656e742e70726f746f1a23676f6f676c652f6c" .
            "6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a1f67" .
            "6f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f" .
            "1a16676f6f676c652f747970652f646174652e70726f746f1a17676f6f67" .
            "6c652f6170692f636c69656e742e70726f746f22560a1650757267655573" .
            "65724576656e74735265717565737412130a06706172656e741801200128" .
            "094203e0410212130a0666696c7465721802200128094203e0410212120a" .
            "05666f7263651803200128084203e0410122620a17507572676555736572" .
            "4576656e74734d6574616461746112160a0e6f7065726174696f6e5f6e61" .
            "6d65180120012809122f0a0b6372656174655f74696d6518022001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d70228801" .
            "0a175075726765557365724576656e7473526573706f6e7365121b0a1370" .
            "75726765645f6576656e74735f636f756e7418012001280312500a127573" .
            "65725f6576656e74735f73616d706c6518022003280b32342e676f6f676c" .
            "652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e76" .
            "3162657461312e557365724576656e74227b0a1557726974655573657245" .
            "76656e745265717565737412130a06706172656e741801200128094203e0" .
            "4102124d0a0a757365725f6576656e7418022001280b32342e676f6f676c" .
            "652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e76" .
            "3162657461312e557365724576656e744203e04102226b0a17436f6c6c65" .
            "6374557365724576656e745265717565737412130a06706172656e741801" .
            "200128094203e0410212170a0a757365725f6576656e7418022001280942" .
            "03e0410212100a037572691803200128094203e0410112100a0365747318" .
            "04200128034203e0410122720a154c697374557365724576656e74735265" .
            "717565737412130a06706172656e741801200128094203e0410212160a09" .
            "706167655f73697a651802200128054203e0410112170a0a706167655f74" .
            "6f6b656e1803200128094203e0410112130a0666696c7465721804200128" .
            "094203e04101227c0a164c697374557365724576656e7473526573706f6e" .
            "736512490a0b757365725f6576656e747318012003280b32342e676f6f67" .
            "6c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e" .
            "763162657461312e557365724576656e7412170a0f6e6578745f70616765" .
            "5f746f6b656e18022001280932d30b0a10557365724576656e7453657276" .
            "69636512f0010a0e5772697465557365724576656e7412402e676f6f676c" .
            "652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e76" .
            "3162657461312e5772697465557365724576656e74526571756573741a34" .
            "2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e" .
            "67696e652e763162657461312e557365724576656e74226682d3e4930260" .
            "22522f763162657461312f7b706172656e743d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a2f636174616c6f67732f2a2f6576656e745374" .
            "6f7265732f2a7d2f757365724576656e74733a77726974653a0a75736572" .
            "5f6576656e7412ca010a10436f6c6c656374557365724576656e7412422e" .
            "676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67" .
            "696e652e763162657461312e436f6c6c656374557365724576656e745265" .
            "71756573741a142e676f6f676c652e6170692e48747470426f6479225c82" .
            "d3e493025612542f763162657461312f7b706172656e743d70726f6a6563" .
            "74732f2a2f6c6f636174696f6e732f2a2f636174616c6f67732f2a2f6576" .
            "656e7453746f7265732f2a7d2f757365724576656e74733a636f6c6c6563" .
            "7412eb010a0e4c697374557365724576656e747312402e676f6f676c652e" .
            "636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162" .
            "657461312e4c697374557365724576656e7473526571756573741a412e67" .
            "6f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e6769" .
            "6e652e763162657461312e4c697374557365724576656e7473526573706f" .
            "6e7365225482d3e493024e124c2f763162657461312f7b706172656e743d" .
            "70726f6a656374732f2a2f6c6f636174696f6e732f2a2f636174616c6f67" .
            "732f2a2f6576656e7453746f7265732f2a7d2f757365724576656e747312" .
            "dd020a0f5075726765557365724576656e747312412e676f6f676c652e63" .
            "6c6f75642e7265636f6d6d656e646174696f6e656e67696e652e76316265" .
            "7461312e5075726765557365724576656e7473526571756573741a1d2e67" .
            "6f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22e701" .
            "82d3e493025722522f763162657461312f7b706172656e743d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f636174616c6f67732f2a2f65" .
            "76656e7453746f7265732f2a7d2f757365724576656e74733a7075726765" .
            "3a012aca4186010a41676f6f676c652e636c6f75642e7265636f6d6d656e" .
            "646174696f6e656e67696e652e763162657461312e507572676555736572" .
            "4576656e7473526573706f6e73651241676f6f676c652e636c6f75642e72" .
            "65636f6d6d656e646174696f6e656e67696e652e763162657461312e5075" .
            "726765557365724576656e74734d6574616461746112d7020a10496d706f" .
            "7274557365724576656e747312422e676f6f676c652e636c6f75642e7265" .
            "636f6d6d656e646174696f6e656e67696e652e763162657461312e496d70" .
            "6f7274557365724576656e7473526571756573741a1d2e676f6f676c652e" .
            "6c6f6e6772756e6e696e672e4f7065726174696f6e22df0182d3e4930258" .
            "22532f763162657461312f7b706172656e743d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a2f636174616c6f67732f2a2f6576656e745374" .
            "6f7265732f2a7d2f757365724576656e74733a696d706f72743a012aca41" .
            "7e0a42676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e" .
            "656e67696e652e763162657461312e496d706f7274557365724576656e74" .
            "73526573706f6e73651238676f6f676c652e636c6f75642e7265636f6d6d" .
            "656e646174696f6e656e67696e652e763162657461312e496d706f72744d" .
            "657461646174611a57ca41237265636f6d6d656e646174696f6e656e6769" .
            "6e652e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777" .
            "772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c" .
            "6174666f726d429f020a2d636f6d2e676f6f676c652e636c6f75642e7265" .
            "636f6d6d656e646174696f6e656e67696e652e7631626574613150015a5d" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f636c6f75642f7265636f6d6d656e646174696f6e656e" .
            "67696e652f763162657461313b7265636f6d6d656e646174696f6e656e67" .
            "696e65a202055245434149aa0229476f6f676c652e436c6f75642e526563" .
            "6f6d6d656e646174696f6e456e67696e652e56314265746131ca0229476f" .
            "6f676c655c436c6f75645c5265636f6d6d656e646174696f6e456e67696e" .
            "655c56316265746131ea022c476f6f676c653a3a436c6f75643a3a526563" .
            "6f6d6d656e646174696f6e456e67696e653a3a5631626574613162067072" .
            "6f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
