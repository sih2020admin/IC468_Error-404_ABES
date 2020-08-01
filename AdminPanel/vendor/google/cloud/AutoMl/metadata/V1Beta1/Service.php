<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\AnnotationPayload::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\AnnotationSpec::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\ColumnSpec::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Dataset::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Image::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Model::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\ModelEvaluation::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Operations::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\TableSpec::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ade4c0a29676f6f676c652f636c6f75642f6175746f6d6c2f7631626574" .
            "61312f736572766963652e70726f746f121b676f6f676c652e636c6f7564" .
            "2e6175746f6d6c2e763162657461311a17676f6f676c652f6170692f636c" .
            "69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f62" .
            "65686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f" .
            "757263652e70726f746f1a34676f6f676c652f636c6f75642f6175746f6d" .
            "6c2f763162657461312f616e6e6f746174696f6e5f7061796c6f61642e70" .
            "726f746f1a31676f6f676c652f636c6f75642f6175746f6d6c2f76316265" .
            "7461312f616e6e6f746174696f6e5f737065632e70726f746f1a2d676f6f" .
            "676c652f636c6f75642f6175746f6d6c2f763162657461312f636f6c756d" .
            "6e5f737065632e70726f746f1a29676f6f676c652f636c6f75642f617574" .
            "6f6d6c2f763162657461312f646174617365742e70726f746f1a27676f6f" .
            "676c652f636c6f75642f6175746f6d6c2f763162657461312f696d616765" .
            "2e70726f746f1a24676f6f676c652f636c6f75642f6175746f6d6c2f7631" .
            "62657461312f696f2e70726f746f1a27676f6f676c652f636c6f75642f61" .
            "75746f6d6c2f763162657461312f6d6f64656c2e70726f746f1a32676f6f" .
            "676c652f636c6f75642f6175746f6d6c2f763162657461312f6d6f64656c" .
            "5f6576616c756174696f6e2e70726f746f1a2c676f6f676c652f636c6f75" .
            "642f6175746f6d6c2f763162657461312f6f7065726174696f6e732e7072" .
            "6f746f1a2c676f6f676c652f636c6f75642f6175746f6d6c2f7631626574" .
            "61312f7461626c655f737065632e70726f746f1a23676f6f676c652f6c6f" .
            "6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a20676f" .
            "6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f" .
            "228d010a14437265617465446174617365745265717565737412390a0670" .
            "6172656e741801200128094229e04102fa41230a216c6f636174696f6e73" .
            "2e676f6f676c65617069732e636f6d2f4c6f636174696f6e123a0a076461" .
            "746173657418022001280b32242e676f6f676c652e636c6f75642e617574" .
            "6f6d6c2e763162657461312e446174617365744203e0410222480a114765" .
            "74446174617365745265717565737412330a046e616d6518012001280942" .
            "25e04102fa411f0a1d6175746f6d6c2e676f6f676c65617069732e636f6d" .
            "2f446174617365742287010a134c69737444617461736574735265717565" .
            "737412390a06706172656e741801200128094229e04102fa41230a216c6f" .
            "636174696f6e732e676f6f676c65617069732e636f6d2f4c6f636174696f" .
            "6e120e0a0666696c74657218032001280912110a09706167655f73697a65" .
            "18042001280512120a0a706167655f746f6b656e18062001280922670a14" .
            "4c6973744461746173657473526573706f6e736512360a08646174617365" .
            "747318012003280b32242e676f6f676c652e636c6f75642e6175746f6d6c" .
            "2e763162657461312e4461746173657412170a0f6e6578745f706167655f" .
            "746f6b656e1802200128092283010a145570646174654461746173657452" .
            "657175657374123a0a076461746173657418012001280b32242e676f6f67" .
            "6c652e636c6f75642e6175746f6d6c2e763162657461312e446174617365" .
            "744203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e" .
            "676f6f676c652e70726f746f6275662e4669656c644d61736b224b0a1444" .
            "656c657465446174617365745265717565737412330a046e616d65180120" .
            "0128094225e04102fa411f0a1d6175746f6d6c2e676f6f676c6561706973" .
            "2e636f6d2f44617461736574228d010a11496d706f727444617461526571" .
            "7565737412330a046e616d651801200128094225e04102fa411f0a1d6175" .
            "746f6d6c2e676f6f676c65617069732e636f6d2f4461746173657412430a" .
            "0c696e7075745f636f6e66696718032001280b32282e676f6f676c652e63" .
            "6c6f75642e6175746f6d6c2e763162657461312e496e707574436f6e6669" .
            "674203e04102228f010a114578706f727444617461526571756573741233" .
            "0a046e616d651801200128094225e04102fa411f0a1d6175746f6d6c2e67" .
            "6f6f676c65617069732e636f6d2f4461746173657412450a0d6f75747075" .
            "745f636f6e66696718032001280b32292e676f6f676c652e636c6f75642e" .
            "6175746f6d6c2e763162657461312e4f7574707574436f6e6669674203e0" .
            "410222560a18476574416e6e6f746174696f6e5370656352657175657374" .
            "123a0a046e616d65180120012809422ce04102fa41260a246175746f6d6c" .
            "2e676f6f676c65617069732e636f6d2f416e6e6f746174696f6e53706563" .
            "227c0a134765745461626c65537065635265717565737412350a046e616d" .
            "651801200128094227e04102fa41210a1f6175746f6d6c2e676f6f676c65" .
            "617069732e636f6d2f5461626c6553706563122e0a0a6669656c645f6d61" .
            "736b18022001280b321a2e676f6f676c652e70726f746f6275662e466965" .
            "6c644d61736b22b5010a154c6973745461626c6553706563735265717565" .
            "737412350a06706172656e741801200128094225e04102fa411f0a1d6175" .
            "746f6d6c2e676f6f676c65617069732e636f6d2f44617461736574122e0a" .
            "0a6669656c645f6d61736b18022001280b321a2e676f6f676c652e70726f" .
            "746f6275662e4669656c644d61736b120e0a0666696c7465721803200128" .
            "0912110a09706167655f73697a6518042001280512120a0a706167655f74" .
            "6f6b656e180620012809226e0a164c6973745461626c6553706563735265" .
            "73706f6e7365123b0a0b7461626c655f737065637318012003280b32262e" .
            "676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e5461" .
            "626c655370656312170a0f6e6578745f706167655f746f6b656e18022001" .
            "2809228a010a165570646174655461626c65537065635265717565737412" .
            "3f0a0a7461626c655f7370656318012001280b32262e676f6f676c652e63" .
            "6c6f75642e6175746f6d6c2e763162657461312e5461626c655370656342" .
            "03e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f" .
            "6f676c652e70726f746f6275662e4669656c644d61736b227e0a14476574" .
            "436f6c756d6e537065635265717565737412360a046e616d651801200128" .
            "094228e04102fa41220a206175746f6d6c2e676f6f676c65617069732e63" .
            "6f6d2f436f6c756d6e53706563122e0a0a6669656c645f6d61736b180220" .
            "01280b321a2e676f6f676c652e70726f746f6275662e4669656c644d6173" .
            "6b22b8010a164c697374436f6c756d6e5370656373526571756573741237" .
            "0a06706172656e741801200128094227e04102fa41210a1f6175746f6d6c" .
            "2e676f6f676c65617069732e636f6d2f5461626c6553706563122e0a0a66" .
            "69656c645f6d61736b18022001280b321a2e676f6f676c652e70726f746f" .
            "6275662e4669656c644d61736b120e0a0666696c74657218032001280912" .
            "110a09706167655f73697a6518042001280512120a0a706167655f746f6b" .
            "656e18062001280922710a174c697374436f6c756d6e5370656373526573" .
            "706f6e7365123d0a0c636f6c756d6e5f737065637318012003280b32272e" .
            "676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e436f" .
            "6c756d6e5370656312170a0f6e6578745f706167655f746f6b656e180220" .
            "012809228d010a17557064617465436f6c756d6e53706563526571756573" .
            "7412410a0b636f6c756d6e5f7370656318012001280b32272e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e436f6c756d6e53" .
            "7065634203e04102122f0a0b7570646174655f6d61736b18022001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e4669656c644d61736b228701" .
            "0a124372656174654d6f64656c5265717565737412390a06706172656e74" .
            "1801200128094229e04102fa41230a216c6f636174696f6e732e676f6f67" .
            "6c65617069732e636f6d2f4c6f636174696f6e12360a056d6f64656c1804" .
            "2001280b32222e676f6f676c652e636c6f75642e6175746f6d6c2e763162" .
            "657461312e4d6f64656c4203e0410222440a0f4765744d6f64656c526571" .
            "7565737412310a046e616d651801200128094223e04102fa411d0a1b6175" .
            "746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c2285010a11" .
            "4c6973744d6f64656c735265717565737412390a06706172656e74180120" .
            "0128094229e04102fa41230a216c6f636174696f6e732e676f6f676c6561" .
            "7069732e636f6d2f4c6f636174696f6e120e0a0666696c74657218032001" .
            "280912110a09706167655f73697a6518042001280512120a0a706167655f" .
            "746f6b656e18062001280922600a124c6973744d6f64656c73526573706f" .
            "6e736512310a056d6f64656c18012003280b32222e676f6f676c652e636c" .
            "6f75642e6175746f6d6c2e763162657461312e4d6f64656c12170a0f6e65" .
            "78745f706167655f746f6b656e18022001280922470a1244656c6574654d" .
            "6f64656c5265717565737412310a046e616d651801200128094223e04102" .
            "fa411d0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64" .
            "656c22ef020a124465706c6f794d6f64656c526571756573741284010a30" .
            "696d6167655f6f626a6563745f646574656374696f6e5f6d6f64656c5f64" .
            "65706c6f796d656e745f6d6574616461746118022001280b32482e676f6f" .
            "676c652e636c6f75642e6175746f6d6c2e763162657461312e496d616765" .
            "4f626a656374446574656374696f6e4d6f64656c4465706c6f796d656e74" .
            "4d6574616461746148001281010a2e696d6167655f636c61737369666963" .
            "6174696f6e5f6d6f64656c5f6465706c6f796d656e745f6d657461646174" .
            "6118042001280b32472e676f6f676c652e636c6f75642e6175746f6d6c2e" .
            "763162657461312e496d616765436c617373696669636174696f6e4d6f64" .
            "656c4465706c6f796d656e744d65746164617461480012310a046e616d65" .
            "1801200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c6561" .
            "7069732e636f6d2f4d6f64656c421b0a196d6f64656c5f6465706c6f796d" .
            "656e745f6d6574616461746122490a14556e6465706c6f794d6f64656c52" .
            "65717565737412310a046e616d651801200128094223e04102fa411d0a1b" .
            "6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c229901" .
            "0a124578706f72744d6f64656c5265717565737412310a046e616d651801" .
            "200128094223e04102fa411d0a1b6175746f6d6c2e676f6f676c65617069" .
            "732e636f6d2f4d6f64656c12500a0d6f75747075745f636f6e6669671803" .
            "2001280b32342e676f6f676c652e636c6f75642e6175746f6d6c2e763162" .
            "657461312e4d6f64656c4578706f72744f7574707574436f6e6669674203" .
            "e0410222b1010a1e4578706f72744576616c75617465644578616d706c65" .
            "735265717565737412310a046e616d651801200128094223e04102fa411d" .
            "0a1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c12" .
            "5c0a0d6f75747075745f636f6e66696718032001280b32402e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e4578706f727445" .
            "76616c75617465644578616d706c65734f7574707574436f6e6669674203" .
            "e0410222580a194765744d6f64656c4576616c756174696f6e5265717565" .
            "7374123b0a046e616d65180120012809422de04102fa41270a256175746f" .
            "6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c4576616c756174" .
            "696f6e2289010a1b4c6973744d6f64656c4576616c756174696f6e735265" .
            "717565737412330a06706172656e741801200128094223e04102fa411d0a" .
            "1b6175746f6d6c2e676f6f676c65617069732e636f6d2f4d6f64656c120e" .
            "0a0666696c74657218032001280912110a09706167655f73697a65180420" .
            "01280512120a0a706167655f746f6b656e180620012809227f0a1c4c6973" .
            "744d6f64656c4576616c756174696f6e73526573706f6e736512460a106d" .
            "6f64656c5f6576616c756174696f6e18012003280b322c2e676f6f676c65" .
            "2e636c6f75642e6175746f6d6c2e763162657461312e4d6f64656c457661" .
            "6c756174696f6e12170a0f6e6578745f706167655f746f6b656e18022001" .
            "280932ed270a064175746f4d6c12bd010a0d437265617465446174617365" .
            "7412312e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461" .
            "312e43726561746544617461736574526571756573741a242e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e44617461736574" .
            "225382d3e493023c22312f763162657461312f7b706172656e743d70726f" .
            "6a656374732f2a2f6c6f636174696f6e732f2a7d2f64617461736574733a" .
            "0764617461736574da410e706172656e742c6461746173657412a4010a0a" .
            "47657444617461736574122e2e676f6f676c652e636c6f75642e6175746f" .
            "6d6c2e763162657461312e47657444617461736574526571756573741a24" .
            "2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e44" .
            "617461736574224082d3e493023312312f763162657461312f7b6e616d65" .
            "3d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f646174617365" .
            "74732f2a7dda41046e616d6512b7010a0c4c697374446174617365747312" .
            "302e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e" .
            "4c6973744461746173657473526571756573741a312e676f6f676c652e63" .
            "6c6f75642e6175746f6d6c2e763162657461312e4c697374446174617365" .
            "7473526573706f6e7365224282d3e493023312312f763162657461312f7b" .
            "706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d" .
            "2f6461746173657473da4106706172656e7412be010a0d55706461746544" .
            "61746173657412312e676f6f676c652e636c6f75642e6175746f6d6c2e76" .
            "3162657461312e55706461746544617461736574526571756573741a242e" .
            "676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4461" .
            "7461736574225482d3e493024432392f763162657461312f7b6461746173" .
            "65742e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a" .
            "2f64617461736574732f2a7d3a0764617461736574da4107646174617365" .
            "7412d0010a0d44656c6574654461746173657412312e676f6f676c652e63" .
            "6c6f75642e6175746f6d6c2e763162657461312e44656c65746544617461" .
            "736574526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e" .
            "672e4f7065726174696f6e226d82d3e49302332a312f763162657461312f" .
            "7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f64" .
            "617461736574732f2a7dda41046e616d65ca412a0a15676f6f676c652e70" .
            "726f746f6275662e456d70747912114f7065726174696f6e4d6574616461" .
            "746112e6010a0a496d706f727444617461122e2e676f6f676c652e636c6f" .
            "75642e6175746f6d6c2e763162657461312e496d706f7274446174615265" .
            "71756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065" .
            "726174696f6e22880182d3e4930241223c2f763162657461312f7b6e616d" .
            "653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6461746173" .
            "6574732f2a7d3a696d706f7274446174613a012ada41116e616d652c696e" .
            "7075745f636f6e666967ca412a0a15676f6f676c652e70726f746f627566" .
            "2e456d70747912114f7065726174696f6e4d6574616461746112e7010a0a" .
            "4578706f727444617461122e2e676f6f676c652e636c6f75642e6175746f" .
            "6d6c2e763162657461312e4578706f727444617461526571756573741a1d" .
            "2e676f6f676c652e6c6f6e6772756e6e696e672e4f7065726174696f6e22" .
            "890182d3e4930241223c2f763162657461312f7b6e616d653d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7d3a" .
            "6578706f7274446174613a012ada41126e616d652c6f75747075745f636f" .
            "6e666967ca412a0a15676f6f676c652e70726f746f6275662e456d707479" .
            "12114f7065726174696f6e4d6574616461746112cb010a11476574416e6e" .
            "6f746174696f6e5370656312352e676f6f676c652e636c6f75642e617574" .
            "6f6d6c2e763162657461312e476574416e6e6f746174696f6e5370656352" .
            "6571756573741a2b2e676f6f676c652e636c6f75642e6175746f6d6c2e76" .
            "3162657461312e416e6e6f746174696f6e53706563225282d3e493024512" .
            "432f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f63" .
            "6174696f6e732f2a2f64617461736574732f2a2f616e6e6f746174696f6e" .
            "53706563732f2a7dda41046e616d6512b7010a0c4765745461626c655370" .
            "656312302e676f6f676c652e636c6f75642e6175746f6d6c2e7631626574" .
            "61312e4765745461626c6553706563526571756573741a262e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e5461626c655370" .
            "6563224d82d3e4930240123e2f763162657461312f7b6e616d653d70726f" .
            "6a656374732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a" .
            "2f7461626c6553706563732f2a7dda41046e616d6512ca010a0e4c697374" .
            "5461626c65537065637312322e676f6f676c652e636c6f75642e6175746f" .
            "6d6c2e763162657461312e4c6973745461626c6553706563735265717565" .
            "73741a332e676f6f676c652e636c6f75642e6175746f6d6c2e7631626574" .
            "61312e4c6973745461626c655370656373526573706f6e7365224f82d3e4" .
            "930240123e2f763162657461312f7b706172656e743d70726f6a65637473" .
            "2f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a7d2f746162" .
            "6c655370656373da4106706172656e7412da010a0f557064617465546162" .
            "6c655370656312332e676f6f676c652e636c6f75642e6175746f6d6c2e76" .
            "3162657461312e5570646174655461626c6553706563526571756573741a" .
            "262e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e" .
            "5461626c6553706563226a82d3e493025732492f763162657461312f7b74" .
            "61626c655f737065632e6e616d653d70726f6a656374732f2a2f6c6f6361" .
            "74696f6e732f2a2f64617461736574732f2a2f7461626c6553706563732f" .
            "2a7d3a0a7461626c655f73706563da410a7461626c655f7370656312c801" .
            "0a0d476574436f6c756d6e5370656312312e676f6f676c652e636c6f7564" .
            "2e6175746f6d6c2e763162657461312e476574436f6c756d6e5370656352" .
            "6571756573741a272e676f6f676c652e636c6f75642e6175746f6d6c2e76" .
            "3162657461312e436f6c756d6e53706563225b82d3e493024e124c2f7631" .
            "62657461312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f" .
            "6e732f2a2f64617461736574732f2a2f7461626c6553706563732f2a2f63" .
            "6f6c756d6e53706563732f2a7dda41046e616d6512db010a0f4c69737443" .
            "6f6c756d6e537065637312332e676f6f676c652e636c6f75642e6175746f" .
            "6d6c2e763162657461312e4c697374436f6c756d6e537065637352657175" .
            "6573741a342e676f6f676c652e636c6f75642e6175746f6d6c2e76316265" .
            "7461312e4c697374436f6c756d6e5370656373526573706f6e7365225d82" .
            "d3e493024e124c2f763162657461312f7b706172656e743d70726f6a6563" .
            "74732f2a2f6c6f636174696f6e732f2a2f64617461736574732f2a2f7461" .
            "626c6553706563732f2a7d2f636f6c756d6e5370656373da410670617265" .
            "6e7412ee010a10557064617465436f6c756d6e5370656312342e676f6f67" .
            "6c652e636c6f75642e6175746f6d6c2e763162657461312e557064617465" .
            "436f6c756d6e53706563526571756573741a272e676f6f676c652e636c6f" .
            "75642e6175746f6d6c2e763162657461312e436f6c756d6e53706563227b" .
            "82d3e493026732582f763162657461312f7b636f6c756d6e5f737065632e" .
            "6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6461" .
            "7461736574732f2a2f7461626c6553706563732f2a2f636f6c756d6e5370" .
            "6563732f2a7d3a0b636f6c756d6e5f73706563da410b636f6c756d6e5f73" .
            "70656312c9010a0b4372656174654d6f64656c122f2e676f6f676c652e63" .
            "6c6f75642e6175746f6d6c2e763162657461312e4372656174654d6f6465" .
            "6c526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e" .
            "4f7065726174696f6e226a82d3e4930238222f2f763162657461312f7b70" .
            "6172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f" .
            "6d6f64656c733a056d6f64656cda410c706172656e742c6d6f64656cca41" .
            "1a0a054d6f64656c12114f7065726174696f6e4d65746164617461129c01" .
            "0a084765744d6f64656c122c2e676f6f676c652e636c6f75642e6175746f" .
            "6d6c2e763162657461312e4765744d6f64656c526571756573741a222e67" .
            "6f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f64" .
            "656c223e82d3e4930231122f2f763162657461312f7b6e616d653d70726f" .
            "6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7dda" .
            "41046e616d6512af010a0a4c6973744d6f64656c73122e2e676f6f676c65" .
            "2e636c6f75642e6175746f6d6c2e763162657461312e4c6973744d6f6465" .
            "6c73526571756573741a2f2e676f6f676c652e636c6f75642e6175746f6d" .
            "6c2e763162657461312e4c6973744d6f64656c73526573706f6e73652240" .
            "82d3e4930231122f2f763162657461312f7b706172656e743d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a7d2f6d6f64656c73da41067061" .
            "72656e7412ca010a0b44656c6574654d6f64656c122f2e676f6f676c652e" .
            "636c6f75642e6175746f6d6c2e763162657461312e44656c6574654d6f64" .
            "656c526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e67" .
            "2e4f7065726174696f6e226b82d3e49302312a2f2f763162657461312f7b" .
            "6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f" .
            "64656c732f2a7dda41046e616d65ca412a0a15676f6f676c652e70726f74" .
            "6f6275662e456d70747912114f7065726174696f6e4d6574616461746112" .
            "d4010a0b4465706c6f794d6f64656c122f2e676f6f676c652e636c6f7564" .
            "2e6175746f6d6c2e763162657461312e4465706c6f794d6f64656c526571" .
            "756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572" .
            "6174696f6e227582d3e493023b22362f763162657461312f7b6e616d653d" .
            "70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f" .
            "2a7d3a6465706c6f793a012ada41046e616d65ca412a0a15676f6f676c65" .
            "2e70726f746f6275662e456d70747912114f7065726174696f6e4d657461" .
            "6461746112da010a0d556e6465706c6f794d6f64656c12312e676f6f676c" .
            "652e636c6f75642e6175746f6d6c2e763162657461312e556e6465706c6f" .
            "794d6f64656c526571756573741a1d2e676f6f676c652e6c6f6e6772756e" .
            "6e696e672e4f7065726174696f6e227782d3e493023d22382f7631626574" .
            "61312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f" .
            "2a2f6d6f64656c732f2a7d3a756e6465706c6f793a012ada41046e616d65" .
            "ca412a0a15676f6f676c652e70726f746f6275662e456d70747912114f70" .
            "65726174696f6e4d6574616461746112e3010a0b4578706f72744d6f6465" .
            "6c122f2e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461" .
            "312e4578706f72744d6f64656c526571756573741a1d2e676f6f676c652e" .
            "6c6f6e6772756e6e696e672e4f7065726174696f6e22830182d3e493023b" .
            "22362f763162657461312f7b6e616d653d70726f6a656374732f2a2f6c6f" .
            "636174696f6e732f2a2f6d6f64656c732f2a7d3a6578706f72743a012ada" .
            "41126e616d652c6f75747075745f636f6e666967ca412a0a15676f6f676c" .
            "652e70726f746f6275662e456d70747912114f7065726174696f6e4d6574" .
            "6164617461128c020a174578706f72744576616c75617465644578616d70" .
            "6c6573123b2e676f6f676c652e636c6f75642e6175746f6d6c2e76316265" .
            "7461312e4578706f72744576616c75617465644578616d706c6573526571" .
            "756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572" .
            "6174696f6e22940182d3e493024c22472f763162657461312f7b6e616d65" .
            "3d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d6f64656c73" .
            "2f2a7d3a6578706f72744576616c75617465644578616d706c65733a012a" .
            "da41126e616d652c6f75747075745f636f6e666967ca412a0a15676f6f67" .
            "6c652e70726f746f6275662e456d70747912114f7065726174696f6e4d65" .
            "74616461746112cd010a124765744d6f64656c4576616c756174696f6e12" .
            "362e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e" .
            "4765744d6f64656c4576616c756174696f6e526571756573741a2c2e676f" .
            "6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4d6f6465" .
            "6c4576616c756174696f6e225182d3e493024412422f763162657461312f" .
            "7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f6d" .
            "6f64656c732f2a2f6d6f64656c4576616c756174696f6e732f2a7dda4104" .
            "6e616d6512e0010a144c6973744d6f64656c4576616c756174696f6e7312" .
            "382e676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e" .
            "4c6973744d6f64656c4576616c756174696f6e73526571756573741a392e" .
            "676f6f676c652e636c6f75642e6175746f6d6c2e763162657461312e4c69" .
            "73744d6f64656c4576616c756174696f6e73526573706f6e7365225382d3" .
            "e493024412422f763162657461312f7b706172656e743d70726f6a656374" .
            "732f2a2f6c6f636174696f6e732f2a2f6d6f64656c732f2a7d2f6d6f6465" .
            "6c4576616c756174696f6e73da4106706172656e741a49ca41156175746f" .
            "6d6c2e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777" .
            "772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c" .
            "6174666f726d42b2010a1f636f6d2e676f6f676c652e636c6f75642e6175" .
            "746f6d6c2e76316265746131420b4175746f4d6c50726f746f50015a4167" .
            "6f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f67" .
            "6c65617069732f636c6f75642f6175746f6d6c2f763162657461313b6175" .
            "746f6d6cca021b476f6f676c655c436c6f75645c4175746f4d6c5c563162" .
            "65746131ea021e476f6f676c653a3a436c6f75643a3a4175746f4d4c3a3a" .
            "56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
