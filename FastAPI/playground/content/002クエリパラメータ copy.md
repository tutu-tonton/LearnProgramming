# クエリパラメータ

ルート定義の引数 : パスパラメータ
関数定義の引数 : クエリパラメータ

```python

from fastapi import FastAPI

app = FastAPI()

# country_nameはパスパラ
@app.get("/countries/{country_name}")
# パスパラ以外の引数は、クエリパラメータに設定される
async def country(country_name: str = 'japan', city_name = 'tokyo'):
  return {
    "country_name": country_name,
    "city_name" : city_name
  }

# アクセス例
`/countries/america?city_name=new_york`
```
