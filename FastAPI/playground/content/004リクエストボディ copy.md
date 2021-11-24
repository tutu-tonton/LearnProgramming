# リクエストボディ

> 独自の型を定義できる
それを型ヒントに使用

```python

from fastapi import FastAPI
from typing import Optional
from pydantic import BaseModel

# 独自の型定義
class Item(BaseModel):
  name: str
  description: Optional[str] = None
  price: int
  tax: Optional[float] = None

app = FastAPI()

@app.post("/item/")
async def create_item(item: Item): 
  return {
    "message": f"{item.name}は、税込価格{int(item.price*item.tax)}円です"
  }

```
