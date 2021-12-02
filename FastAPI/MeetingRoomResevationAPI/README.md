# 会議室予約API-tutorial

- fastapi側モデル(後のschemas)作成・オペレーションズ定義

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

- db側のデータ構造(models)定義
  - models.py
  - sqlalchemyのBaseモデルを継承

- FastAPI側のデータ構造定義
  - schemas.py
  - pydanticで定義したモデルをORマッパーに対応させる

## 54,55 データベースへの各種クエリを定義

- crud.py

- sqlalchemyの書き方で、データベースへの命令が書ける

```python
  def getでアクセスあったら、dbからデータ取得して、返す_users(db:Session,skip:int=0,limit:int=100):
    return db.query(models.User).offset(skip).limit(limit).all()
```

## 56 FastApi Read作成

- main.py
- getでアクセスあったら、dbからデータ取得して、返す

## 57 FastAPI Create作成

- main.py
- postあったら、crudで定義した関数実行する

## 58 dbでid付与されるパターン注意点

- schemas.py
- apiに送られてくるデータ型・本来あるべきデータ型

- 送られてくるデータにはidなし。本来のデータ型にはidあり
- create用のクラスが必要
- create用のクラスを継承して、本来あるべきデータ型出来上がる
- main.py
- postメソッド-入ってくるのはcreate型の不完全なデータ型

## 59 会議室登録画面作成

## 60 ユーザー・会議室一覧取得/ dict型生成

- dict- 名前に対して各種プロパティが付随する形

```python
users_dict = {
  'name' : id
  'name' : id
}
```

## 61 予約画面・ロジックもろもろ

- 会議室一覧表示
  - roomsリストをDF化、表示
- ユーザー・会議室は登録済みのものをセレクトボックスに表示
- submitボタン押されたら。。。
  - username->id, roomname->id変換
  - 登録用データに変換するため
  - validation: 定員チェック
    - capacity <> 人数
    - OKなら登録アクション、NGならエラーメッセージ表示

## 62 予約一覧表示

- 一覧表示されるが、名前がidなどになっており見づらい
- userid->username, roomid->roomnameなどにしたい
- idをキーにしたdict作成
- id->username,id->roomnameに変換する関数作成
- DF表の各列に関数適用
- 表のカラム名も見やすくする
