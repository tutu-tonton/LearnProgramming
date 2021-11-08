from flask import Flask, render_template

app = Flask(__name__)


@app.route('/')
def index():
    return render_template('index.html')


# この部分は別ファイル run.py でも良い
if __name__ == '__main__':
    app.run(debug=True)
