<?php

class FlpConnectionPoint
{
	/**
	 * 読んだよポイント
	 * @param $refreshToken リフレッシュトークン
	 * @return アクセス結果|XML形式ではない場合null
	 */
	public function hstMngPntGrantGetStatus($identification_id, $member_card_no)
	{
		$url = FLP_API_URL . "/v1/hst_mng_pnt_grant_get_status";
		$xml = "<request>"
			. "<company_cd>" . FLP_COMPANY_CD_VAL . "</company_cd>"
			. "<api_key>" . FLP_API_KEY_VAL . "</api_key>"
			. "<member_card_no>" . $member_card_no . "</member_card_no>"
			. "<identification_id>" . $identification_id . "</identification_id>"
			. "</request>";

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //文字列で取得
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //クライアント証明書を使うのでOFF
		curl_setopt($ch, CURLOPT_SSLCERT, FLP_API_CERTIFICATE_DIR . FLP_API_CERTIFICATE_FILE); //使用証明書パス
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

		$result = curl_exec($ch);
		curl_close($ch);

		$result = simplexml_load_string($result);
		if ($result === false) {
			return null;
		}
		return $result;
	}

	public function hstMngPntGrant($identification_id, $member_card_no, $pntValue, $reason)
	{
		$url = FLP_API_URL . "/v1/hst_mng_pnt_grant";
		$requestId = "dummyRequestId" + time();
		$registerName = "dummyRegisterName";
		$xml = "<request>"
			. "<company_cd>" . FLP_COMPANY_CD_VAL . "</company_cd>"
			. "<api_key>" . FLP_API_KEY_VAL . "</api_key>"
			. "<request_id>" . $requestId . "</request_id>"
			. "<register_name>" . $registerName . "</register_name>"
			. "<member_info>"
			. "<member_card_no>" . $member_card_no . "</member_card_no>"
			. "</member_info>"
			. "<point_info>"
			. "<identification_id>" . $identification_id . "</identification_id>"
			. "<pnt_value>" . $pntValue . "</pnt_value>"
			. "<reason>" . $reason . "</reason>"
			. "</point_info>"
			. "</request>";

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //文字列で取得
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //クライアント証明書を使うのでOFF
		curl_setopt($ch, CURLOPT_SSLCERT, FLP_API_CERTIFICATE_DIR . FLP_API_CERTIFICATE_FILE); //使用証明書パス
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

		$result = curl_exec($ch);
		curl_close($ch);

		$result = simplexml_load_string($result);
		if ($result === false) {
			return null;
		}
		return $result;
	}
}
