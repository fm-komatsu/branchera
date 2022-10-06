<?php

class FlpConnection {


    /**
     * FLPフロントサイトへのURL取得
     */
    public static function createUrl() {
        $basic = "";
        if (strlen(BASIC_USER) > 0 && strlen(BASIC_PASSWORD) > 0) {
            $basic = BASIC_USER . ":" . BASIC_PASSWORD . "@";
        }

        return FLP_HTTP . $basic. FLP_DOMAIN;
    }

    /**
     * セッション確認処理(FLPフロントへのアクセス)
     */
    public function ssoCheck($params) {
        $url = self::createUrl() . FLP_ExternalUrlForAuth. "?" . http_build_query($params);
        //結果はflp_redirect.phpへ
       header('Location: '.$url);
       exit;
//        echo '
//<script type="text/javascript" language="javascript">
//<!--
//    location.replace("' . $url . '");
//// -->
//</script>
//';
    }

    /**
     * SSO用会員情報検証・取得API
     * @param $refreshToken リフレッシュトークン
     * @return アクセス結果|XML形式ではない場合null
     */
    public function ssoApiVerificationAndGetMemberInfo($refreshToken) {
        $param = array(
                FLP_COMPANY_CD_KEY      => FLP_COMPANY_CD_VAL,
                FLP_API_KEY_KEY         => FLP_API_KEY_VAL,
                FLP_REFRESH_TOKEN_KEY   => $refreshToken,
                FLP_MEMBER_INFO_FLG_KEY => FLP_MEMBER_INFO_FLG_VAL,
        );

        $url = FLP_API_URL . "/v1/sso_verification?" . http_build_query($param);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //文字列で取得
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //クライアント証明書を使うのでOFF
        curl_setopt($ch, CURLOPT_SSLCERT, FLP_API_CERTIFICATE_DIR . FLP_API_CERTIFICATE_FILE); //使用証明書パス
        $result = curl_exec($ch);
        curl_close($ch);

        $result = simplexml_load_string($result);
        if ($result === false) {
            return null;
        }
        return $result;
    }


}
?>
