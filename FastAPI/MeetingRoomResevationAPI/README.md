# 会議室予約API-tutorial

- fastapi側モデル作成・httpメソッド定義

- ユーザー登録画面仮設計
  - フォーム入力値をpost >> 画面に反映されるか
  - dict型のデータを、送信時にjson形式にする
  - `requests.post(url, data=json.dumps(data))`

- 予約画面設計
  - fastapiでは datetime.datetime >> str にする必要あり。メソッド .isoformat() 使う

  - `datetime.datetime().isoformat()`

- SQLAlchemyインストール
- SQLAlchemy使用するための準備
  - database.py
  - engine, session, base

- db側のデータ構造定義
  - models.py
  - sqlalのBaseモデルを継承