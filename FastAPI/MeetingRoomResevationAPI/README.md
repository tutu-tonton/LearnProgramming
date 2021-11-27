# 会議室予約API-tutorial

- モデル・ルーティング作成

- ユーザー登録画面仮設計
  - フォーム入力値をpost >> 画面に反映されるか
  - dict型のデータを、送信時にjson形式にする
  - `requests.post(url, data=json.dumps(data))`

- 予約画面設計
  
  - fastapiでは datetime.datetime >> str にする必要あり。メソッド .isoformat() 使う

  - `datetime.datetime().isoformat()`

