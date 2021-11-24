# オプションパラメータ

```python

from fastapi import FastAPI
from typing import Optional

app = FastAPI()

@app.get("/countries/")
async def country(country_name: Optional[str] = None, country_no: Optional[int] = None):
  return {
    "country_name": country_name,
    "country_no" : country_no
  }

```
