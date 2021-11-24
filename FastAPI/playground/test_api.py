import requests
import json


def main():
    # endpoint
    url = 'http://127.0.0.1:8000/item/'
    body = {
        "name": "T-shirt",
        "description": "string",
        "price": 5980,
        "tax": 1.1
    }
    # bodyはdict型。postするにはjson形式に直す!!
    res = requests.post(url, json.dumps(body))
    print(res.json())


if __name__ == "__main__":
    main()
