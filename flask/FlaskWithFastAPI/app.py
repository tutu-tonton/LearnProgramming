from fastapi import FastAPI, Request
from fastapi.middleware.wsgi import WSGIMiddleware
import uvicorn

from flask import Flask, render_template

# Init FastAPI App
app = FastAPI()
flask_app = Flask(__name__)
# Mount Flask on FastAPI
app.mount('/blog', WSGIMiddleware(flask_app))

# Flask Section
# http://127.0.0.1:8000/blog/


@flask_app.get('/')
def blog_page():
    return 'Blog Section from Flask'

# http://127.0.0.1:8000/blog/about


@flask_app.get('/about')
def about_page():
    return 'About Section from Flask'


# FastAPI Section
@app.get('/')
def read_root():
    return {'text': 'FastAPI Section'}


if __name__ == '__main__':
    uvicorn.run(app, host='127.0.0.1', port=8000)
