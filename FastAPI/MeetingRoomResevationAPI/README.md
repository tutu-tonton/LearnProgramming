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

- getでアクセスあったら、dbからデータ取得して、返す