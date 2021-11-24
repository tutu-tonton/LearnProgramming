# パスパラメータ

## パスパラメータを引数として受け取る >> 変数として使用

```python

from fastapi import FastAPI

app = FastAPI()

@app.get("/countries/{country_name}")
async def country(country_name: str):
  return {"country_name": country_name}

```
