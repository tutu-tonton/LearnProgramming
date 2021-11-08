from flask import Flask

app = Flask(__name__)


@app.route('/')
def index():
    return 'Hello World'


# この部分は別ファイル run.py でも良い
if __name__ == '__main__':
    app.run(debug=True)
